<?php 
include "connection.php";
$sql = "SELECT * FROM products_db";
$result = mysqli_query($con, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<style>
		.button-create{
			border:20px solid #4394ba;
			border-radius:8px;
			width: 140px;
			height: 30px;
			background-color: #4394ba;
			color: #fff;
		}
		.button-create:hover{
			text-decoration: none;
			background-color: #db2c58;
			border:20px solid #db2c58;
			color: #fff;
		}
		.link-right{
			position: absolute;
			top:50px;
			left:200px;
		}
		.btn{
			width: 80px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<div class="link-right">
				<a href="add_product.php" class="button-create" >Add Product</a>
			</div>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Id</th>
			      <th scope="col">Name</th>
			      <th scope="col">Brand</th>
                  <th scope="col">Category</th>
                  <th scope="col">Quantity</th>
			      <th scope="col">Suppplier</th>
			      <th scope="col">Damaged</th>
			      <th scope="col">Perishable</th>
                  <th scope="col">date In</th>
			      <th scope="col">Price</th>
			      <th scope="col">Available</th>
                  <th scope="col">Exp date</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			        <th scope="row"><?=$i?></th>
			        <td><?=$rows['p_id']?></td>
			        <td><?=$rows['p_name']; ?></td>
                    <td><?=$rows['p_brand']?></td>
                    <td><?=$rows['p_category']?></td>
			        <td><?=$rows['p_quantity']; ?></td>
                    <td><?=$rows['p_supplier']?></td>
			        <td><?=$rows['p_damaged']; ?></td>
                    <td><?=$rows['p_perishable']?></td>
			        <td><?=$rows['p_date_in']; ?></td>
                    <td><?=$rows['p_price_per_item']?></td>
			        <td><?=$rows['p_available']; ?></td>
                    <td><?=$rows['p_expiry_date']?></td>
			        
                    



			      <td><a href="update-products.php?id=<?=$rows['p_id']?>" class="btn btn-success ">Update</a>

			      	  <a href="delete-products.php?id=<?=$rows['p_id']?>"class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
		
		</div>
	</div>
</body>
</html>