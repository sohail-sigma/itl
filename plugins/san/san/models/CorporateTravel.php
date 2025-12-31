<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class CorporateTravel extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $jsonable = ['content_9','banner_iframe'];
    public $attachOne = [
        'banner' => 'System\Models\File',
        'meta_image' => 'System\Models\File'
    ];
    public $attachMany = [
        'banner_image' => 'System\Models\File',
        'mob_banner_image' => 'System\Models\File'
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
