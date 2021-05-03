<?php
//session_start();
include_once('lib/header.php'); 

if(!isset($_SESSION['loggedIn'])){ 
    # redeirect to dashboard
    header("Location: login.php");
    
   }
?>

<main>
    <div class="contents">
        <h1>Welcome to The Zuri Training Dashboard<h1>
        <h4>The platform where you will get trained for free while you kickstart and put your carrier in the ritht direction.<h4>
        <h4>You will also get free metorship from the big guns in the tech game!<h4>
    
    
    <!-- loggedIn User ID: <?php //echo $_SESSION['loggedIn'] ?> -->
    Welcome, <?php echo $_SESSION['fullname'] ?>, to The Zuri Training Dashboard, You are logged in as <?php echo $_SESSION['track'] ?> intern, and your ID is <?php echo $_SESSION['loggedIn'] ?>.


   
</main>

<?php

include_once('lib/footer.php')
?>

    





