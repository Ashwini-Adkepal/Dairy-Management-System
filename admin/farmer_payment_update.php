<?php
include('../db_connect/dbconnect.php');
$farmer_payment_id=$_POST["farmer_payment_id"];
$farmer_id=$_POST["ven_id"];
$payment_no=$_POST["pay_no"];
$amount=$_POST["amount"];
$mode_of_payment=$_POST["mode_of_pay"];
$bank_name=$_POST["bank_name"];
$cheque_dd_no=$_POST["cheque_dd_no"];
$given_date=$_POST["given_date"];
$sql="update farmer_payments set farmer_id='$farmer_id',payment_no='$payment_no',amount='$amount',mode_of_payment='$mode_of_payment',bank_name='$bank_name',cheque_dd_no='$cheque_dd_no',given_date='$given_date' where farmer_payment_id='$farmer_payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("orders are updated");
document.location="farmer_payment_view.php"
</script>