<?php
include('../db_connect/dbconnect.php');
$name=$_POST['ven_name'];
$city=$_POST['ven_city'];
$address=$_POST['ven_address'];
$contact_no=$_POST['ven_contact'];
$email_id=$_POST['email_id'];

 $sql="insert into vetenory_details values(null,'$name','$city','$address','$contact_no','$email_id')";
mysqli_query($conn,$sql);
?>
<script>
alert("values are inserted");
document.location="vetenory_details_view.php"
</script>