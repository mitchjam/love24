<?php namespace MitchellJamieson\Blog\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Submissions extends Controller
{
    public $implement = ['Backend\Behaviors\ListController'];
    
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'can_manage_weddings' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MitchellJamieson.Blog', 'submissions');
    }
}