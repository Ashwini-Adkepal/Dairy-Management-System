<?php

  include('../db_connect/dbconnect.php');
  $cust_pay_id=$_REQUEST['cust_pay_id'];
  
  $sql="delete from customer_payments where cust_pay_id='$cust_pay_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="customer_payment_view.php";
</script>