<?php
include('../db_connect/dbconnect.php');

$cust_order_id=$_REQUEST['cust_order_id'];


 $sql="update customer_order set order_status='Dispatched' where  cust_order_id='$cust_order_id'";
mysqli_query($conn,$sql);


?>

<script>
alert("Dispatched...");
document.location="customer_order_view.php";
</script>