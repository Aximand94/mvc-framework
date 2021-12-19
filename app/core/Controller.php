<?php
namespace app\core;

use app\core\View;

abstract class Controller
{
    public $route =[];
    public $view;
    public $layout;
    public array $vars = [];

    public function __construct($route){
        $this->route = $route;
        $this->view = $route['action'];
        //$this->view = $route['action'];
        //include ROOT."app/view/{$route['controller']}/".$this->view.".php";

    }

    public function getView(){
        $viewObj = new View($this->route,$this->view,$this->layout);
        $viewObj->render($this->vars);
    }

    public function setVars($vars){
        $this->vars = $vars;
    }

    public function isAjax(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest';
    }

    public function loadView($view, $vars=[]){
        extract($vars);
        require(ROOT."app/view/".$this->route['controller']).'/'.$view.'.php';
    }
}