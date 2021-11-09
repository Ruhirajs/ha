<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome </title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
<div class="bod">
    <?php
    include "includes/header.php";
    ?>
    
    
    <div class="banner-container">
        <h2 class="white pb-3">Search or share ideas </h2>
        <div style="margin: 20px 20px;">
           <a href ="list.php"> <button type="button" class="btn btn-secondary" style="border:1px black solid;">Paper</button> </a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Wood</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Glass</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Plastic</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Cans</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Compost</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Jute</button></a>
            <a href ="list.php"><button type="button" class="btn btn-secondary" style="border:1px black solid;">Other</button></a>
        </div>
        <form id="search-form">
            <div class="input-group wname-search tag-container">
                <input type="text" class="form-control input-wname" id='wname' name='wname' placeholder="Search for other materials here" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- <hr size="30" noshade> -->

    
    <div style="height: 400px; margin-top: 30px; margin-bottom: 30px;">
   
     <p id= "p1" style="color: black; margin-bottom: 30px;"> Here we allow you to share your ideas with many other users and see what other creative ways others have to reuse the waste material.<br>Helps you reduce waste production in many creative ways<br>and also create new useful things ;)
    </p>
    <img class="im" src ="img/rrr.jpeg">
    <!-- <hr size="30" noshade> -->
    
    </div>
    <!-- <hr size="30" noshade> -->
    <div >
    <h1 style="color: white;">Here are some ideas</h1>
    <!-- <hr size="30" noshade> -->
     </div>
    <div class="comment-page-container">
   
        <div style=" border: 5px solid black" class="comment-block">
            <div class="comment-image-container">
                <img class="comment-img" src="img/profile.png">
            </div>
            <div class="comment-text">
                
                <p>Photo frames can be created by lumping together sheets of paper into the sides of frame. You can also add in ornamental items made from paper onto the frames.</p>
            </div>
            <div class="interested-container">
                <i class="far fa-heart"></i>
                <div class="interested-text">0 likes</div>
            </div>
            <div class="comment-name">- Ruhi</div>
            
        </div>
        <div style=" border: 5px solid black" class="comment-block">
            <div class="comment-image-container">
                <img class="comment-img" src="img/profile.png">
            </div>
            <div class="comment-text">
                
                <p>Photo frames can be created by lumping together sheets of paper into the sides of frame. You can also add in ornamental items made from paper onto the frames.</p>
            </div>
            <div class="interested-container">
                <i class="far fa-heart"></i>
                <div class="interested-text">0 likes</div>
            </div>
            <div class="comment-name">- Ruhi</div>
            
        </div>
        <!-- <hr size="30" noshade> -->
    </div>
    <!-- footer -->
    
    
<!-- footer -->
</div>


<?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
   
    ?>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type = "text/javascript" src="js/tag.js"></script>
</body>

</html>