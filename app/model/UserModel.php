<?php


namespace app\model;


use app\core\Model;

class UserModel extends Model
{
    public array $attributes = [
        'login'=>'',
        'password'=>'',
        'confirmPassword'=>'',
        'email'=>'',
        'name'=>'',
        'role'=>'user'
    ];

}