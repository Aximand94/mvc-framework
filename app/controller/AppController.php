<?php


namespace app\controller;


use app\core\Controller;
use app\model\MainModel;
use R;

class AppController extends Controller
{
    public $navMenu;
    //protected $is_admin = false;
    public array $meta=[];

    public function __construct($route){
        parent::__construct($route);
        /*(
        if($this->route['action']=='test'){
            $this->admin = true;
        } */
        new MainModel;
        $this->navMenu = R::findAll('tags');
    }

    protected function setMeta($title='', $desc='',$keywords=''){
        $this->meta = compact('title', 'desc', 'keywords');
    }
}