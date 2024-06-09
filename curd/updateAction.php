<?php
include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desccription = $_POST['desccription'];
    $image = $_FILES['image'];
    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $img_des = "image/".$imageName;
     

    move_uploaded_file($imageLocation,$img_des);
    

    $updateQuery = "UPDATE `product` SET `name`='$name',`price`='$price',`image`='$img_des',`desccription`='$desccription' WHERE id='$id'";
    if(mysqli_query($conn,$updateQuery)){
        //echo "<script>alert('Updated!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
    


?>