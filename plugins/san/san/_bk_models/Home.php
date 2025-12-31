<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Home extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $jsonable = ['content_1'];
    public $attachOne = [
        'meta_image' => 'System\Models\File',
        'slogan' => 'System\Models\File',
        'banner' => 'System\Models\File'
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