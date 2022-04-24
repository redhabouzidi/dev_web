<?php 
    if(isset($_SESSION["lang"])&& $_SESSION["lang"]==="fr"){
    $trad = [
    "home" => "Accueil",
    "res" => "Ressources",
    "con" => "Connexion",
    "ins" => "Inscription",
    "dis" => "Deconnexion",
    "report" => "signaler un bug",
    "invalide" => "Mot de passe ou nom d'utilisateur invalide",
    "comsu" => "Vous n'avez pas encore de compte ? cliquez ",
    "comsu2" => "ici",
    "comsu3" => "pour vous inscrire",
    "us" => "nom d'utilisateur",
    "pw" => "mot de passe",
    "cpw" => "confirmez le mot de passe",
    "uusr" => "nom d'utilisateur déjà utilisé.",
    "uem" => "e-mail déjà utilisé pour un autre compte",
    "idata" => "le mot de passe contient des données invalides"
    
];
}else{
    $trad = [
    "home" => "Home",
    "res" => "Ressources",
    "con" => "Login",
    "ins" => "Sign in",
    "dis" => "Logout",
    "report" => "report a bug",
    "invalide" => "Password or username invalid",
    "comsu" => "don't have an account yet ? click ",
    "comsu2" => "here",
    "comsu3" => "to subscribe",
    "us" => "username",
    "pw" => "password",
    "cpw" => "confirm password",
    "uusr" => "username already used.",
    "uem" => "e-mail already used for another account",
    "idata" => "password contains invalid data"

];
}

?>