<?php 
    require "pdo.php";
    try{
    $pdo->query("DELETE FROM `commentaire` order by id desc limit 1 ");
    }catch(Exception $e){
        var_dump($e);
    }
?>