<?php

$dsn = 'mysql:host=localhost;dbname=test_framework;charset=utf8';
$name = 'root';
$pass = '';
$options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];


try{
    $pdo = new PDO($dsn, $name, $pass, $options);
}catch(PDOException $exception){
    echo "DB connection failed: ".$exception->getMessage();
}