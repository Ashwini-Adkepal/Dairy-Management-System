<?php
include('../db_connect/dbconnect.php');

$delivery_installation_id=$_POST['delivery_installation_id'];
$cust_order_id=$_POST['cust_order_id'];
$delivery_description=$_POST['delivery_description'];
$delivery_status=$_POST['delivery_status'];
$dat=$_POST['dat'];

$sql="update delivery_installation set cust_order_id='$cust_order_id',delivery_description='$delivery_description',delivery_status='$delivery_status',delivery_date='$dat' where delivery_installation_id='$delivery_installation_id'";
mysqli_query($conn,$sql);


?>

<script>
alert("updated..");
document.location="delivery_installation_view.php";


</script>