<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Testfrom extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'cms_permission', 
        'hr_permissions' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'test-menu-item');
    }
}
