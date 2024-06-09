<?php
    include 'config.php'; 
    
    $r_username = $_POST['r_username'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
    $r_email = $_POST['r_email'];
    $r_mobile = $_POST['r_mobile'];

    $username_pattern = "/^[a-zA-Z ]+$/";
    $mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $email_pattern = "/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
    $pass_pattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*?><+_-])).{8,20}/";

    $duplicate_username = mysqli_query($conn,"SELECT * FROM `register` WHERE username='$l_username'");

    if(mysqli_num_rows($duplicate_username)>0){
        echo "<script>alert('UserName already taken!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($username_pattern,$r_username)){
        echo "<script>alert('Invalid Username!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($pass_pattern,$r_pass)){
        echo "<script>alert('Invalid Password!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if($r_pass != $r_con_pass){
        echo "<script>alert('Password and confirm password is not matching!!')</script";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($email_pattern,$r_email)){
        echo "<script>alert('Invalid Email!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else if(!preg_match($mobile_pattern,$r_mobile)){
        echo "<script>alert('Invalid Mobile number!!')</script>";
        echo "<script>location.href='register.php'</script>";
    }
    else{
        $insertQuery = "INSERT INTO `register`(`username`, `pass`, `email`, `mobile`) VALUES ('$r_username','$r_pass','$r_email','$r_mobile')";
        if(!mysqli_query($conn,$insertQuery)){
            echo "<script>alert('Registration not Completed..')</script>";
        }
        else{
            echo "<script>alert('Registration Completed..')</script>";
            echo "<script>location.href='login.php'</script>";

        }

    }

?>