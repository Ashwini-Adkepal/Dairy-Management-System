<?php

  include('../db_connect/dbconnect.php');
  $delivery_installation_id =$_REQUEST['delivery_installation_id'];
  
  $sql="delete from delivery_installation where delivery_installation_id ='$delivery_installation_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="delivery_installation_view.php";
</script>
