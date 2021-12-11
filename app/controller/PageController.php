<?php


namespace app\controller;

use app\model\Controller;

class PageController extends Controller
{
    public function index(){
        debug($this->route);
        echo "<h2>Page index</h2>";
    }

    public function view(){
        debug($this->route);
        debug($_GET);
        echo $_GET['page'];
        echo "<h2>Page view</h2>";
    }
}