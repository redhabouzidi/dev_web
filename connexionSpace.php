<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    
    <link rel="stylesheet" href="assets/css/subscriptionSpace.css">
</head>
<body>
<?php include_once "trad.php";?>
    <?php include_once "header.php";?>

    <form action="connexion.php" method="POST" >
        
        <div>
        <div class="disform">
            <label for="username"><?= $trad["us"]?></label>
            <label for="password"><?= $trad["pw"]?></label>
            
        </div>
        
        <div class="disform">
            <input type="text" name="username" id="username">
            <input type="password" name="password" id="password"placeholder="****************">
        </div>
        
    </div>
    <?php 
        if(isset($_SESSION["erreur"])&& $_SESSION["erreur"]==true){
        echo("<p style='color:red'>".trad["invalide"]."</p>");
        $_SESSION["erreur"]=false;
    }
        ?>
    <div>
    <input type="submit" name="" id="" value="connexion">
</div>
        <p><?=$trad["comsu"]?><a href="subscriptionSpace.php"><?=$trad["comsu2"]?></a><?=$trad["comsu3"]?></p>
        </form>
<?php 
include "footer.php";
?>
</body>
</html>