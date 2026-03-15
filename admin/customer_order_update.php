<?php

include('../db_connect/dbconnect.php');
$cust_order_id=$_POST['cust_order_id'];
$customer_id=$_POST['customer_id'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];
$status=$_POST['status'];
$dat=$_POST['dat'];

$sql="update customer_order set customer_id='$customer_id',	product_id='$product_id',quantity='$quantity',rate='$rate',order_status='$status',order_date='$dat' where cust_order_id='$cust_order_id'";
mysqli_query($conn,$sql);

?>
<script>
alert('updated...');
document.location="customer_order_view.php";
</script>