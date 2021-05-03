<?php session_start();
session_unset();
session_destroy();

//if(isset($_SESSION['loggedIn'])){ 
 # redeirect to dashboard
 header("Location: login.php");
 
//}


?>

