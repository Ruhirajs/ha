<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$tag_name = $_GET["tag"];

$sql_1 = "SELECT * FROM tags WHERE name = '$tag_name'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$tag = mysqli_fetch_assoc($result_1);
if (!$tag) {
    echo "Sorry! We do not have any content in this tag.";
    return;
}
$tag_id = $tag['id'];


$sql_2 = "SELECT * FROM contents WHERE tag_id = $tag_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}
$contents = mysqli_fetch_all($result_2, MYSQLI_ASSOC);


$sql_3 = "SELECT * 
            FROM interested_users_content iuc
            INNER JOIN contents p ON iuc.content_id = p.id
            WHERE p.tag_id = $tag_id";
$result_3 = mysqli_query($conn, $sql_3);
if (!$result_3) {
    echo "Something went wrong!";
    return;
}
$interested_users_content = mysqli_fetch_all($result_3, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
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
<nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $tag_name; ?>
            </li>
        </ol>
    </nav>
        
 
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
    <div>
    <!-- footer -->
    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
   
    ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type = "text/javascript" src="js/tag.js"></script>
        </div>
    </body>
    
    </html>
