<?php
include 'config.php';
    $id = $_GET['id'];
    echo $id;
    $deleteQuery="DELETE FROM `product` WHERE id='$id'";
    mysqli_query($conn,$deleteQuery);
    header("location:index.php");


?>