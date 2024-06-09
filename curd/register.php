<?php
include 'config.php';


if (isset($_POST['register'])) {

    $name= $_POST['r_username'];
    $password= $_POST['r_pass'];
    $confirm_password = $_POST['r_con_pass'];
    $email = $_POST['r_email'];
    $mobile = $_POST['r_mobile'];



    // Validation using regex
    $name_regex = "/^[a-zA-Z ]+$/";
    $email_regex = "/^\S+@\S+\.\S+$/";
    $password_regex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/";

    if (!preg_match($name_regex, $name)) {
        echo "<script>alert('Invalid name. Only alphabets and spaces are allowed.')</script>";

    } elseif (!preg_match($email_regex, $email)) {
        echo "<script>alert('Invalid email address.')</script>";

    }elseif(!preg_match($password_regex,$password)){
        echo "<script>alert('Invalid password.')</script>";

    }
      elseif ($password != $confirm_password) {
        echo "<script>alert('Passwords do not match.')</script>";
    } else {

        // Connect to the db
 


        $select_sql = "SELECT * FROM `register` WHERE r_email='$email'";

        $result = mysqli_query($conn, $select_sql);


        if(mysqli_num_rows($result) > 0){

            echo "<script>alert('User Already Exist!')</script>";
      
         }else{
            $sql = "INSERT INTO register(r_username,r_pass,r_email,r_mobile) VALUES('$name','$password','$email','$mobile')"; 
            $create_tabel = "CREATE TABLE `$name` (
                orderId int,
                name varchar(255),
                price varchar(255),
                image varchar(255)
            )";

               mysqli_query($conn, $sql);
               mysqli_query($conn, $create_tabel);
               header('location:index.php');
            }
         }


        mysqli_close($conn);
    
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background: #ddd;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 15px;
        }
    </style>  
    <title>Register</title> 
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="" method="post">
                <div class="mb-3">
                        <h3>Register</h3>
                    </div>
                    <div class="mb-3">
                        Username :
                        <input type="text" class="form-control" name="r_username" >
                    </div>
                    <div class="mb-3">
                        Password :
                        <input type="password" class="form-control" name="r_pass">
                    </div>
                    <div class="mb-3">
                        Confirm Password :
                        <input type="password" class="form-control" name="r_con_pass">
                    </div>
                    <div class="mb-3">
                        Email :
                        <input type="text" class="form-control" name="r_email">
                    </div>
                    <div class="mb-3">
                        Phone :
                        <input type="text" class="form-control" name="r_mobile">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" name="register">Register</button>
                    Already Registered? <a href="login.php">Login Here</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>