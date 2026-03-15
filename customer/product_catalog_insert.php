<?php

include('../db_connect/dbconnect.php');

$product_name=$_POST['product_name'];
$product_description=$_POST['product_description'];
$product_rate=$_POST['product_rate'];
//$product_image=$_POST['product_image']

	$product_image=$_FILES["product_image"]['name'];
$tmp_location=$_FILES["product_image"]["tmp_name"];
$target="../images//".$product_image;
move_uploaded_file($tmp_location,$target);


$sql= "insert into product_catalog values(null,'$product_name','$product_description','$product_rate','$product_image')";
mysqli_query($conn,$sql);


?>


<script>
alert("record inserted");
document.location="product_catalog_view.php";



</script>