

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




 <html> 

<main>
    <div class="contents">
        <h1>Registratioin Successful<h1>
        <?php 
        //$fname = $_SESSION['fname'];
        // $email = $_SESSION['email'];
        // $pwd = $_SESSION['pwd'];
        echo "<h4>You can now login to your Dashboard<h4>"; 
        ?>

    </div>

    <div class="btns_container">
        <a href="login.php" class="button">Login Now</a>
    </div>
</main>






    
</body>
</html>