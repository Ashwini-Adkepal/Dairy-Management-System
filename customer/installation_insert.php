<?php
include('../db_connect/dbconnect.php');

$product_id=$_POST['product_id'];
$installation_description=$_POST['installation_description'];
$installation_charges=$_POST['installation_charges'];

$sql="insert into installation values(null,'$product_id','$installation_description','$installation_charges')";
mysqli_query($conn,$sql);



?>


<script>
alert("record inserted");
document.location="installation_form.php";



</script>