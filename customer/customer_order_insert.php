<?php
session_start();
include('../db_connect/dbconnect.php');

$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];


$dat=date('Y-m-d');

$uname=$_SESSION['uname'];
$sql2="select * from customer_details where email_id='$uname'";
$res2=mysqli_query($conn,$sql2);
  $row2=mysqli_fetch_array($res2);

$customer_id=$row2['customer_id'];


$sql="insert into customer_order values(null,'$customer_id','$product_id','$quantity','$rate','Pending','$dat')";
mysqli_query($conn,$sql);

?>
<script>
alert('New Record Added');
document.location="product_catlogs.php";
</script>