<?php namespace Briddle\Data\Models;

use October\Rain\Database\Model;

/**
 * Data settings model
 *
 * @package briddle\data
 * @author Briddle
 *
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'briddle_data_settings';

    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
        'suffix' => 'regex:/^[A-Za-z0-9_]+$/i',
    ];
}
