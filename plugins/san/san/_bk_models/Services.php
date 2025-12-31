<?php

namespace san\San\Models;

use Model;

/**
 * Model
 */
class Services extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_services';
    public $attachOne = [
        'banner' => 'System\Models\File',
        'icon' => 'System\Models\File',
        'meta_image' => 'System\Models\File',
        'button_icon' => 'System\Models\File',
        'svg_icon' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
