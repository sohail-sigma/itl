<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class SwissSummerCampaign extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item7', 'side-menu-swisssummercampaign');
    }
}
