<?php
require('app/lib/dev.php');
require('app/core/Router.php');
use app\core\Router;

//функция автозагрузки классов
spl_autoload_register(function($class){
    $classPath = str_replace('\\','/',$class.'.php');
    if(file_exists($classPath)) {
        include $classPath;
    }
});

$router = new Router();
$router->itsWork();
echo "done!";