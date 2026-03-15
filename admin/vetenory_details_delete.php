<?php
include('../db_connect/dbconnect.php');
$vetenory_id=$_REQUEST['vetenory_id'];
$sql="delete from  vetenory_details where vetenory_id='$vetenory_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location="vetenory_details_view.php";
</script>

