<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class EnquiryEmails extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'cms_permission', 
        'blog_permission', 
        'seo_permission' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item3', 'side-menu-enq-emails');
    }
}
