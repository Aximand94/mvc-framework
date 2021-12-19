<?php


namespace app\lib;


use R;
use app\core\DB;

class Menu{
    public $data;
    public $list;

    public function __construct(){

    }

    public function getCategory(){
        $this->data = R::findAll('category');
    }
}





/*
class Menu
{
    public $data;
    public $tree;
    public $menuhTML;
    public $tpl;
    public $container;
    public $table;
    public $cache;

    public function __construct(){
        $this->run();
    }

    public function run(){
        $this->data = R::getAssoc('SELECT * FROM category');
        $this->tree = $this->getTree();
        debug($this->data);
    }

    public function getTree(){
        $tree = [];
        $data = $this->data;

        foreach($data as $key => &$value){
            if(!$value['parent']){
                $tree['key'] = &$value;
            }else{
                $data[$value['parent']]['child'][$key]=&$value;
            }
        }

        return $tree;
    }

    public function getMenuHTML($tree, $tab = ''){

    }

    public function  catToTemplate($category, $tab, $id){

    }
}
*/