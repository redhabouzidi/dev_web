<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/subscriptionSpace.css">
</head>
<body>
    <?php include_once "header.php";?>

    <form action="connexion.php" method="POST" >
        
        <div>
        <div class="disform">
            <label for="username">username</label>
            <label for="password">password</label>
            
        </div>
        
        <div class="disform">
            <input type="text" name="username" id="username">
            <input type="password" name="password" id="password"placeholder="****************">
        </div>
        
    </div>
    <?php 
        if(isset($_SESSION["erreur"])&& $_SESSION["erreur"]==true){
        echo("<p style='color:red'>Mot de passe ou nom d'utilisateur invalide</p>");
        $_SESSION["erreur"]=false;
    }
        ?>
    <div>
    <input type="submit" name="" id="" value="connexion">
</div>
        <p>don't have an account yet ? click <a href="subscriptionSpace.php">here</a> to subscribe</p>
        </form>
<?php 
include "footer.php";
?>
</body>
</html>