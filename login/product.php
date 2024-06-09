<?php
session_start();
    if(isset($_SESSION['usernmae'])){
         echo "Display Products!!<br>";
         echo "<br><a href = 'logout.php'><input type='button' value = 'logout' name = 'logout'></a>";
    }
    else{
        echo "<script>alert('Do not access from URL!!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
?>