<?php 
    if(isset($_SESSION["lang"])&& $_SESSION["lang"]==="fr"){
    $trad = [
    "home" => "Accueil",
    "res" => "Ressources",
    "con" => "Connexion",
    "ins" => "Inscription",
    "dis" => "Deconnexion"
];
}else{
    $trad = [
    "home" => "Home",
    "res" => "Ressources",
    "con" => "Login",
    "ins" => "Sign in",
    "dis" => "Logout"

];
}

?>