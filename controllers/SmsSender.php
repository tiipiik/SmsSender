<?php namespace Tiipiik\SmsSender\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * SmsSender Back-end Controller
 */
class SmsSender extends Controller
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

        BackendMenu::setContext('Tiipiik.SmsSender', 'smssender', 'smssender');
    }
}