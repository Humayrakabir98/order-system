<?php
include 'config.php';
session_start();
    
$r_username = $_POST['r_username'];
$r_pass = $_POST['r_pass'];

$result = mysqli_query($conn,"SELECT * FROM `register` WHERE r_username='$r_username' And r_pass='$r_pass'");

if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['r_username'] = $r_username;
    $_SESSION['r_pass'] = $r_pass;
    echo "<script>location.href='../curd/index.php'</script>";
}
else{
    echo "<script>alert('UserName and pass is not matching!!')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>
