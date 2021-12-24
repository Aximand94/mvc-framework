<?php


namespace app\controller\admin;

class MainController extends AppController
{
    public function index(){

    }

    public function logout(){
        if(isset($_SESSION['user']) && ($_SESSION['user']['role'] == 'admin')){
            unset($_SESSION['user']);
            redirect('/');
        }
    }
}