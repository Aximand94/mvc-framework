<?php


namespace app\controller;

use app\model\Controller;

class MainController extends Controller
{

    public function index(){
        echo "<h2>Index page.</h2>";
    }
    public function about(){
        //debug($this->route);
        echo "<h2>About page.</h2>";
    }
}