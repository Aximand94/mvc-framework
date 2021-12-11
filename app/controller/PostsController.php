<?php


namespace app\controller;

use app\model\Controller;

class PostsController extends Controller
{

    public function index(){
        echo "<h2>Post index page.</h2>";
    }

    public function add(){
        echo "<h2>Post add page.</h2>";
    }
}