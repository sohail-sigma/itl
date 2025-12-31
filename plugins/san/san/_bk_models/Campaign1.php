<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Campaign1 extends Model
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
    public $table = 'san_san_campaign1';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
