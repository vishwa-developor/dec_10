<?php 
include 'connection.php';
$sql = "SELECT * FROM products_db";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result) 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">id</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="pid" 
		           value="<?=$row['p_id'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="text" 
		           class="form-control" 
		           id="email" 
		           name="pname" 
		           value="<?=$row['p_name'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['p_id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="elias.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>