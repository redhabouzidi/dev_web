<?php  session_start();
    if(!isset($_SESSION["connected"])){$_SESSION["connected"]="false";}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <?php include_once "header.php";
    ?>
    <div class="container">
            <input type="radio" name="ch1" class="radio" id="radio1">
            <input type="radio" name="ch1" class="radio" id="radio2">
            <input type="radio" name="ch1" class="radio" id="radio3">
            <input type="radio" name="ch1" class="radio" id="radio4">
    <section class="scroll">
        
        <div>
            
            <div class="first">
                <div>
                <p><b>Nouvelles mises a jours</b><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quibusdam dolorem voluptatibus nisi quis, tenetur voluptas eaque esse, alias nemo, labore cum iste ab vero commodi omnis doloribus autem fugiat?</p>
                <a href="#section1">download</a>
                </div>
            </div>
            <div >
                <div>
                <p><b>Nouvelles mises a jours</b><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quibusdam dolorem voluptatibus nisi quis, tenetur voluptas eaque esse, alias nemo, labore cum iste ab vero commodi omnis doloribus autem fugiat?</p>
                <a href="#section2">download</a>
                </div>
            </div>
            <div >
                <div>
                <p><b>Nouvelles mises a jours</b><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quibusdam dolorem voluptatibus nisi quis, tenetur voluptas eaque esse, alias nemo, labore cum iste ab vero commodi omnis doloribus autem fugiat?</p>
                <a href="#section3">download</a>
                </div>
            </div>
            <div >
                <div>
                <p><b>Nouvelles mises a jours</b><br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quibusdam dolorem voluptatibus nisi quis, tenetur voluptas eaque esse, alias nemo, labore cum iste ab vero commodi omnis doloribus autem fugiat?</p>
                <a href="#section4">download</a>
                </div>
            </div>
        </div>
        
    </section>
    <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
    </div>
    
    <div class="navigation-manual">
        <label class="manual-btn" for="radio1"></label>
        <label class="manual-btn" for="radio2"></label>
        <label class="manual-btn" for="radio3"></label>
        <label class="manual-btn" for="radio4"></label>
    </div>
</div>
<section class="scroll" id="section1">
    <div class="first">
        <div>
        </div>
    </div>
</section>
<section class="scroll" id="section2">
    <div class="first">
        <div>
        </div>
    </div>
</section>
<section class="scroll" id="section3">
    <div class="first">
        <div>
        </div>
    </div>
</section>
<section class="scroll" id="section4">
    <div class="first">
        <div>
        </div>
    </div>
</section>
<?php 
include "footer.php";
?>
<script src="assets/js/script.js"></script>
</body>
</html>