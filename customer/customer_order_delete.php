<?php

  include('../db_connect/dbconnect.php');
  $cust_order_id=$_REQUEST['cust_order_id'];
  
  $sql="delete from customer_order where cust_order_id='$cust_order_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="customer_order_view.php";
</script>