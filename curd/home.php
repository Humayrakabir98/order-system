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
    <title>CURD</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h4>Product Insert</h4>
                    </div>
                    <div class="mb-3">
                        Product Name :
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        Product Price :
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        Product Image :
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        Description :
                        <textarea name="desccription">
                        </textarea>

                    </div>

                
                    <button type="submit" class="btn btn-outline-dark">Insert</button>

                </form>
            </div>
        </div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Order</th>
                </tr>
            </thead>
            <tbody>

                <?php

                include 'config.php';
                $allData = mysqli_query($conn, "SELECT * FROM `product`");
                while ($row = mysqli_fetch_array($allData)) {
                    echo $row['image'];
                    echo "
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img width='100px' src='$row[image]' alt=''></td>
                        <td>$row[desccription]</td>
                        <td>$row[createdate]</td>
                        
                        <td><a name='update' class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>
                        <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                        <td><a class='btn btn-success' href='OrderAction.php? id=$row[id]'>Order</a></td>
                        </tr>
                    ";
                }

                ?>


            </tbody>
        </table>
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