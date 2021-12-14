<?php


namespace app\controller;


class PageController extends AppController
{
    public function index(){
        echo "<h2>Page index</h2>";
    }

    public function view(){
        //debug($this->route);
        $menu = $this->navMenu;
        $admin = $this->admin;
        $this->setVars(compact( 'menu', 'admin'));
    }
}