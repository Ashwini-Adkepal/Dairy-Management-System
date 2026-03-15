<?php
include('../db_connect/dbconnect.php');
$employee_salary_id=$_REQUEST['employee_salary_id'];
$sql="delete from employee_salary_details where employee_salary_id='$employee_salary_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are deleted");
document.location="employee_salary_details_view.php";
</script>