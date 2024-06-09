<?php
include 'config.php';

session_start();

$r_username = $_SESSION['r_username'];

$id = $_GET['id'];

$fetchQuery = "SELECT `id`, `name`, `price`, `image`, `desccription` FROM `product` WHERE id = '$id'";
$allData = mysqli_query($conn,$fetchQuery);

$row = mysqli_fetch_array($allData);


    $insert_query = "INSERT INTO `$r_username`(`orderId`, `name`, `price`, `image`) VALUES ('$row[id]','$row[name]','$row[price]','$row[image]')";
    
    if(mysqli_query($conn,$insert_query)){
        //echo "<script>alert('orderd!!')</script>";
        echo "<script>location.href='order.php'</script>";
    }
?>