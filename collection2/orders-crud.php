<?php 
include "connection.php";
$sql = "SELECT order_id,prdt_id,prdt_name,prdt_price,prdt_damaged,prdt_quantity,cust_name,cust_mail,
del_agent_assigned,del_agent_id,del_agent_number,order_destination,ordered_date,expected_delivery,expiry_date,status FROM orders_db";
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
				<a href="Create_order.php" class="button-create">Add Order</a>
			</div>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Order Id</th>
			      <th scope="col">Product Id</th>
			      <th scope="col"> Name</th>
                
                  <th scope="col">Price</th>
			      
                  <th scope="col">Damaged</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Mail</th>
                  <th scope="col">Del Agent Assigned</th>
                  <th scope="col">Del Agent Id</th>
                  
                  <th scope="col">Del Agent Number</th>
			      <th scope="col">Destination</th>
                  <th scope="col">Ordered Date</th>
			      <th scope="col">Expected Date</th>
                  <th scope="col">Expiry date</th>
                  <th scope="col">Status</th>
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
			        <td><?=$rows['order_id']?></td>
			        <td><?=$rows['prdt_id']; ?></td>
                    <td><?=$rows['prdt_name']?></td>
                    
                    <td><?=$rows['prdt_price']?></td>
                   
                    <td><?=$rows['prdt_damaged']; ?></td>
			        <td><?=$rows['prdt_quantity']; ?></td>
                    <td><?=$rows['cust_name']; ?></td>
                    <td><?=$rows['cust_mail']; ?></td>
                    <td><?=$rows['del_agent_assigned']; ?></td>
                    <td><?=$rows['del_agent_id']; ?></td>
                    
                    <td><?=$rows['del_agent_number']; ?></td>
                    <td><?=$rows['order_destination']; ?></td>
                    <td><?=$rows['ordered_date']; ?></td>
                    <td><?=$rows['expected_delivery']; ?></td>
                    <td><?=$rows['expiry_date']; ?></td>
                    <td><?=$rows['status']?></td>
	
			      <td><a href="update-orders.php?id=<?=$rows['order_id']?>" class="btn btn-success">Update</a>

			      	  <a href="delete-orders.php?id=<?=$rows['order_id']?>"class="btn btn-danger">Delete</a>
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