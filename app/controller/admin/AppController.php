<?php


namespace app\controller\admin;


use app\core\Controller;

class AppController extends Controller
{
    public string $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        /*
        if(isset($is_admin) || $is_admin!=true){
            die('Access Denied!');
        }
        */
    }


}