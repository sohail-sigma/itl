<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Experiences extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'cms_permission', 
        'blog_permission', 
        'seo_permission' ,
        'marketing_team' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item', 'side-menu-item6');
    }
}
