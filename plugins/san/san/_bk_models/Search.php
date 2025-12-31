<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Search extends Model
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
    public $table = 'san_san_page';
    public $attachOne = [
        'banner' => 'System\Models\File',
        'meta_image' => 'System\Models\File'
    ];
    protected $jsonable = ['content_9','banner_iframe'];

    public $attachMany = [
        'banner_image' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
