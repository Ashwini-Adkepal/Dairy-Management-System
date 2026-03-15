<?php
include('../db_connect/dbconnect.php');

$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$pin_code=$_POST['pin_code'];
$city=$_POST['city'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];

$sql="update customer_details set customer_name='$customer_name',customer_address='$address',pincode='$pin_code',city='$city',email_id='$email_id',contact_no='$contact_no' where customer_id='$customer_id'";
mysqli_query($conn,$sql);


?>

<script>
alert("Updated...");
document.location="customer_details_edit.php";
</script>