<?php
session_start();
include "trad.php";
include 'pdo.php';

$username = htmlspecialchars($_POST['username']);
$password = password_hash(
    htmlspecialchars($_POST['password']),
    PASSWORD_BCRYPT,
);
$mail = $_POST['e-mail'];
$exitm=$pdo->query("SELECT * FROM `compte` WHERE mail='".$mail."'")->fetchAll();
$exitu=$pdo->query("SELECT * FROM `compte` WHERE username='".$username."'")->fetchAll();

if(preg_match('/^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/',$username)&&preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$mail)&&strlen($_POST["password"])>=8&&strlen($_POST["password"])>=8&&$exitm==null&&$exitu==null){
try {
    $statement = $pdo->prepare("INSERT INTO `compte`( `username`,  `password`,`mail`) VALUES (:username, :password, :mail)");
    $statement->bindValue('username', $username);
    $statement->bindValue('password', $password);
    $statement->bindValue('mail', $mail);
    $statement->execute();

    header('Location: ../../index.php');
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}
}else{
    header('Location: ../../subscriptionSpace.php');
    if($exitu!=null){
    $_SESSION["message"]=$trad["uusr"];
    }else if($exitm!=null){
    $_SESSION["message"]=$trad["uem"] ;  
    }else{
        $_SESSION["message"]=$trad["idata"];  
    }
}
