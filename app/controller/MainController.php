<?php


namespace app\controller;

use app\model\MainModel;
use R;
use app\core\App;

class MainController extends AppController
{

    public string $layout = 'default';  //main

    public function index(){
        /*
        R::fancyDebug(true);
        $model = new MainModel;
        $posts = $model->selectAll(); */
        $posts = R::findAll('posts');
        /*
        $posts = App::$app->cache->getCache('posts');
        if(!$posts){
            $posts = R::findAll('posts');
            App::$app->cache->setCache('posts', $posts, 3600*24);
        }
        */
        $post = R::findOne('posts','id=1');
        $this->setMeta('MainPage','описание страницы','ключевые слова');
        //$this->setMeta($post->title,$post->content);
        $menu = $this->navMenu;
        $meta = $this->meta;
        $this->setVars(compact('posts', 'menu', 'meta'));
    }

    public function test(){
        if($this->isAjax()){
            $model = new MainModel();
            //$data = ['answer'=>'ответ с сервера', 'code'=>200];
            //echo json_encode($data);
            $post = R::findOne('posts', "id = {$_POST['id']}");
            $this->loadView('test', compact('post'));
            //debug($post);
            die;
        }else{
            echo "SSSSSSSSS";
        }
    }

    public function about(){
        echo "<h2>About</h2>";
    }

}