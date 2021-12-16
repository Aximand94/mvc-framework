<?php
include('app/lib/dev.php');
require('app/config/db.php');
require('path.php');
require('app/config/config.php');

use app\controller\PostsController;
use app\core\Router;
use app\core\View;
use app\core\App;

date_default_timezone_set('Europe/Moscow');
//debug(CACHE);
spl_autoload_register(function($class){
    $file =ROOT.str_replace('\\','/',$class).".php";
    if(file_exists($file)){
        require_once $file;
    }
});

$query = $_SERVER['QUERY_STRING'];

//Router::add('^page/(?P<action>[a-z-]+)/(?P<query>[a-z-]+)$', ['controller'=>'Page']);
//Router::add('^page/(?P<alias>[a-z-]+)$', ['controller'=>'Page','action'=>'view']);

new App;
//defaults route
Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
Router::dispatch($query);

/*
if(Router::match($query)){
    debug(Router::getRoute());
}else{
    echo "404";
}
*/