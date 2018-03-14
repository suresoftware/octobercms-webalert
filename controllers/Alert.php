<?php namespace SureSoftware\WebAlert\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Alert Back-end Controller
 */
class Alert extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('SureSoftware.WebAlert', 'webalert', 'alert');
    }
}
