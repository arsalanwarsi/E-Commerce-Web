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

		th {
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>