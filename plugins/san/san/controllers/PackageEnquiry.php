<?php
namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PackageEnquiry extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\ImportExportController',
    ];

    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'cms_permission',
        'marketing_team'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item', 'package-enquiry-menu');
    }
}
