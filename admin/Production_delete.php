   <?php
include('../db_connect/dbconnect.php');
$cpi=$_REQUEST['cpi'];
$sql="delete from production where production_id='$cpi'";
mysqli_query($conn,$sql);
?>
<script>
alert("Product Details Are Deleted..");
document.location="Production_view.php";
</script>