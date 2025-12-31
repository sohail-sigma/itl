<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Test extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_test270224';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
