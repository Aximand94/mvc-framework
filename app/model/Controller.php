<?php
namespace app\model;

abstract class Controller
{
    public $route =[];
    public $view;

    public function __construct($route){
        $this->route = $route;
        //$this->view = $route['action'];
        //include ROOT."app/view/{$route['controller']}/".$this->view.".php";
    }
}