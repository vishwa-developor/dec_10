<?php
include('connection.php');
$id=$_GET['id'];
$sql="select * from orders_db where order_id= '$id' ";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_assoc($result);
function executeUpdate()
{
        include('connection.php');
        $id=$_GET['id'];

        $pId=$_POST['pId'];
		$pName=$_POST['pName'];
		$pPrice=$_POST['pPrice'];
		$pDamaged=$_POST['pDamaged'];
		$pQuantity=$_POST['pQuantity'];
		$cName=$_POST['cName'];
		$cMail=$_POST['cName'];
		$dlAgAssg=$_POST['dlAgAssg'];
		$dlAgId=$_POST['dlAgId'];
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
				header("location: orders-crud.php");
				$ADMIN_URL="http://localhost/collection2/php%20files/";
				echo("<script>location.href = '".$ADMIN_URL."/orders-crud.php?msg=$msg';</script>");
				
            }
			else if($availableQuantity>=$pQuantity)
            {
                $val2=($availableQuantity-$pQuantity);

				$update_query_in_orders="update orders_db set prdt_id='$pId',prdt_name='$pName',prdt_price='$pPrice',
				prdt_damaged='$pDamaged',prdt_quantity='$pQuantity',cust_name='$cName',cust_mail='$cMail',del_agent_assigned='$dlAgAssg',
				del_agent_id='$dlAgId',del_agent_number='$dlAgNumber',order_destination='$destination',ordered_date='$orderedDate',
				expected_delivery='$expectedDelivery',expiry_date='$expiryDate',status='$status' where order_id='$id'";
				

				if(mysqli_query($con,$update_query_in_orders))
				{
					// echo "<script> alert('')</script>";
					$update_quantity_in_prdt="update products_db set p_quantity ='$val2' where p_id='$pId'";

					if(mysqli_query($con,$update_quantity_in_prdt))
					{
						echo "<script> alert(' Updation Successfull! Still $val2 items left')</script>";
						header("location: orders-crud.php");
					}
                	else
					{
						 echo " <script>update failed in prdts_db </script>"; 
						 header("location: orders-crud.php");
					}
					
					
				}
				else echo "<script> alert('Updation Failed !')</script>";
            } 
		} 
		  
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Order</title>
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
	                <input type="number" name="pId" value="<?=$rows['prdt_id']?>" placeholder="product id">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Name :</label> <br>
	                <input type="text" name="pName" value="<?=$rows['prdt_name']?>" placeholder="product name">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Price :</label> <br>
	                <input type="number" name="pPrice" value="<?=$rows['prdt_price']?>" placeholder="product price">
	            </div>
	            
				<div class="col-md-4 form-row">
	                <label>Product Damaged :</label> <br>
	                <input type="number" name="pDamaged" value="<?=$rows['prdt_damaged']?>" placeholder="product damaged">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Product Quantity :</label> <br>
	                <input type="number" name="pQuantity" value="<?=$rows['prdt_quantity']?>" placeholder="product quantity">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Customer Name :</label> <br>
	                <input type="text" name="cName" value="<?=$rows['cust_name']?>" placeholder="customer name">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Customer Mail :</label> <br>
	                <input type="text" name="cMail" value="<?=$rows['cust_mail']?>" placeholder="customer mail">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Deliver Agent Assigned :</label> <br>
	                <input type="text" name="dlAgAssg" value="<?=$rows['del_agent_assigned']?>" placeholder="Deliver Agent Assigned">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Delivery Agent id:</label> <br>
	                <input type="number" name="dlAgId" value="<?=$rows['del_agent_id']?>" placeholder="Delivery agent id">
	            </div>
	          
	            <div class="col-md-4 form-row">
	                <label>Delivery Agent Number:</label> <br>
	                <input type="number" name="dlAgNumber" value="<?=$rows['del_agent_number']?>" placeholder="Delivery agent number">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Order Desitination :</label> <br>
	                <input type="text" name="destination" value="<?=$rows['order_destination']?>" placeholder="Order Desitination">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Ordered Date:</label> <br>
	                <input type="date" name="inDate" value="<?=$rows['ordered_date']?>" placeholder="date in">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Expected Delivery :</label> <br>
	                <input type="date" name="expDelivery" value="<?=$rows['expected_delivery']?>" placeholder="date out">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Expiry Date :</label> <br>
	                <input type="date" name="expiryDate" value="<?=$rows['expiry_date']?>" placeholder="exp date">
	            </div>
	            <div class="col-md-4 form-row">
	                <label>Status:</label> <br>
	                <input type="text" name="status" value="<?=$rows['status']?>" placeholder="status">
	            </div>
	        </div>
	        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update" name="update">
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