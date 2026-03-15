<?php
include('../db_connect/dbconnect.php');
$employee_name=$_POST["emp_name"];
$designation=$_POST["designation"];
$date_of_birth=$_POST["dob"];
$gender=$_POST["gender"];
$qualification=$_POST["qualification"];
$date_of_joining=$_POST["doj"];
$basic_salary=$_POST["salary"];
$sql="insert into employee_details values(null,'$employee_name','$designation','$date_of_birth','$gender','$qualification','$date_of_joining','$basic_salary')";
mysqli_query($conn,$sql);
?>
<script>
alert("values inserted");
document.location="employee_details_view.php"
</script>

