<?php

  include('../db_connect/dbconnect.php');
  $product_id=$_REQUEST['product_id'];
  
  $sql="delete from product_catalog where product_id='$product_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('Record Deleted..');
document.location="product_catalog_view.php";
</script>