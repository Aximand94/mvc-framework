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

    public function selectOne($id, $field='id'){
        $sql = "SELECT * FROM $this->table WHERE $field=$id";
        return $this->pdo->query($sql);
    }

    public function delete($id, $field='id'){
        $sql = "DELETE FROM   $this->table WHERE $field=$id";
        return $this->pdo->execute($sql);
    }

    public function update($id, $field, $row, $value){
        $sql = "UPDATE $this->table SET $row='$value' WHERE $field = $id";
        return $this->pdo->execute($sql);
    }

    // доделать
    public function create($params=[]){
        $query = '';
        foreach($params as $key => $value){
            $query = $key." ";
        }
        $sql = '';
        return $this->pdo->execute($sql);
    }

    public function selectBySQL($sql){
        return $this->pdo->query($sql);
    }

    // доделать
    public function count($cols, $condition = ''){
        $sql = "SELECT COUNT($cols) FROM $this->table";
        if($condition!==''){
            $sql = $sql." WHERE $condition";
        }
        return $this->pdo->query($sql);
    }

    public function like($row, $str){
        $sql = "SELECT * FROM $this->table WHERE $row LIKE '%$str%'";
        return $this->pdo->query($sql);
    }

}