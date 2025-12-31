<?php namespace San\Api;

use Backend;
use System\Classes\PluginBase;

/**
 * Api Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SAN Api',
            'description' => 'Api Settings',
            'author'      => 'San',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'San\Api\Components\Header' => 'apiHeader',
            'San\Api\Components\Form' => 'apiFrom',
            'San\Api\Components\Functions' => 'apiFunction',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'san.api.some_permission' => [
                'tab' => 'Api',
                'label' => 'Some permission and Form'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'api' => [
                'label'       => 'Api',
                'url'         => Backend::url('san/api/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['san.api.*'],
                'order'       => 500,
            ],
        ];
    }
}
