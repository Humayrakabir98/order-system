<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "web_g";

    $conn = mysqli_connect($serverName,$userName,$password,$dbname);
    if(!$conn){
        die("Connection Failed : " . mysqli_connect_error());    
    }
    

?>