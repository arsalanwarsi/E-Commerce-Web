<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warsi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="product-add">
                    <form action="productSaving.php" method="post" enctype="multipart/form-data">
                        <h1 class="cus-heading">Add Product</h1>
                        <input type="text" name="p_name" placeholder="Product Name" required="">
                        <br>
                        <input type="number" step="0.01" name="p_price" placeholder="Product Price" required="">
                        <br>
                        <input type="text" minlength="400" name="p_desc" placeholder="Product Description" required="">
                        <br>
                        <input type="number" name="p_quantity" placeholder="Product Quantity" required="">
                        <br>
                        <label>Status</label>
                        <input type="range" min="0" max="1" value="1" name="p_status" placeholder="Product Status" required="">
                        <br>
                        <input type="file" name="p_pic" required="">
                        <br>
                        <br>
                        <button type="submit">Save Product</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="product-add">
                    <form action="promoSaving.php" method="post" enctype="multipart/form-data">
                        <h1 class="cus-heading">Add Promo</h1>
                        <input type="text" name="p_code" placeholder="Promo Code" required="">
                        <br>
                        <input type="number" step="0.1" min="0" max="10" name="p_value" placeholder="Promo Value" required="">
                        <br>
                        <input type="date" name="p_date" required="">
                        <br>
                        <label>Status</label>
                        <input type="range" min="0" max="1" value="1" name="p_status" placeholder="Promo Status" required="">
                        <br>
                        <br>
                        <button type="submit">Save Promo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr class="page-sep">
    <div class="products-all">
        <h1 class="cus-heading">All Product</h1>

        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Quant</th>
                <th>Status</th>
                <th>Added</th>
                <th>Edit</th>
                <th>Delete</th>

            </thead>
            <tbody>
                <?php
                include('connection.php');
                $sql = "Select * From products ";
                $result = $con->query($sql);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['p_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><img src="<?php echo $row['image']; ?>" alt="" width="100px"></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['created_on']; ?></td>
                        <td>
                            <a href="editProduct.php?p_id=<?php echo $row['p_id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                        <td>
                            <a href="productRemove.php?p_id=<?php echo $row['p_id']; ?>" onclick=" return confirm('Are you sure to delete this product?')"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>