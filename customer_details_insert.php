<?php
include('db_connect/dbconnect.php');

$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$pin_code=$_POST['pin_code'];
$city=$_POST['city'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$password=$_POST['password'];

$sql="insert into customer_details values(null,'$customer_name','$address','$pin_code','$city','$email_id','$contact_no')";
mysqli_query($conn,$sql);

$sql1="insert into login values(null,'$email_id','$password','customer','Enter Your Contact No','$contact_no','Actie')";
mysqli_query($conn,$sql1);


?>

<script>
alert("Registerd...");
document.location="login.php";
</script>