<?php
    session_start();
    if((!isset($_SESSION))||$_SESSION["connected"]==false){
        header("Location:index.php");
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/resources.css">
</head>
<body>
    <?php include "header.php"?>
<div id="container">

</div>
    <script src="assets/js/resources.js"></script>
</body>
</html>