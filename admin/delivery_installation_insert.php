<?php
include('../db_connect/dbconnect.php');

$cust_order_id=$_POST['cust_order_id'];
$delivery_description=$_POST['delivery_description'];
$delivery_status=$_POST['delivery_status'];
$dat=$_POST['dat'];

$sql="insert into delivery_installation values(null,'$cust_order_id','$delivery_description','$delivery_status','$dat')";
mysqli_query($conn,$sql);


?>

<script>
alert(" record inserted");
document.location="delivery_installation_view.php";


</script>
