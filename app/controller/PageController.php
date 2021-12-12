<?php


namespace app\controller;


class PageController extends AppController
{
    public function index(){
        echo "<h2>Page index</h2>";
    }

    public function view(){
        debug($this->route);
        debug($_GET);
        echo $_GET['page'];
        echo "<h2>Page view</h2>";
    }
}