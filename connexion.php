<?php
include "pdo.php";
session_start();
$bool=false;
$username = $_POST["username"];
$password = $_POST["password"];
    $compte = $pdo->query("SELECT username,password,id FROM `compte` WHERE username='".$_POST['username']."'");
    $tuple=$compte->fetch();
    
    if(password_verify($password, $tuple["password"])){
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["id"]=$tuple["id"];
        $_SESSION["connected"]=true;
        $_SESSION["erreur"]=false;
        header("Location: index.php");
    }else{
        $_SESSION["connected"]=false;
        $_SESSION["erreur"]=true;
        header("Location: http://localhost/Projet/ConnexionSpace.php");
    }   