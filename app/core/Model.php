<?php


namespace app\core;


use app\core\traits\validation;
use PDO;

abstract class Model
{
    use validation;

    protected $pdo;
    protected $table;
    public array $attributes = [];
    //public $errors = [];

    public function __construct(){
        $this->pdo = DB::instance();
    }

    public function load($data){
        foreach($this->attributes as $key => $value){
            if(isset($data[$key])){
                $this->attributes[$key]=$data[$key];
            }
        }
    }

    // доделать валидацию
    public function validation($data){
        $login = trim($data['login']);
        $password = trim($data['password']);
        $confirmPassword = trim($data['confirmPassword']);
        $email = trim($data['email']);
        $name = trim($data['name']);

        if($login != '' && $password  != '' && $confirmPassword != '' && $email != '' && $name != ''){

            if($this->check_len(3, 50, $login) ||
               $this->check_len(3, 50, $name) ||
               ($this->check_len(8, 20, $password) && $this->check_len( 8, 20, $password))){

                if($password === $confirmPassword){
                    //return $data
                    return true;
                }
            }
        }else{
            return false;
        }
    }

    /*
    public function getErrors(){
        debug($this->errors);
    }
    */


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