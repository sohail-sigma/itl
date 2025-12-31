<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Partners extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_partners';
    public $attachOne = [
        'logo' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
