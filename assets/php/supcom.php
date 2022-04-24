<?php 
    require "pdo.php";
    try{
    $pdo->query("DELETE FROM `commentaire` WHERE id=".$_POST["id_com"]);
    }catch(Exception $e){
        var_dump($e);
    }
?>