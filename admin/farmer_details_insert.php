<?php
include('../db_connect/dbconnect.php');
$farmer_name=$_POST['ven_name'];
$farmer_city=$_POST['ven_city'];
$farmer_address=$_POST['ven_address'];
$farmer_contact_no=$_POST['ven_contact'];
$email_id=$_POST['email_id'];

 $sql="insert into farmer_details values(null,'$farmer_name','$farmer_city','$farmer_address','$farmer_contact_no','$email_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="farmer_details_view.php"
</script>