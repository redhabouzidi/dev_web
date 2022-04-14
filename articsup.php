<?php
session_start();
require "pdo.php";
$id=$_POST["id_art"];
var_dump($id);
try{
$pdo->query('DELETE FROM `article` WHERE id="'.$id.'"');
}catch(Exception $e){
    var_dump($e);
}

?>