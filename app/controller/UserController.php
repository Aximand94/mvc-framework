<?php


namespace app\controller;


use app\model\UserModel;

class UserController extends AppController
{
    public string $layout = 'main';

    public function index(){

    }

    public function registration(){
        if(!empty($_POST)){
            $user = new UserModel();
            $data = $_POST;
            $user->load($data);
            debug($data);
            /*
            if(!$user->validation($data)){
                echo "OK!";
                debug($data);
            } else{
                echo "NO!";
            }*/
            die;
        }
    }

    public function authorization(){

    }

    public function logout(){

    }
}