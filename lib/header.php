<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrolment task</title>
    <Link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <header>

            <div class="header_left">
                <a href="#">Zuri Training</a>
            </div>



            <div class="header_right">
                <!-- <a href="index.php">HOME</a>
                <a href="login.php">LOGIN</a>
                <a href="register.php">REGISTER</a>
                <a href="fogot.php">RESET PASSWORD</a>
                <a href="logout.php">LOGOUT</a> -->

                <a href="index.php">HOME</a> 


    <?php if(!isset($_SESSION['loggedIn'])){ ?>

    <a href="login.php">LOGIN</a> 
    <a href="register.php">REGISTER</a>
    <a href="forgot.php">FORGOT PASSWORD</a>
 

    <?php }else { ?>

        <a href="logout.php">LOGOUT</a> 
        <a href="reset.php">RESET PASSWORD</a>


        <?php } ?>
    


            <div>
    </header>