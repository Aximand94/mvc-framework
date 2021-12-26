<?php


namespace app\controller\admin;

use app\model\PostModel;

class MainController extends AppController
{
    public function index(){
        //PostModel::getUserPostsCount(2);
    }

    public function logout(){
        if(isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')){
            unset($_SESSION['user']);
            redirect('/');
        }
    }
}