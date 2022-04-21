<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/subscriptionSpace.css">
</head>
<body>
    <?php include_once "header.php"?>

    <form action="traitement.php" method="post">
        <div>
        <div class="disform">
            <label for="username">username</label>
            <label for="e-mail" >E-mail</label>
            <label for="password">password</label>
            <label for="cpassword">confirm password</label>
            
        </div>
        <div class="disform">
            <input type="text" name="username" id="username" >
            <input type="text" name="e-mail" id="e-mail" placeholder="Exemple@mail.com" >
            <input type="password" name="password" id="password"placeholder="****************" >
            <input type="password" name="cpassword" id="cpassword" placeholder="****************" >
        </div>
    </div>
    <p id="er"><?php if(isset($_SESSION["message"])){echo($_SESSION["message"]);$_SESSION["message"]="";}?></p>
    <div>
    <input type="submit" name="" id="" value="connexion">
</div>
<p>already have an account ? click <a href="connexionSpace.php">here</a> to connect</p>
</form>
<?php 
include "footer.php";
?>
    <script src="assets/js/inscription.js"></script>
</body>
</html>