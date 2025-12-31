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

        // Process questions and answers
        $decodedQuestions = json_decode($record->all_questions, true) ?: [];
        $allQuestionsText = [];

        foreach ($decodedQuestions as $index => $question) {
            $questionLabel = $question['q'] ?? '';
            $answer = $question['a'] ?? '';
            if ($questionLabel !== '' || $answer !== '') {
                $allQuestionsText[] = sprintf('Q%d: %s (%s)', $index + 1, $questionLabel, $answer);
            }

            // Add subquestions
            if (!empty($question['subquestions'])) {
                foreach ($question['subquestions'] as $subQuestion) {
                    $subLabel = $subQuestion['sub_q'] ?? '';
                    $subAnswer = $subQuestion['sub_a'] ?? '';
                    if ($subLabel !== '' || $subAnswer !== '') {
                        $allQuestionsText[] = sprintf('Sub: %s (%s)', $subLabel, $subAnswer);
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

        // Build row data - matching export columns format
        $rowData = [
            'name' => $record->fulll_name ?? '',
            'email' => $record->c_email ?? '',
            'phone' => $record->phone ?? '',
            'gender' => $record->gender ?? '',
            'dob' => $record->dob ?? '',
            'position' => $record->careerpositions_id ?? '',
            'questions' => implode(" | ", $allQuestionsText),
            'cv_link' => $cvLink,
            'submitted_on' => $submittedOn,
        ];

        // Column headers matching export_columns.yaml
        $headers = [
            'Name',
            'Email',
            'Phone',
            'Gender',
            'Date of Birth',
            'Position',
            'Questions & Answers',
            'CV Link',
            'Submitted On'
        ];

        // Create CSV
        $csv = CsvWriter::createFromFileObject(new SplTempFileObject);
        $csv->setOutputBOM(CsvWriter::BOM_UTF8);
        $csv->addFormatter(new CsvEscapeFormula());

        // Add headers
        $csv->insertOne($headers);

        // Add single data row
        $csvRow = [
            $rowData['name'],
            $rowData['email'],
            $rowData['phone'],
            $rowData['gender'],
            $rowData['dob'],
            $rowData['position'],
            $rowData['questions'],
            $rowData['cv_link'],
            $rowData['submitted_on']
        ];
        $csv->insertOne($csvRow);

        // Generate filename using user's name
        $userName = $record->fulll_name ?? 'Unknown';
        // Sanitize filename: remove special characters, replace spaces with hyphens
        $sanitizedName = preg_replace('/[^a-zA-Z0-9\-_]/', '-', $userName);
        $sanitizedName = preg_replace('/-+/', '-', $sanitizedName); // Replace multiple hyphens with single
        $sanitizedName = trim($sanitizedName, '-'); // Remove leading/trailing hyphens
        $sanitizedName = $sanitizedName ?: 'Unknown'; // Fallback if name becomes empty after sanitization
        
        $fileName = $sanitizedName . '.csv';

        // Return download response
        return Response::make($csv->__toString(), 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }
}
