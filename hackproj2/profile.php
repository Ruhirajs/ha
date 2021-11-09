<?php
session_start();
require "includes/database_connect.php";

if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    die();
}
$user_id = $_SESSION['user_id'];

$sql_1 = "SELECT * FROM users WHERE id = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}

$sql_2 = "SELECT * 
            FROM interested_users_properties iup
            INNER JOIN properties p ON iup.property_id = p.id
            WHERE iup.user_id = $user_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}
$interested_properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);
?>!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/user.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Profile
            </li>
        </ol>
    </nav>

            
   
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="img/profile.png"><span
                        class="font-weight-bold">Shipra</span>
                        <span class="text-black-50">Shipra@mail.com</span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                                placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                class="form-control" value="" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                class="form-control" placeholder="enter address line 1" value=""></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                class="form-control" placeholder="enter email id" value=""></div>
                    </div>

                </div>
            </div>

            

            <div class="col-md-4">
                <div class="mt-5 text-center" ><button class="btn btn-light" type="button" style="color: rgb(0, 0, 0);">Edit Profile</button></div>
            </div>
        </div>
<hr>
        <!-- Content -->

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Your Post</h6>
        <div class="d-flex text-muted pt-3">
          <title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect>
          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
            <div class="d-flex justify-content-between">
              <strong class="text-gray-dark" style="color:rgb(0, 125, 156);">Waste Category</strong>
              <a href="#">Delete</a>
            </div>
            <span class="d-block">Photo frames can be created by lumping together sheets of paper into the sides of frame. You can also add in ornamental items made from paper onto the frames.</span>
          </div>
        </div>
        <div class="d-flex text-muted pt-3">
            <title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect>
            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
              <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="color:rgb(0, 125, 156);">Waste Category</strong>
                <a href="#">Delete</a>
              </div>
              <span class="d-block">Photo frames can be created by lumping together sheets of paper into the sides of frame. You can also add in ornamental items made from paper onto the frames.</span>
            </div>
          </div>
          <div class="d-flex text-muted pt-3">
            <title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect>
            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
              <div class="d-flex justify-content-between">
                <strong class="text-gray-dark" style="color:rgb(0, 125, 156);">Waste Category</strong>
                <a href="#">Delete</a>
              </div>
              <span class="d-block">Photo frames can be created by lumping together sheets of paper into the sides of frame. You can also add in ornamental items made from paper onto the frames.</span>
            </div>
          </div>
        <small class="d-block text-end mt-3">
          <a href="#" style="color: green;">All Post</a>
        </small>
      </div>

    <!-- content -->
    <div class="mt-5 text-center" ><button class="btn btn-primary profile-button" type="button" style="color: white; margin-bottom: 30px;">Save Profile</button></div>
    </div>
    


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type = "text/javascript" src="js/tag.js"></script>
</div>
</body>

</html>