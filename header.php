<link rel="stylesheet" href="assets/css/header.css">
<header>
       <?php include "trad.php";?>
        <div >
            logo
        </div>
        <div>
            <a href="/Projet"><span><?= $trad["home"]?></span></a>
            <a href="resources.php"><span><?= $trad["res"]?></span></a>
            <?php if($_SESSION['connected']===false){echo("<a href='connexionSpace.php' ><span>".$trad["con"]."</span></a><a href='subscriptionSpace.php' ><span>".$trad["ins"]."</span></a>");}
            else {echo("<a href='disconnect.php' ><span>".$trad["dis"]."</span></a>");} ?>
        </div>
        
    </header>
    