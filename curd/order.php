<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordered Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>OrderId</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';
            session_start();

            $r_username = $_SESSION['r_username'];
            $allData = mysqli_query($conn, "SELECT * FROM `$r_username`");
                while ($row = mysqli_fetch_array($allData)) {
                    
                    echo "
                        <tr>
                        <td>$row[orderId]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img width='100px' src='$row[image]' alt=''></td>
                        
                        
                        </tr>
                    ";
            }

            ?>
        </tbody>
    </table>
</body>

</html>