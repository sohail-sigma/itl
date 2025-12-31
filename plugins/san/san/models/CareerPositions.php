<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class CareerPositions extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_career_positions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'subquestions.*.parent_question' => 'required',
        'subquestions.*.subquestion_text' => 'required',
        'subquestions.*.subquestion_type' => 'required',
        'subquestions.*.subquestion_options' => 'required_if:subquestions.*.subquestion_type,Dropdown',
    ];

    /**
     * @var array Custom error messages
     */
    public $customMessages = [
        'subquestions.*.parent_question.required' => 'The Parent Question is required.',
        'subquestions.*.subquestion_text.required' => 'The Subquestion Text is required.',
        'subquestions.*.subquestion_type.required' => 'The Subquestion Type is required.',
        'subquestions.*.subquestion_options.required_if' => 'Options are required when Subquestion Type is Dropdown.',
    ];
    
    protected $jsonable = ['questionnaires', 'subquestions'];
    
}
