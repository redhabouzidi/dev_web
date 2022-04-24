<link rel="stylesheet" href="assets/css/header.css">
<header>
       <?php include "assets/php/trad.php";?>
        <div >
            <a href="index.php"><i class="mdi mdi-snake"></i></a>
        </div>
        <div class="menu">
            <a href="index.php"><span><?= $trad["home"]?></span></a>
            <a href="resources.php"><span><?= $trad["res"]?></span></a>
            <?php if($_SESSION['connected']===false){echo("<a href='connexionSpace.php' ><span>".$trad["con"]."</span></a><a href='subscriptionSpace.php' ><span>".$trad["ins"]."</span></a>");}
            else {echo("<a href='assets/php/disconnect.php' ><span>".$trad["dis"]."</span></a>");} ?>
        </div>
        <i class="mdi mdi-menu"></i>
    </header>
    <div class="mobile-nav">
        <a href="#S1"><?= $trad["home"]?></a>
        <a href="#S2"><?= $trad["res"]?></a>
        <?php if($_SESSION['connected']===false){echo("<a href='connexionSpace.php' >".$trad["con"]."</a><a href='subscriptionSpace.php' >".$trad["ins"]."</a>");}
            else {echo("<a href='assets/php/disconnect.php' >".$trad["dis"]."</a>");} ?>
    </div>
    
    <script src="assets/js/header.js"></script>