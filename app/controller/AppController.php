<?php


namespace app\controller;


use app\core\Controller;
use app\model\MainModel;
use R;

class AppController extends Controller
{
    public $navMenu;
    protected $admin = false;

    public function __construct($route){
        parent::__construct($route);
        /*(
        if($this->route['action']=='test'){
            $this->admin = true;
        } */
        new MainModel;
        $this->navMenu = R::findAll('tags');
    }
}