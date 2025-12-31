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

        foreach ($records as $record) {
            $decodedQuestions = json_decode($record->all_questions, true) ?: [];
            $allQuestionsText = [];

            foreach ($decodedQuestions as $index => $question) {
                $questionLabel = $question['q'] ?? '';
                $answer = $question['a'] ?? '';
                if ($questionLabel !== '' || $answer !== '') {
                    $allQuestionsText[] = sprintf('Q%d: %s (%s)', $index + 1, $questionLabel, $answer);
                }

                // Add subquestions under the main question
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

            $cvLink = $record->user_cv
                ? url('storage/app/uploads/public/cv/' . ltrim($record->user_cv, '/'))
                : '';

            $submittedOn = $record->created_at
                ? Carbon::parse($record->created_at)->format('Y-m-d H:i:s')
                : '';

            $row = [
                'name' => $record->fulll_name,
                'email' => $record->c_email,
                'phone' => $record->phone,
                'gender' => $record->gender,
                'dob' => $record->dob,
                'position' => $record->careerpositions_id,
                'questions' => implode(" | ", $allQuestionsText),
                'cv_link' => $cvLink,
                'submitted_on' => $submittedOn,
            ];

            if ($selectedColumns) {
                $rows[] = array_intersect_key($row, array_flip($selectedColumns));
            } else {
                $rows[] = $row;
            }
        }

        return $rows;
    }
}