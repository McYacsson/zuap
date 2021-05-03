<?php session_start();?>



<?php 

//print_r($_POST);

?>
<?php

$errorCount = 0;

$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
 $_SESSION['email'] = $email;

if ($errorCount > 0) {

//redirect back and display error
$_SESSION["error"] = "You have " . $errorCount . " error(s) in your form submission";
header("Location: forgot.php");
}else{
    echo "A link has been sent to your email.";

    //count all users to assign id to new user
    $allUsers = scandir("db/users/");
    $countAllUsers = count($allUsers);

    for ($counter = 0; $counter < $countAllUsers  ; $counter++) { 
        $currentUser = $allUsers[$counter];

        if($currentUser == $email . ".json"){
            # send the reset code to the provided email and redirect to the reset password page
        echo "looks good.";

           // $to = "somebody@example.com";
             $subject = "Password Reset Link";
             $message = "A password reset has been initiated from your account. If you did not initiate this reset, please ignore this message, otherwise, visit: localhost/ztep/reset.php";
             $headers = "From: no-reply@ztep.org" . "\r\n" .
             "CC: cheung@ztep.org";

             $try = mail($email,$subject,$message,$headers);
                print_r($try);
                die();

             if ($try) {
                 # display a success mssg
                 $_SESSION["message"] = "Password reset has been sent to : " . $email;
                 header("Location: login.php");
                         }else {
                 # display error
                 $_SESSION["error"] = "Something went wrong, we could not send password reset to : " . $email;
                 header("Location: forgot.php");  
             
         }
         die();
       }
    }
   $_SESSION["error"] = "Email not regisred with us ERR: " . $email;
         header("Location: forgot.php");
     
         
        
    }
        ?>