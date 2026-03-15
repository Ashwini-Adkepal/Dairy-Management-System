<?php
include('../db_connect/dbconnect.php');
$cust_pay_id=$_POST['cust_pay_id'];
$cust_order_id=$_POST['cust_order_id'];
$service_charges=$_POST['service_charges'];
$tax_amount=$_POST['tax_amount'];
$total_amount=$_POST['total_amount'];
$status=$_POST['status'];
$dat=$_POST['dat'];

$sql="update customer_payments set cust_order_id='$cust_order_id',service_charges='$service_charges',tax_amount='$tax_amount',total_amount='$total_amount',status='$status',date='$dat' where cust_pay_id='$cust_pay_id'";
mysqli_query($conn,$sql);

?>


<script>
alert("updated..");
document.location="customer_payment_view.php";


</script>