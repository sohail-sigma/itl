<?php namespace san\San\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Campaign1 extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController' ,
        'Backend\Behaviors\ImportExportController'
    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('san.San', 'main-menu-item7', 'side-menu-campaign1');
    }
}
