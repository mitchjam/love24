<?php namespace MitchellJamieson\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Song extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'can_manage_weddings' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MitchellJamieson.Blog', 'weddings', 'songs');
    }
}