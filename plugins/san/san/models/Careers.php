<?php

namespace san\San\Models;

use Model;

/**
 * Model
 */
class Careers extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $attachOne = [
        'cv' => ['System\Models\File', 'public' => false]
    ];
    public $belongsTo = [
        'careerpositions' => \San\San\Models\CareerPositions::class,
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_careers';

    /**
     * @var array Validation rules
     */
    public $rules = [];
}
