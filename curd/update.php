<?php
    include 'config.php';

    
    // $productName = $_POST['name'];
    // $productPrice = $_POST['price'];
    // $imgDes = $_POST['image'];
    // $des = $_POST['description'];
    
    // echo $productName."<br>".$productPrice."<br>".$imgDes."<br>".$des."<br>";
    
    
    $id = $_GET['id'];
    // $image = $_GET['image'];
    // echo $id."<br>";
    $fetchQuery = "SELECT `id`, `name`, `price`, `image`, `desccription` FROM `product` WHERE id = '$id'";
    // echo var_dump($fetchQuery)."<br>".$id."<br>";
    $allData = mysqli_query($conn,$fetchQuery);
    // echo $allData."<br>";
    $arrayData = mysqli_fetch_array($allData);
    // echo var_dump($arrayData);
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
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 15px;
        }
    </style>
    <title>Update</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <h3>Update Product</h3>
                    </div>
                    <div class="mb-3">
                        Product name :
                        <input type="text" class="form-control" name="name" value="<?php echo $arrayData['name']?>">
                    </div>
                    <div class="mb-3">
                        Product Price :
                        <input type="text" class="form-control" name="price" value="<?php echo $arrayData['price']?>">
                    </div>
                    <div class="mb-3">
                        Image :
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <!-- <div class="mb-3">
                       <img width='150px' src="<?php echo $arrayData['image']?>" alt=""> 
                    </div> -->
                    <div class="mb-3">
                        Description :
                        <textarea name="desccription"><?php echo $arrayData['desccription']?></textarea>
                    </div>
                    
                    <input type="hidden" name="id" value="<?php echo $arrayData['id']?>">

                    <button type="submit" class="btn btn-primary col-12" name="update">Update</button>
                    
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