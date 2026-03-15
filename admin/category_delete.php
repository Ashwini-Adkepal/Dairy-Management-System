<?php

  include('../db_connect/dbconnect.php');
  $category_id=$_REQUEST['category_id'];
  
  $sql="delete from category where category_id='$category_id'";
  mysqli_query($conn,$sql);

?>
<script>
alert('orders are cancled..');
document.location="category_view.php";
</script>