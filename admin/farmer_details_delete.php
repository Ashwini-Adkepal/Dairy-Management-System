<?php
include('../db_connect/dbconnect.php');
$farmer_id=$_REQUEST['farmer_id'];
$sql="delete from  farmer_details where farmer_id='$farmer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location=" farmer_details_view.php";
</script>

