<?php

include('../db_connect/dbconnect.php');

$category_name=$_POST['category_name'];
$category_description=$_POST['category_description'];



$sql= "insert into category values(null,'$category_name','$category_description')";
mysqli_query($conn,$sql);


?>


<script>
alert("Category inserted successfully...");
document.location="category_view.php";



</script>