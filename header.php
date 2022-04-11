<link rel="stylesheet" href="assets/css/header.css">
<header>
       
        <div >
            logo
        </div>
        <div>
            <a href="/Projet"><span>accueil</span></a>
            <a href="resources.php"><span>ressources</span></a>
           <a href=""><span>offres</span></a>
            <a href=""><span>download</span></a>
            <?php if($_SESSION['connected']===false){echo("<a href='connexionSpace.php' ><span>Connexion</span></a><a href='subscriptionSpace.php' ><span>Inscription</span></a>");}
            else {echo("<a href='disconnect.php' ><span>Logout</span></a>");} ?>
        </div>
    </header>