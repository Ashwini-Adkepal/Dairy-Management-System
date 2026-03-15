 <?php
 include('../db_connect/dbconnect.php');
 $product_id=$_POST['product_id'];
  $production_qty=$_POST['production_qty'];
 $production_date=$_POST['production_date'];
 $sql="insert into production values(null,'$product_id','$production_qty','$production_date')";
 mysqli_query($conn,$sql);
 ?>
 <script language="javascript1.2">
 alert("Inserted successfully");
 document.location="Production_view.php";
 </script>