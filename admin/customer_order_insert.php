<?php

include('../db_connect/dbconnect.php');
$customer_id=$_POST['customer_id'];
$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];
$status=$_POST['status'];
$dat=$_POST['dat'];

$sql="insert into customer_order values(null,'$customer_id','$product_id','$quantity','$rate','$status','$dat')";
mysqli_query($conn,$sql);

?>
<script>
alert('New Record Added');
document.location="customer_order_form.php";
</script>