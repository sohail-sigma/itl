<?php

namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Career extends Controller
{
    public $implement = ['Backend\Behaviors\FormController'];

    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'cms_permission',
        'hr_permissions',
        'marketing_team' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item6', 'cvs-menu-item');
    }
}
