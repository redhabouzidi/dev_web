<?php 
session_start();
$_SESSION["connected"]=false;
$_SESSION["username"]=null;
$_SESSION["id"]=null;
header("Location:index.php");
?>