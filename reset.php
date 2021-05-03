<?php include_once('lib/header.php');

if (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])) {
      # redeirect to dashboard
      header("Location: dashboard.php");

}
?>


<haed>

    <title>Password Reset</title>
</head>
<body>
    
    <p><strong>Reset your password?</strong></p><br/>
    <p>Provide the email associated with your account</p><br/>




<form action="processreset.php" method="post">
<p>
      <?php
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                  echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";

                  session_destroy();
            }
      ?>
</p>


<p>
<label>Enter your Email</label><br />
<input 
    <?php
             if(isset($_SESSION['email'])) {
                   echo "value=" . $_SESSION['email'];
                   }
                  ?>

type="text" readonly value="[email]" name="email" placeholder="Email" /> 
</p>

<p>
<label>Enter New Password</label><br />
<input 
    <?php
             if(isset($_SESSION['email'])) {
                   echo "value=" . $_SESSION['email'];
                   }
                  ?>

type="text" name="password" name="password" placeholder="Password" />
</p>


<p>
<button type="submit" >Send Reset Code</button>
</p>
</form>

<?php
// if(!isset($_POST['submit'])){
//     exit();
// } else{
//     $submithCheck = $_POST['submit'];

//     if($submithCheck == "empty"){
//     echo "<p class='error'>You did not fill in all fields!</p>";
//     exit();
//     }
//     elseif($submithCheck == "char"){
//         echo "<p class='error'>You used invalid character!</p>";
//         exit();
//         }
//     elseif($submithCheck == "email"){
//         echo "<p class='error'>You used an invalid email!</p>";
//         exit();
//         }


// }

?>

</body>
<p>
<?php include_once('lib/footer.php');?>
</p>

