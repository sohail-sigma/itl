<?php namespace ITLWorld\IpCountries;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    public function registerNavigation()
{
    return [
        'ipcountries' => [
            'label'       => 'IP Countries',
            'url'         => Backend::url('itlworld/ipcountries/countryrules'),
            'icon'        => 'icon-globe',
            'permissions' => ['itlworld.ipcountries.*'],
            'order'       => 500,
        ]
    ];
}
//     public function registerNavigation()
// {
//     return [
//         'ipbasedcountries' => [
//             'label'       => 'IP Based Countries',
//             'url'         => Backend::url('itlworld/ipbasedcountries/mappings'),
//             'icon'        => 'icon-globe',
//             'permissions' => ['itlworld.ipbasedcountries.*'],
//             'order'       => 500,
//         ],
//     ];
// }

}
