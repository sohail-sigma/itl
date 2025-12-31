<?php namespace san\San\Models;

use Model;

/**
 * Model
 */
class Themes extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_themes';
    public $attachOne = [
        'banner' => 'System\Models\File',
        'meta_image' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getThemeOptions()
    {
        return Themes::lists('title', 'id');
    }
    public function onRun($query)
    {
        return $query->where('status', 1);
    }
}
