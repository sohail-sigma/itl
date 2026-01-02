<?php

namespace san\San\Models;

use Carbon\Carbon;
use san\San\Models\Careers;

class ExportCareersModel extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $data = post();

        $query = Careers::query();
        if (!empty($data['all_ids'])) {
            $ids = array_filter(explode(',', $data['all_ids']));
            if (!empty($ids)) {
                $query->whereIn('id', $ids);
            }
        }

        // Filter by position if position filter is set
        if (!empty($data['position_filter']) && $data['position_filter'] !== 'all') {
            $query->where('careerpositions_id', $data['position_filter']);
        }

        $records = $query->get();
        $rows = [];
        $selectedColumns = $columns ?: null;

        // First pass: Find maximum number of questions across all records
        $maxQuestions = 0;
        foreach ($records as $record) {
            $decodedQuestions = json_decode($record->all_questions, true) ?: [];
            $questionCount = 0;
            
            foreach ($decodedQuestions as $question) {
                $questionLabel = $question['q'] ?? '';
                $answer = $question['a'] ?? '';
                if ($questionLabel !== '' || $answer !== '') {
                    $questionCount++;
                }
                
                // Count subquestions
                if (!empty($question['subquestions'])) {
                    foreach ($question['subquestions']   as $subQuestion) {
                        $subLabel = $subQuestion['sub_q'] ?? '';
                        $subAnswer = $subQuestion['sub_a'] ?? '';
                        if ($subLabel !== '' || $subAnswer !== '') {
                            $questionCount++;
                        }
                    }
                }
            }
            
            if ($questionCount > $maxQuestions) {
                $maxQuestions = $questionCount;
            }   
        }

        // Second pass: Build rows with separate question columns
        foreach ($records as $record) {
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

            // Pad question columns to match maxQuestions
            while (count($questionColumns) < $maxQuestions) {
                $questionColumns[] = '';
            }

            $cvLink = $record->user_cv
                ? url('storage/app/uploads/public/cv/' . ltrim($record->user_cv, '/'))
                : '';

            $submittedOn = $record->created_at
                ? Carbon::parse($record->created_at)->format('Y-m-d H:i:s')
                : '';

            // Build row: standard columns first, then question columns at the end
            $row = [
                'name' => $record->fulll_name,
                'email' => $record->c_email,
                'phone' => $record->phone,
                'gender' => $record->gender,
                'dob' => $record->dob,
                'position' => $record->careerpositions_id,
                'cv_link' => $cvLink,
                'submitted_on' => $submittedOn,
            ];

            // Add question columns at the end
            for ($i = 0; $i < $maxQuestions; $i++) {
                $row['question_' . ($i + 1)] = $questionColumns[$i] ?? '';
            }

            if ($selectedColumns) {
                $rows[] = array_intersect_key($row, array_flip($selectedColumns));
            } else {
                $rows[] = $row;
            }
        }

        return $rows;
    }
}