<?php


namespace app\controller;

use app\model\MainModel;
use R;
use app\core\App;

class MainController extends AppController
{

    public $layout = 'main';  //main

    public function index(){
        //App::$app->get();
        R::fancyDebug(true);
        $model = new MainModel;
        //$posts = $model->selectAll();
        $posts = App::$app->cache->getCache('posts');

        if(!$posts){
            $posts = R::findAll('posts');
            App::$app->cache->setCache('posts', $posts, 3600*24);
        }
        echo date('Y-m-d H:i', time());
        echo "<br>";
        echo date('Y-m-d H:i', 1639770285);
        echo "<br>";
        $post = R::findOne('posts','id=1');
        $this->setMeta('MainPage','описание страницы','ключевые слова');
        //$this->setMeta($post->title,$post->content);
        $menu = $this->navMenu;
        $meta = $this->meta;
        $this->setVars(compact('posts', 'menu', 'meta'));
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