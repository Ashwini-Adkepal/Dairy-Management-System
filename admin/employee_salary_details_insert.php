<?php
include('../db_connect/dbconnect.php');
$employee_id=$_POST["emp_id"];
$da_ta=$_POST["da_ta"];
$pf=$_POST["pf"];
$year=$_POST["year"];
$month=$_POST["month"];
$given_date=$_POST["given_date"];
$sql="insert into employee_salary_details values(null,'$employee_id','$da_ta','$pf','$year','$month','$given_date')";
mysqli_query($conn,$sql);
?>
<script>alert("values are inserted");
document.location="employee_salary_details_view.php"
</script>