<?php
    session_start();

    //$username = "admin";
    //$pass = "1234";

    //$l_usernmae = $_POST['username'];
    //$l_pass = $_POST['pass'];

    if (isset($_SESSION['username'])) {
            echo "<h2>Hello " . $_SESSION['username'];
            echo "<br><a href='product.php'>Products</a>";
            echo "<br><a href = 'logout.php'><input type='button' value = 'logout' name = 'logout'></a>";
    }
    else {
        echo "<script>alert('Do not access from URL!!')</script>";
        echo "<script>location.href='login.php'</script>";
        
    }  
       
   
?>