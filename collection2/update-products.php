<?php
include('connection.php');
$id=$_GET['id'];
$sql="select * from products_db where p_id= '$id' ";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result);
function executeUpdate()
{
        include('connection.php');
        $id=$_GET['id'];
        $pName=$_POST['pName'];
		$pBrand=$_POST['pBrand'];
		$pCategory=$_POST['pCategory'];
        $pQuantity=$_POST['pQuantity'];
        $pSupplier=$_POST['pSupplier'];
		$pDamaged=$_POST['pDamaged'];
        $pPerishable=$_POST['pPerishable'];
        $pDateIn=$_POST['pDateIn'];
        $pPrice=$_POST['pPrice'];
		$pAvailable=$_POST['pAvailable'];
		$pExpiryDate=$_POST['pExpiryDate'];

        $updateQuery="update products_db set p_name='$pName',p_brand='$pBrand',p_category='$pCategory',
        p_quantity='$pQuantity',p_supplier='$pSupplier',p_damaged='$pDamaged',p_perishable='$pPerishable',
        p_date_in='$pDateIn',p_price_per_item='$pPrice',p_available='$pAvailable',p_expiry_date='$pExpiryDate' 
        where p_id='$id'";
		
        if(mysqli_query($con,$updateQuery))
        {
            echo "<script> alert(' Updation Successfull !')</script>"; 
            header("location: products_crud.php");
        }
        else echo "<script> alert('Updation Failed !')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css files/dashboardstyles.css">
</head>
<body>
	<div class="insertOrders">
        <h4> Add Product </h4>
        <form method="post" action="" class="container">
        	<div class="row">

	        

	            <div class="col-md-4 form-row">
	                <label>Product Name :</label> <br>
	                <input type="text" name="pName" value="<?=$rows['p_name']?>">
	            </div>

	            <div class="col-md-4 form-row">
	                <label>Product Brand :</label> <br>
	                <input type="text" name="pBrand" value='<?=$rows['p_brand']?>'placeholder="product brand">
	            </div>
	            
	            <div class="col-md-4 form-row">
	                <label>Product Category :</label> <br>
	                <input type="text" name="pCategory" value="<?=$rows['p_category']?>" placeholder="product category">
	            </div>

                <div class="col-md-4 form-row">
	                <label>Product Quantity :</label> <br>
	                <input type="number" name="pQuantity" value="<?=$rows['p_quantity']?>" placeholder="product quantity">
	            </div>

                <div class="col-md-4 form-row">
	                <label>Product Supplier :</label> <br>
	                <input type="text" name="pSupplier" value="<?=$rows['p_supplier']?>" placeholder="product supplier">
	            </div>



                <div class="col-md-4 form-row">
	                <label>Product Damaged :</label> <br>
	                <input type="text" name="pDamaged" value="<?=$rows['p_damaged']?>" placeholder="product damaged">
	            </div>

	            <div class="col-md-4 form-row">
	                <label>Product Perishable :</label> <br>
	                <input type="text" name="pPerishable" value="<?=$rows['p_perishable']?>" placeholder="product perishable">
				</div>
				
	            
	            <div class="col-md-4 form-row">
	                <label>Product Arrived Date :</label> <br>
	                <input type="date" name="pDateIn" value="<?=$rows['p_date_in']?>" placeholder="arrival date">
	            </div>

                <div class="col-md-4 form-row">
	                <label>Product Price :</label> <br>
	                <input type="number" name="pPrice" value="<?=$rows['p_price_per_item']?>" placeholder="product price">
	            </div>

                <div class="col-md-4 form-row">
	                <label>Product Availability :</label> <br>
	                <input type="text" name="pAvailable" value="<?=$rows['p_available']?>" placeholder="product available">
	            </div>

				<div class="col-md-4 form-row">
	                <label>Product Expiry date :</label> <br>
	                <input type="date" name="pExpiryDate" value="<?=$rows['p_expiry_date']?>" placeholder="product expiry date">
	            </div>
	           
	        </div>
	        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Insert" name="update">
        </form>
    </div>
</body>
</html>
<?php

	if(isset($_POST['update']))
	{
        executeUpdate();
	}

?>