<?php
include('connection.php');
$id=$_GET['id'];
function executeDelete()
{
        include('connection.php');
        $id=$_GET['id'];
        try
        {
            echo "befor que";
            $deleteQuery="delete from products_db where p_id= '$id' ";
            echo "after q";
        }
        catch(Exception $e){ echo "inside e";}
        header("location : products_crud.php");
        if(mysqli_query($con,$deleteQuery))
        {
            echo "<script> alert(' Deletion Successfull !')</script>"; 
            
        }
        else echo "<script> alert('Deletion Failed !')</script>";
    }
executeDelete();
?>

