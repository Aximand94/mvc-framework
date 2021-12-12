<?php


namespace app\controller;

use app\model\MainModel;

class MainController extends AppController
{

    public $layout = 'main';

    public function index(){
        $model = new MainModel;
        $posts = $model->selectAll();
        $this->setVars(compact('posts'));
    }



    public function about(){
        echo "<h2>About page.</h2>";
    }
}