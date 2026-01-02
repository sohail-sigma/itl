<?php

namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Backend\Facades\Backend;
use san\San\Models\CareerPositions;
use san\San\Models\Careers as CareersModel;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use League\Csv\Writer as CsvWriter;
use League\Csv\EscapeFormula as CsvEscapeFormula;
use SplTempFileObject;
use File as FileHelper;

class Careers extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ImportExportController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'cms_permission',
        'hr_permissions',
        'marketing_team'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'cvs-menu-item-cv', 'cvs-menu-item');
    }

    public function formExtendQuery($query)
    {
        $query->withTrashed();
    }

    /**
     * Extend the query used for populating the list
     * Filter by position if position filter is set
     */
    public function listExtendQuery($query, $definition = null)
    {
        $positionFilter = input('position_filter');
        if ($positionFilter && $positionFilter !== 'all') {
            $query->where('careerpositions_id', $positionFilter);
        }
    }

    /**
     * Generate filename with name and last 4-5 digits of phone number
     * 
     * @param string $name User's full name
     * @param string $phone Phone number
     * @param string $extension File extension (without dot)
     * @return string Sanitized filename
     */
    protected function generateFilename($name, $phone, $extension = 'pdf')
    {
        // Get last 4-5 digits of phone number
        $phoneDigits = '';
        if (!empty($phone)) {
            // Remove all non-numeric characters
            $phoneNumbers = preg_replace('/[^0-9]/', '', $phone);
            // Get last 5 digits, or last 4 if less than 5 digits available
            $phoneDigits = substr($phoneNumbers, -5);
            if (strlen($phoneDigits) < 4) {
                $phoneDigits = substr($phoneNumbers, -4);
            }
        }
        
        // Sanitize name: remove special characters, replace spaces with hyphens
        $sanitizedName = preg_replace('/[^a-zA-Z0-9\-_]/', '-', $name ?? 'Unknown');
        $sanitizedName = preg_replace('/-+/', '-', $sanitizedName); // Replace multiple hyphens with single
        $sanitizedName = trim($sanitizedName, '-'); // Remove leading/trailing hyphens
        $sanitizedName = $sanitizedName ?: 'Unknown'; // Fallback if name becomes empty after sanitization
        
        // Combine name and phone digits
        if (!empty($phoneDigits)) {
            $filename = $sanitizedName . '-' . $phoneDigits . '.' . $extension;
        } else {
            $filename = $sanitizedName . '.' . $extension;
        }
        
        return $filename;
    }

    /**
     * Download CV file with custom filename
     */
    public function downloadCv($recordId = null)
    {
        $recordId = $recordId ?: input('id');
        
        if (!$recordId) {
            \Flash::error('Invalid record ID');
            return redirect(Backend::url('san/san/careers'));
        }

        $record = CareersModel::find($recordId);
        
        if (!$record) {
            \Flash::error('Record not found');
            return redirect(Backend::url('san/san/careers'));
        }

        if (empty($record->user_cv)) {
            \Flash::error('CV file not found');
            return redirect(Backend::url('san/san/careers'));
        }

        $filePath = storage_path('app/uploads/public/cv/' . ltrim($record->user_cv, '/'));
        
        if (!FileHelper::exists($filePath)) {
            \Flash::error('CV file not found on server');
            return redirect(Backend::url('san/san/careers'));
        }

        // Get file extension from original filename
        $extension = FileHelper::extension($record->user_cv) ?: 'pdf';
        
        // Generate custom filename
        $customFilename = $this->generateFilename($record->fulll_name, $record->phone, $extension);
        
        // Return download response with custom filename
        return Response::download($filePath, $customFilename);
    }

    /**
     * Override export to set filename based on position filter
     */
    public function onExport()
    {
        $data = post();
        $behavior = $this->asExtension('ImportExportController');
        
        // Check if position filter is set and not "all"
        if (!empty($data['position_filter']) && $data['position_filter'] !== 'all') {
            // Sanitize position name for filename
            $positionName = $data['position_filter'];
            $sanitizedName = preg_replace('/[^a-zA-Z0-9\-_]/', '-', $positionName);
            $sanitizedName = preg_replace('/-+/', '-', $sanitizedName);
            $sanitizedName = trim($sanitizedName, '-');
            $sanitizedName = $sanitizedName ?: 'position';
            
            // Use reflection to set the protected exportFileName property
            $reflection = new \ReflectionClass($behavior);
            $property = $reflection->getProperty('exportFileName');
            $property->setAccessible(true);
            $property->setValue($behavior, $sanitizedName . '.csv');
        }
        
        // Call parent export method
        return $behavior->onExport();
    }

    /**
     * Direct export for individual record
     * Standalone method - exports only the specific record clicked
     * Does not use the bulk export functionality
     */
    public function exportRecord($recordId = null)
    {
        $recordId = $recordId ?: post('record_id');
        
        if (!$recordId) {
            \Flash::error('Invalid record ID');
            return redirect(Backend::url('san/san/careers'));
        }

        // Get the specific record only
        $record = CareersModel::find($recordId);
        
        if (!$record) {
            \Flash::error('Record not found');
            return redirect(Backend::url('san/san/careers'));
        }

        // Process questions and answers - separate into individual columns
        $decodedQuestions = json_decode($record->all_questions, true) ?: [];
        $questionColumns = [];

        foreach ($decodedQuestions as $index => $question) {
            $questionLabel = $question['q'] ?? '';
            $answer = $question['a'] ?? '';
            if ($questionLabel !== '' || $answer !== '') {
                $questionColumns[] = $questionLabel . ' (' . $answer . ')';
            }

            // Add subquestions as separate columns
            if (!empty($question['subquestions'])) {
                foreach ($question['subquestions'] as $subQuestion) {
                    $subLabel = $subQuestion['sub_q'] ?? '';
                    $subAnswer = $subQuestion['sub_a'] ?? '';
                    if ($subLabel !== '' || $subAnswer !== '') {
                        $questionColumns[] = $subLabel . ' (' . $subAnswer . ')';
                    }
                }
            }
        }

        // Build CV link
        $cvLink = $record->user_cv
            ? url('storage/app/uploads/public/cv/' . ltrim($record->user_cv, '/'))
            : '';

        // Format submitted date
        $submittedOn = $record->created_at
            ? Carbon::parse($record->created_at)->format('Y-m-d H:i:s')
            : '';

        // Build row data - standard columns first, questions at the end
        $rowData = [
            'name' => $record->fulll_name ?? '',
            'email' => $record->c_email ?? '',
            'phone' => $record->phone ?? '',
            'gender' => $record->gender ?? '',
            'dob' => $record->dob ?? '',
            'position' => $record->careerpositions_id ?? '',
            'cv_link' => $cvLink,
            'submitted_on' => $submittedOn,
        ];

        // Add question columns to row data
        foreach ($questionColumns as $index => $questionText) {
            $rowData['question_' . ($index + 1)] = $questionText;
        }

        // Build headers - standard columns first, then question columns
        $headers = [
            'Name',
            'Email',
            'Phone',
            'Gender',
            'Date of Birth',
            'Position',
            'CV Link',
            'Submitted On'
        ];

        // Add question column headers
        foreach ($questionColumns as $index => $questionText) {
            $headers[] = 'Question ' . ($index + 1);
        }

        // Create CSV
        $csv = CsvWriter::createFromFileObject(new SplTempFileObject);
        $csv->setOutputBOM(CsvWriter::BOM_UTF8);
        $csv->addFormatter(new CsvEscapeFormula());

        // Add headers
        $csv->insertOne($headers);

        // Build CSV row - standard columns first, then question columns
        $csvRow = [
            $rowData['name'],
            $rowData['email'],
            $rowData['phone'],
            $rowData['gender'],
            $rowData['dob'],
            $rowData['position'],
            $rowData['cv_link'],
            $rowData['submitted_on']
        ];

        // Add question columns
        foreach ($questionColumns as $index => $questionText) {
            $csvRow[] = $questionText;
        }

        $csv->insertOne($csvRow);

        // Generate filename using helper method with name and phone digits
        $fileName = $this->generateFilename($record->fulll_name, $record->phone, 'csv');

        // Return download response
        return Response::make($csv->__toString(), 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }
}
