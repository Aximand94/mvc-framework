<?php


namespace app\controller;

use app\model\MainModel;
use R;

class MainController extends AppController
{

    public $layout = 'main';

    public function index(){
        $model = new MainModel;
        //$posts = $model->selectAll();
        $posts = R::findAll('posts');
        //$this->test();
        $menu = $this->navMenu;
        $this->setVars(compact('posts', 'menu'));
    }

    public function test(){
        $this->layout = 'test';
    }

    public function about(){
        //header("Location: ".SITE);
        echo "<h2>About page.</h2>";
    }

    public function delete(){
        $model = new MainModel;
        $model->delete(5);
        header("Location: ".SITE."main/index");
    }

    public function update(){
        $model = new MainModel;
        $model->update(3, 'id', 'title', 'UPD');
        header("Location: ".SITE."main/index");
    }
}