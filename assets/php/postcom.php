<?php
include "pdo.php";
session_start();
$id=$_POST["id_art"];
$content=htmlspecialchars($_POST["contenu"]);
$username=htmlspecialchars($_SESSION["username"]);
echo(json_encode($username));
if(strlen($content)!=0){
try{
$state=$pdo->prepare("INSERT INTO `commentaire`(`id_art`,`id_per` , `username`, `contenu`) VALUES (:art,:per,:username,:contenu)");
$state->bindValue("art",$id);
$state->bindValue("username",$username);
$state->bindValue("contenu",$content);
$state->bindValue("per",$_SESSION["id"]);
$state->execute();

}catch(Exception $e){
    var_dump($e);
}
}