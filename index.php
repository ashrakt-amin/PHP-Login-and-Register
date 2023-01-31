<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style/home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">


</head>

<body>



    <div class="content">


        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <div class="row">
                <p class="w3-padding w3-display-topleft">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p class="w3-padding w3-display-topright"><a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            </div>
        <?php endif ?>
    </div>

    <div class="w3-row">

        <div class="w3-col s4 w3-center card">
            <img class="card-img" src="images/img13.jpeg" alt="Alps">
            <div class="w3-container w3-center">
                <p>The Italian / Austrian Alps</p>
            </div>
        </div>

        <div class="w3-col s4 w3-center card">
            <img class="card-img" src="images/img13.jpeg" alt="Alps">
            <div class="w3-container w3-center">
                <p>The Italian / Austrian Alps</p>
            </div>
        </div>

        <div class="w3-col s4  w3-center card">
            <img class="card-img" src="images/img13.jpeg" alt="Alps">
            <div class="w3-container w3-center">
                <p>The Italian / Austrian Alps</p>
            </div>
        </div>

    </div>
    </div>
    <?php include('footer.php') ?>