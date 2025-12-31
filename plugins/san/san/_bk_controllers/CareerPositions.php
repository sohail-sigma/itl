<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CareerPositions extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'cms_permission',
        'hr_permissions',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item6', 'position-menu-item');
    }
}
