<?php
include('connection.php');
if(isset($_POST['filter_by_category']))
{
    $category=$_POST['category'];
    $cat_sql="select * from products_db where p_category='$category'";
    $result=mysqli_query($con,$cat_sql);
}
else if(isset($_POST['filter_by_damaged']))
{
    $damaged=$_POST['damaged'];
    $dam_sql="select * from products_db where p_damaged='$damaged'";
    $result=mysqli_query($con,$dam_sql);
}
else if(isset($_POST['filter_by_perishable']))
{
    $perishable=$_POST['perishable'];
    $perishable_sql="select * from products_db where p_perishable='$perishable'";
    $result=mysqli_query($con,$perishable_sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
		
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
			        <td><?php echo $rows['p_name']; ?></td>
                    <td><?=$rows['p_brand']?></td>
                    <td><?=$rows['p_category']?></td>
			        <td><?php echo $rows['p_quantity']; ?></td>
                    <td><?=$rows['p_supplier']?></td>
			        <td><?php echo $rows['p_damaged']; ?></td>
                    <td><?=$rows['p_perishable']?></td>
			        <td><?php echo $rows['p_date_in']; ?></td>
                    <td><?=$rows['p_price_per_item']?></td>
			        <td><?php echo $rows['p_available']; ?></td>
                    <td><?=$rows['p_expiry_date']?></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			
		</div>
	</div>
</body>
</html>