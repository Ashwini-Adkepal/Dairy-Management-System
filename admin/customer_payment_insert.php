<?php
include('../db_connect/dbconnect.php');
$cust_order_id=$_POST['cust_order_id'];
$service_charges=$_POST['service_charges'];
$tax_amount=$_POST['tax_amount'];
$total_amount=$_POST['total_amount'];
$status=$_POST['status'];
$dat=$_POST['dat'];

$sql="insert into customer_payments values(null,'$cust_order_id','$service_charges','$tax_amount','$total_amount','$status','$dat')";
mysqli_query($conn,$sql);

?>


<script>
alert("new record inserted");
document.location="customer_payment_form.php";


</script>