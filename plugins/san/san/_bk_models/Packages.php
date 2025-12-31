<?php

namespace san\San\Models;

use Model;
use DB;

/**
 * Model
 */
class Packages extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;
    use \Winter\Storm\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_packages';
    protected $jsonable = ['experiences', 'inclusions', 'exclusions', 'others', 'price', 'dates', 'countries', 'itineraries', 'months','cities','nearest_airport'];
    protected $slugs = ['slug' => 'name'];
   
    public $belongsTo = [
        'theme' => \San\San\Models\Themes::class,
        'country' => \San\San\Models\Countries::class
    ];
    public $belongsToMany = [
        'destinations' => \San\San\Models\Destinations::class
    ];


    public $attachOne = [
        'banner' => 'System\Models\File',
        'thumbnail' => 'System\Models\File',
        'overview_image' => 'System\Models\File',
        'inclusions_image' => 'System\Models\File',
        'exclusions_image' => 'System\Models\File',
        'date_image' => 'System\Models\File',
        'meta_image' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'slug' => 'unique:san_san_packages,slug',
    ];

    public function scopeActive($query, $status)
    {
        return $query->where('status', $status);
    }
    public function scopeSearch($query)
    {
        $data =  $query->where('status', 1);

        if (get('package') && get('package') != 'any') {
            $data =  $query->where('status', 1)->where('title', get('package'));
        }

        if (get('month') && get('month') != 'any') {
            $months = [1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"];
            $m = @$months[get('month')];
            // if ($m) $data = $data->whereJsonContains('months', $m);
        }

        return $data;
    }
}
