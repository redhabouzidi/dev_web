<?php
    session_start();
    $_SESSION["lang"]="fr";
    header("Location:".$_SERVER['HTTP_REFERER']);
?>