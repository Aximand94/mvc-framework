<?php


namespace app\controller;



class MainController extends AppController
{

    public $layout = 'main';

    public function index(){
        //$this->layout = false;
        //$this->layout = 'main';
        // $this->view = 'test';
        //echo "<h2>Index page.</h2>";
        $name = 'Bohdan';
        $age = 27;
        $array = [
            'color'=>'white',
            'work'=>'police'
        ];
        $this->setVars(compact('name', 'age', 'array'));
    }
    public function about(){
        echo "<h2>About page.</h2>";
    }
}