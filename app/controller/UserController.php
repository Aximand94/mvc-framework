<?php


namespace app\controller;


use app\core\Model;
use app\model\UserModel;

class UserController extends AppController
{
    public string $layout = 'default';

    public function index(){

    }

    public function registration(){
        if(!empty($_POST)){
            $user = new UserModel();
            $data = $_POST;
            //debug($data);
            $user->load($data);
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            $user->save('users');
        }
    }

    public function login(){
        if(!empty($_POST)){
            $user = new UserModel();
            if($user->userLogin()){
                redirect('/main/index');
            }
        }
    }

    public function logout(){
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/main/index');

    }
}