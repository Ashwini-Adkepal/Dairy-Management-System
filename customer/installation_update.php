<?php
include('../db_connect/dbconnect.php');

$installation_id=$_POST['installation_id'];
$product_id=$_POST['product_id'];
$installation_description=$_POST['installation_description'];
$installation_charges=$_POST['installation_charges'];

$sql="update installation set product_id='$product_id',	installation_description='$installation_description',installation_charges='$installation_charges' where installation_id='$installation_id'";
mysqli_query($conn,$sql);



?>


<script>
alert("updated..");
document.location="installation_view.php";



</script>