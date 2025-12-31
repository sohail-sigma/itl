<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Countries extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_countries';
    protected $jsonable = ['cities','experiences'];
    public $belongsTo = [
        'destination' => \San\San\Models\Destinations::class
    ];

    public $attachOne = [
        'meta_image' => 'System\Models\File',
        'banner' => 'System\Models\File'
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
