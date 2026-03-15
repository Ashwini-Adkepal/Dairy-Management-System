<?php

  include('../db_connect/dbconnect.php');
  $installation_id=$_REQUEST['installation_id'];
  
  $sql="delete from installation where installation_id='$installation_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="installation_view.php";
</script>