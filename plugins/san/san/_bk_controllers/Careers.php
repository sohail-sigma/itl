<?php

namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Careers extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ImportExportController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'cms_permission',
        'hr_permissions',
        'marketing_team'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'cvs-menu-item-cv', 'cvs-menu-item');
    }

    public function formExtendQuery($query)
    {
        $query->withTrashed();
    }
}
