<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Newsletter extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController','Backend\Behaviors\ImportExportController'    ];
    
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'cms_permission' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item4', 'side-menu-newsletter');
    }
}
