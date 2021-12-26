<?php


namespace app\controller;


use app\model\PostModel;
use R;

class PostController extends AppController
{
    public string $layout = 'default';

    /*
    public function index(){

        $page = isset($_GET['page']) ? (int)$_GET['page']: 1;
        $total = R::count('posts');
        $limit = 3;
        $pageno = new Pagination($page, $limit, $total);
        $start = $pageno->pagStart();

        $posts = R::findAll('posts', "LIMIT $start, $limit");
        //$posts = R::findAll('posts');
        ///////////////////////

        $this->setMeta('MainPage','описание страницы','ключевые слова');
        //$this->setMeta($post->title,$post->content);
        $menu = $this->navMenu;
        $meta = $this->meta;
        $this->setVars(compact('posts', 'menu', 'meta', 'pageno', 'start'));

    }

    public function store(){
        debug($_POST);
    }

    */




}