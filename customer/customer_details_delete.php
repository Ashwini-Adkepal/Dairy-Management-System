<?php

  include('../db_connect/dbconnect.php');
  $customer_id=$_REQUEST['customer_id'];
  
  $sql="delete from customer_details where customer_id='$customer_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="customer_details_view.php";
</script>