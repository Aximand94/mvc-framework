<?php


namespace app\controller;


use app\core\Pagination;
use R;

class PostsController extends AppController
{
    public string $layout = 'blog';

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

    }

    public function show(){

    }

    public function update(){

    }

    public function delete(){

    }
}