<?php 
session_start();

//print_r($_POST);

?>
<?php

$errorCount = 0;

$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;

 $_SESSION['email'] = $email;

if ($errorCount > 0) {

//redirect back and display error
$_SESSION["error"] = "You have " . $errorCount . " error(s) in your form submission";
header("Location: login.php");
}else{

    //count all users to assign id to new user
    $allUsers = scandir("db/users/");
    // print_r($allUsers);
    // die();

    $countAllUsers = count($allUsers);

    for ($counter = 0; $counter < $countAllUsers  ; $counter++) { 
        $currentUser = $allUsers[$counter];
    
        if($currentUser == $email . ".json"){
//check user password
        $userString = file_get_contents("db/users/".$currentUser);
        $userObject = json_decode($userString);

        $passwordfromDB = $userObject->password;

        $passwordfromUser = password_verify($password, $passwordfromDB);

        if($passwordfromDB == $passwordfromUser) {
            # redirect to dashboard
            $_SESSION['loggedIn'] = $userObject->id;
            $_SESSION['fullname'] = $userObject->fname . " " . $userObject->lname;

            $_SESSION['fnanme'] = $userObject->fname;
            $_SESSION['lname'] = $userObject->fname;
            $_SESSION['email'] = $userObject->email;
            $_SESSION['password'] = $userObject->password;
            $_SESSION['gender'] = $userObject->gender;
            $_SESSION['track'] = $userObject->track;
            $_SESSION['course'] = $userObject->course;
            $_SESSION['team'] = $userObject->team;


            /*echo "Welcome to Dashboard!" . "<br />";
            echo $passwordfromDB . "<br />";
            echo $passwordfromUser . "<br />";
            */
            header("Location: dashboard.php");
            die();
        
        }
        //print_r($userObject->fname); 
            //echo $userObject; 
        //die();
        }
    }

           $_SESSION["error"] = "Invalid Email or Password";
            header("Location: login.php");
         //echo "logged in successfully";
             die(); 
           
        
}  

//count all users to assign id to new user
//$allUsers = scandir("db/users");
// print_r($allUsers);
// die();}
?>