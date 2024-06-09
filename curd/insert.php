<?php
include 'config.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desccription = $_POST['desccription'];

    $image = $_FILES['image'];
    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $img_des = "image/".$imageName;
    

    move_uploaded_file($imageLocation,$img_des);
    
    $insert_query = "INSERT INTO product(name,price,image,desccription) VALUES ('$name','$price','$img_des','$desccription')";
    if(mysqli_query($conn,$insert_query)){
        //echo "<script>alert('Inserted!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>