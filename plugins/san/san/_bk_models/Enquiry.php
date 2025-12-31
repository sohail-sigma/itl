<?php

namespace san\San\Models;

use Model;

/**
 * Model
 */
class Enquiry extends Model
{
    use \Winter\Storm\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'san_san_enquiry';

    /**
     * @var array Validation rules
     */
    public $rules = [];
}
