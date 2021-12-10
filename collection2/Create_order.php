<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Order</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css files/dashboardstyles.css">
</head>
<body>
	<div class="insertOrders">
        <h4> Create the Order </h4>
        <form method="post" action="" class="container">
        	<div class="row">
	        	<div class="col-md-4 form-row">
	                <label>Product Id :</label> <br>
	                <input type="number" name="pId" placeholder="product id">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Name :</label> <br>
	                <input type="text" name="pName" placeholder="product name">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Brand :</label> <br>
	                <input type="text" name="pBrand" placeholder="product brand">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Price :</label> <br>
	                <input type="number" name="pPrice" placeholder="product price">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Category :</label> <br>
	                <input type="text" name="pCategory" placeholder="product category">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Perishable :</label> <br>
	                <input type="text" name="pPerishable" placeholder="product perishable">
				</div>
				<div class="col-md-4 form-row">
	                <label>Product Damaged :</label> <br>
	                <input type="text" name="pDamaged" placeholder="product damaged">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Quantity :</label> <br>
	                <input type="number" name="pQuantity" placeholder="product quantity">
	            </div>
	            <div class="col-md-4 from-row">
	                <label>Customer Name :</label> <br>
	                <input type="text" name="cName" placeholder="customer name">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Customer Mail :</label> <br>
	                <input type="text" name="cMail" placeholder="customer mail">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Deliver Agent Assigned :</label> <br>
	                <input type="text" name="dlAgAssg" placeholder="Deliver Agent Assigned">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Delivery Agent id:</label> <br>
	                <input type="number" name="dlAgId" placeholder="Delivery agent id">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Delivery Agent name:</label> <br>
	                <input type="text" name="dlAgName" placeholder="Delivery agent name">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Delivery Agent Number:</label> <br>
	                <input type="number" name="dlAgNumber" placeholder="Delivery agent number">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Order Desitination :</label> <br>
	                <input type="text" name="destination" placeholder="Order Desitination">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Ordered Date:</label> <br>
	                <input type="date" name="inDate" placeholder="date in">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Expected Delivery :</label> <br>
	                <input type="date" name="expDelivery" placeholder="date out">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Expiry Date :</label> <br>
	                <input type="date" name="expiryDate" placeholder="exp date">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Status:</label> <br>
	                <input type="text" name="status" placeholder="status">
	            </div>
	        </div>
	        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Insert" name="insertOrders">
        </form>
    </div>
</body>
</html>
<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "mydb";  
$con = mysqli_connect($host, $user, $password, $db_name);  

if(mysqli_connect_errno()) {  
	die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

else
{
	if(isset($_POST['insertOrders']))
	{
	
		$pId=$_POST['pId'];
		$pName=$_POST['pName'];
		$pBrand=$_POST['pBrand'];
		$pPrice=$_POST['pPrice'];
		$pCategory=$_POST['pCategory'];
		$pPerishable=$_POST['pPerishable'];
		$pDamaged=$_POST['pDamaged'];
		$pQuantity=$_POST['pQuantity'];
		$cName=$_POST['cName'];
		$cMail=$_POST['cName'];
		$dlAgAssg=$_POST['dlAgAssg'];
		$dlAgId=$_POST['dlAgId'];
		$dlAgName=$_POST['dlAgName'];
		$dlAgNumber=$_POST['dlAgNumber'];
		$destination=$_POST['destination'];
		$orderedDate=$_POST['inDate'];
		$expectedDelivery=$_POST['expDelivery'];
		$expiryDate=$_POST['expiryDate'];
		$status=$_POST['status'];
	
		
        $sql1="select p_quantity from products_db where p_id='$pId'";
        
        if($q=mysqli_query($con,$sql1))
        {
            $t=mysqli_fetch_array($q);
            $availableQuantity=intval($t[0]);
            if($availableQuantity<$pQuantity) 
            {
                $val1=($pQuantity-$availableQuantity);
                echo "<script> alert('Oops!!! Product is unavailable')</script> ";
                echo "<script> alert('There is a Shortage of  $val1 items')</script>";
				header("location:orders-crud.php");
            }
			else if($availableQuantity>=$pQuantity)
            {
                $val2=($availableQuantity-$pQuantity);
				
				$sql2="insert into orders_db(prdt_id,prdt_name,prdt_brand,prdt_price,prdt_category,prdt_perishable,prdt_damaged,prdt_quantity,cust_name,cust_mail,del_agent_assigned,del_agent_id,del_agent_name,del_agent_number,order_destination,ordered_date,expected_delivery,expiry_date,status) 
				values('$pId','$pName','$pBrand','$pPrice','$pCategory','$pPerishable','$pDamaged','$pQuantity','$cName','$cMail','$dlAgAssg','$dlAgId','$dlAgName','$dlAgNumber','$destination','$orderedDate','$expectedDelivery','$expiryDate','$status')";
				
				$update_quantity_in_prdt="update products_db set p_quantity ='$val2' where p_id='$pId'";

				if(mysqli_query($con, $sql2)){
					echo "<script> alert('Order Created Successfully !') </script>"; 
					//header("location:orders-crud.php");
				}
				else 
				{
					echo "<script> alert('Inserting Orders Failed !') </script>";
					//header("location:orders-crud.php");
				}
				if(mysqli_query($con,$update_quantity_in_prdt))
				{
					echo "<script> alert('Still $val2 items left')</script>";
					//header("location:orders-crud.php");
				}
                	
				else 
				{
					echo " update failed in prdts_db";
					//header("location:orders-crud.php");
				}
            } 
		}
		
		
		header("location:orders-crud.php");
		
	}
}
?>