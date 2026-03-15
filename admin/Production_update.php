  <?php
include('../db_connect/dbconnect.php');
 $production_id=$_POST['production_id'];
 $product_id=$_POST['product_id'];
 $product_rate=$_POST['product_rate'];
  $production_qty=$_POST['production_qty'];
 $production_date=$_POST['production_date'];
 $sql="update production set product_id='$product_id',product_rate='$product_rate',production_qty='$production_qty',production_date='$production_date' where production_id='$production_id'";
 mysqli_query($conn,$sql);
 ?>
 <script language="javascript1.2">
 alert("Updated successfully");
 document.location="Production_view.php";
 </script>