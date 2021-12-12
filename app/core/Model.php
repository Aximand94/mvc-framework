<?php


namespace app\core;


use PDO;

abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct(){
        $this->pdo = DB::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function selectAll(){
        $sql = "SELECT * FROM $this->table";
        return $this->pdo->query($sql);
    }
}