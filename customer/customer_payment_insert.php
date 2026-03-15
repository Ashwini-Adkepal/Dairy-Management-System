<?php
include('../db_connect/dbconnect.php');
$cid=$_POST['cid'];

$total_amount=$_POST['total_amount'];
$dat=$_POST['dat'];

$sql="insert into customer_payments values(null,'$cid','$total_amount','PAID','$dat','".$_POST['razorpay_payment_id']."')";
mysqli_query($conn,$sql);

$sql1="update customer_order set  order_status='Processing' where customer_id='$cid' and  order_status='Pending' ";
mysqli_query($conn,$sql1);

?>


<script>
alert("Payment Done Successfully...");
document.location="customer_order_view.php";


</script>