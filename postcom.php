<?php
include "pdo.php";
session_start();
$id=$_POST["id_art"];
$content=$_POST["contenu"];
$username=$_SESSION["username"];
echo(json_encode($username));
if(strlen($content)!=0){
try{
$state=$pdo->prepare("INSERT INTO `commentaire`(`id_art`, `username`, `contenu`) VALUES (:art,:username,:contenu)");
$state->bindValue("art",$id);
$state->bindValue("username",$username);
$state->bindValue("contenu",$content);
$state->execute();

}catch(Exception $e){
    var_dump($e);
}
}