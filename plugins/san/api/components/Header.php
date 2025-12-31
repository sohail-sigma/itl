<?php namespace San\Api\Components;

use Cms\Classes\ComponentBase;

class Header extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Header Component',
            'description' => 'default header for api'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET,POST,REQUEST');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
    }
}
