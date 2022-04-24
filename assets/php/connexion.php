<?php
include "pdo.php";
session_start();
$bool=false;
$username = $_POST["username"];
$password = $_POST["password"];
$compte = $pdo->query("SELECT username,password,id,mail FROM `compte` WHERE username='".$_POST['username']."'");
$tuple=$compte->fetch();
    
    if(password_verify($password, $tuple["password"])){
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["id"]=$tuple["id"];
        $_SESSION["connected"]=true;
        $_SESSION["erreur"]=false;
        if(strcmp($tuple["username"],"administrator")==0&&$tuple["id"]==1&&strcmp($tuple["mail"],"admin@myadminpage.com")==0){
            $_SESSION["admin"]=true;
        }else{
            $_SESSION["admin"]=false;
        }
        header("Location: ../../index.php");
    }else{
        $_SESSION["connected"]=false;
        $_SESSION["erreur"]=true;
        header("Location:../../ConnexionSpace.php");
    }   