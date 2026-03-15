<?php
include('../db_connect/dbconnect.php');
$farmer_id=$_POST["ven_id"];
$payment_no=$_POST["pay_no"];
$amount=$_POST["amount"];
$mode_of_payment=$_POST["mode_of_pay"];
$bank_name=$_POST["bank_name"];
$cheque_dd_no=$_POST["cheque_dd_no"];
$given_date=$_POST["given_date"];
$sql="insert into farmer_payments values(null,'$farmer_id','$payment_no','$amount','$mode_of_payment','$bank_name','$cheque_dd_no','$given_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="farmer_payment_view.php"
</script>