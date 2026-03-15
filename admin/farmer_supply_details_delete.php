<?php
include('../db_connect/dbconnect.php');
$farmer_supply_id=$_REQUEST['farmer_supply_id'];
$sql="delete from farmer_supply_details where farmer_supply_id='$farmer_supply_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("orders are deleted ");
document.location="farmer_supply_details_view.php";
</script>
