<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Formimages extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $attachOne = [
        'holiday_img' => 'System\Models\File',
        'hotel_img' => 'System\Models\File',
        'flight_img' => 'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_page';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
