<?php
require('rb-mysql.php');
$db = require('app/config/db.php');
R::setup($db['dsn'],$db['name'], $db['pass']);
R::freeze(true);
R::fancyDebug( TRUE );
echo "<pre>";
//create
/*
//create table
$tag = R::dispense('tags');
//store rows
$tag->title = 'tag #1';
$tag->description = 'description for tag 2';
$id = R::store($tag);
*/

//select for id
/*
$tag = R::load('tags',3);
echo $tag;
*/

//update
/*
$tag = R::load('tags', 2);
$tag->description = 'UPD';
$id = R::store($tag);
*/

// delete
/*
$tag = R::load('tags',1);
R::trash($tag);
*/

//select all
$tag = R::findAll('tags');
print_r($tag);