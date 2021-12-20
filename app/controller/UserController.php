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
            if($user->validation($data)){
                echo "OK!";
            }else{
                echo "NO!";
            }
            //debug($user);
            //debug($_POST);
            die;
        }
    }

    public function authorization(){

    }

    public function logout(){

    }
}