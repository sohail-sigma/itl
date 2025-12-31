<?php namespace san\San;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;
use san\San\Classes\IpBlockMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Backend;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    public function boot()
    {
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(IpBlockMiddleware::class);

        // \Route::get('/searchcity', 'San\San\Controllers\Home@searcssssshCity');


        Event::listen('backend.menu.extendItems', function($manager) {
            $manager->removeSideMenuItems('Winter.Pages', 'Pages', ['content','snippets']);

            /*$manager->addSideMenuItems('Winter.Pages', 'Pages', [
                'home' => [
                    'label' => 'Home',
                    'icon'  => 'icon-home',
                    'code'  => 'home',
                    'owner' => 'San.San',
                    'url'   => Backend::url('san/san/home/update/1'),
                    'permissions' => ['winter.pages.manage_content'],
                    'order' => 0
                ]
            ]);*/
        });   
    }
}
