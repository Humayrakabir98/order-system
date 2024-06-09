<?php
session_start();
if(isset($_SESSION['usernmae'])){
    session_destroy();
    echo "<br><a href = 'login.php'><input type='button' value = 'logout' name = 'logout'></a>";
}
else{
   echo "<script>alert('Do not access from URL!!')</script>";
   echo "<script>location.href='login.php'</script>"; 
}
?>