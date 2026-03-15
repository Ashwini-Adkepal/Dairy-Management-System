<?php
include('../db_connect/dbconnect.php');
$farmer_id=$_POST['farmer_id'];
$farmer_name=$_POST['ven_name'];
$farmer_city=$_POST['ven_city'];
$farmer_address=$_POST['ven_address'];
$farmer_contact_no=$_POST['ven_contact'];
$email_id=$_POST['email_id'];
$sql="update farmer_details set farmer_name='$farmer_name',farmer_city='$farmer_city',farmer_address='$farmer_address',farmer_contact_no='$farmer_contact_no',email_id='$email_id' where farmer_id='$farmer_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("orders are update");
document.location="farmer_details_view.php"
</script>