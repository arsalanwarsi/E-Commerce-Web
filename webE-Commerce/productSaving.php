    <?php
    include('connection.php');
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $desc = $_POST['p_desc'];
    $quantity = $_POST['p_quantity'];
    $status = $_POST['p_status'];
    $pic = '';

    if (isset($_FILES['p_pic']) and $_FILES['p_pic']['error'] == 0) {
        $upload_dir = 'products-imgs/';
        $p_name = str_replace(' ', '-', $_FILES['p_pic']['name']);
        move_uploaded_file($_FILES['p_pic']['tmp_name'], $upload_dir . $p_name);
        $pic = $upload_dir . $p_name;
    }

    $sql = "INSERT INTO `products`(`name`, `price`, `description`, `image`, `quantity`, `status`) VALUES ('" . $name . "'," . $price . ",'" . $desc . "','" . $pic . "','" . $quantity . "','" . $status . "')";
    try {
        $con->query($sql);
    ?>
        <script>
            alert("Product Added Successfully.");
            window.location.href = "product.php";
        </script>
    <?php
    } catch (Exception $e) {
    ?>
        <script>
            alert("Product Not Added");
            window.location.href = "product.php";
        </script>
    <?php
    }
    ?>