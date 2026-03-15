<?php

include('../db_connect/dbconnect.php');

$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];
$product_rate=$_POST['product_rate'];
$product_image=$_POST['product_image'];

$sql= "update product_catalog set product_name='$product_name',	product_description='$product_description',product_rate='$product_rate',product_image='$product_image' where product_id='$product_id'";
mysqli_query($conn,$sql);


?>

<script>
alert("updated..");
document.location="product_catalog_view.php";



</script>