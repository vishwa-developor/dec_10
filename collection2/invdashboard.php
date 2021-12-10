<?php
echo"<script>alert('Log In Successfull') </script>";
echo "<h1> INVENTORY DASHBOARD </h1>";
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css files/invMainDashBoardStyle.css">
    </head>
    <body> 
        <div class="trackOrder">
            <h4> Track The Order </h4>
            <form method="post" action="track-order.php">
            <input type="number" name="orderId" >
            <button class="trackOrderbtn" type="submit" name="track" value="submit">Track</button><br>
            </form>
        </div>
        
        <button class="button checkAvailabilityButton" onclick="location.href='check_product_availability.php'">Search Product</button>
        <button class="button productsCRUD" onclick="location.href='products_crud.php'">Products CRUD</button>
        <button class="button ordersCRUD" onclick="location.href='orders-crud.php'">Orders CRUD</button>
        <button class="button filterProductsButton" onclick="location.href='filter_products.php'">Filter Products</button>
        <button class="button filterProductsButton" onclick="location.href='filter_orders.php'">Filter Orders</button>
    </body>
</html>
