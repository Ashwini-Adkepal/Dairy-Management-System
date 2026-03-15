<?php
include('../db_connect/dbconnect.php');
$farmer_payment_id=$_REQUEST['farmer_payment_id'];
$sql="delete from farmer_payments where farmer_payment_id='$farmer_payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location="farmer_payment_view.php";
</script>
