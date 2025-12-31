<?php namespace Briddle\Data;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use Lang;
use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'briddle.data::lang.plugin.name',
            'description' => 'briddle.data::lang.plugin.description',
            'author'      => 'Briddle',
            'icon'        => 'icon-hdd-o',
            'homepage'    => 'https://briddle.nl'
        ];
    }

    public function registerPermissions()
    {
        return [
            'briddle.data.settings' => [
                'tab' => 'briddle.data::lang.plugin.name',
                'label' => 'briddle.data::lang.labels.settings',
            ],
            'briddle.data.import' => [
                'tab' => 'briddle.data::lang.plugin.name',
                'label' => 'briddle.data::lang.labels.import',
            ]
        ];
    }

    // public function registerNavigation()
    // {
    //     return [
    //         'data' => [
    //             'label'       => 'briddle.data::lang.plugin.name',
    //             'url'         => Backend::url('briddle/data/import'),
    //             'icon'        => 'icon-hdd-o',
    //             //'iconSvg'     => 'plugins/briddle/data/assets/images/data-icon.svg',
    //             'permissions' => ['briddle.data.import'],
    //             'order'       => 400,
    //         ]
    //     ];
    // }

    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'briddle.data::lang.settings.name',
                'icon'        => 'icon-cog',
                'description' => 'briddle.data::lang.settings.description',
                'class'       => 'Briddle\Data\Models\Settings',
                'permissions' => ['briddle.data.settings'],
                'order'       => 600
            ]
        ];
    }
}
