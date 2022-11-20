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
	<style type="text/css">
		td {
		border: 1px solid #000;
		padding: 5px;
		text-align: center;
		}
		th{
			text-align: center;
		}
	</style>
</head>

<body>
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

	</thead>
	<tbody>
    <?php
        include('connection.php');
        // print_r($_POST);
        $p_id = $_GET["p_id"];
        $sql = "SELECT * FROM `products` WHERE p_id = ".$p_id;
        $result = $con->query($sql);
        $data = mysqli_fetch_array($result);

        // print_r($data);
    ?>
	    <tr>
				<td><?php echo $data['p_id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['price']; ?></td>
				<td><?php echo $data['description']; ?></td>
				<td><img src="<?php echo $data['image']; ?>" alt="" width="100px"></td>
				<td><?php echo $data['quantity']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td><?php echo $data['created_on']; ?></td>
				
			</tr>
	</tbody>
</table>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>