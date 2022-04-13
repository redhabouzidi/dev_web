<?php 
session_start();
$_SESSION["connected"]=false;
$_SESSION["username"]=null;
$_SESSION["id"]=null;
$_SESSION["error"]=false;
header("Location:index.php");
?>