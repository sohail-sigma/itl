<?php

namespace san\San\Models;

use Model;

/**
 * Model
 */
class Destinations extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;
    use \Winter\Storm\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_destinations';
    public $attachOne = [
        'banner' => 'System\Models\File',
        'image' => 'System\Models\File',
        'thumbnail' => 'System\Models\File',
        'meta_image' => 'System\Models\File',
        'holidays_thumbnail' => 'System\Models\File'
    ];
    protected $slugs = ['slug' => 'title'];
    public $rules = [
            'slug' => 'unique:san_san_destinations,slug',
    ];

    protected $jsonable = ['packages','banner_iframe'];
    public $belongsToMany = [
        'packages' => \San\San\Models\Packages::class
    ];
    public $attachMany = [
        'banner_image' => 'System\Models\File'
    ];
    // public function scopeActive($query)
    // {
    //     return $query->where('status', 1);
    // }
}
