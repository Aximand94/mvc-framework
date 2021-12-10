<?php
//в 8 версии php не актуально
//вывод ошибок на экран
ini_set('display_errors', 1);
//отчёты об ошибках
error_reporting(E_ALL);

//функция для дебага
function debug($debugStr){
    echo "<pre>";
    var_dump($debugStr);
    echo "</pre>";
    exit();
}