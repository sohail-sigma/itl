<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Booking extends Controller
{
    public $implement = [    'Backend.Behaviors.ImportExportController',    'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = [
        'cms_permission' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item', 'side-menu-item5');
    }
}
