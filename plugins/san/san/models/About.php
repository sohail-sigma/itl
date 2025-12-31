<?php

namespace san\San\Models;

use Model;

/**
 * Model
 */
class About extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $jsonable = ['content_9','banner_iframe'];
    public $attachOne = [
        'meta_image' => 'System\Models\File',
        'experience' => 'System\Models\File',
        'chairman' => 'System\Models\File',
        'ceo' => 'System\Models\File',
        'affiliates_partners' => 'System\Models\File',
        'mission' => 'System\Models\File',
        'values' => 'System\Models\File',
        'award' => 'System\Models\File',
        'banner' => 'System\Models\File',
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
    public $rules = [];
}
