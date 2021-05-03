

    <!-- <a href="index.php">HOME</a> |


    <?php if(!isset($_SESSION['loggedIn'])){ ?>

    <a href="login.php">LOGIN</a> |
    <a href="register.php">REGISTER</a> |

    <?php }else { ?>

        <a href="logout.php">LOGOUT</a> |

        <?php } ?>
    
    <a href="fogot.php">RESET PASSWORD</a>
   <?php // <a href="logout.php">LOGOUT</a> ?> -->

   <a href="index.php">HOME</a> |


<?php if(!isset($_SESSION['loggedIn'])){ ?>

<a href="login.php">LOGIN</a> |
<a href="register.php">REGISTER</a> |
<a href="fogot.php">FORGOT PASSWORD</a> |


<?php }else { ?>

    <a href="logout.php">LOGOUT</a> |
    <a href="reset.php">RESET PASSWORD</a>


    <?php } ?>

</body>
</html>
           
