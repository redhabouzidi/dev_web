<?php
    session_start();
    if((!isset($_SESSION))||$_SESSION["connected"]==false){
        header("Location:index.php");
    }
    $supress="<a>supprimer</a>"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/resources.css">
</head>
<body>
    <?php
    include "header.php";
    //Necessaire pour recuperer sur le js la variable 
    echo('<input type="hidden" id="session" value='.$_SESSION["id"].'>');
    //partie admin pour insertion d'articles
    
    
    ?>
    
<div id="container">
<?php
if(isset($_SESSION["admin"])&&$_SESSION["admin"]==true){
    echo("<form id='admin' action='articin.php' method='post'>
    <input type='text' name='nom' placeholder='article name'>
    <textarea name='contenu' id='' cols='30' rows='10' placeholder='article content'></textarea>
    <input type='submit' value='add'>
    </form>");
}

    ?>
</div>
    <?php include "footer.php"?>
    <script src="assets/js/resources.js"></script>
</body>
</html>