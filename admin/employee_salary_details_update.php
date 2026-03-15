<?php
include('../db_connect/dbconnect.php');
$employee_salary_id=$_POST["employee_salary_id"];
$employee_id=$_POST["emp_id"];
$da_ta=$_POST["da_ta"];
$pf=$_POST["pf"];
$year=$_POST["year"];
$month=$_POST["month"];
$given_date=$_POST["given_date"];
$sql="update employee_salary_details set employee_id='$employee_id',da_ta='$da_ta',pf='$pf',year='$year',month='$month',given_date='$given_date' where employee_salary_id='$employee_salary_id'";
mysqli_query($conn,$sql);
?>
<script>alert("values are updated");
document.location="employee_salary_details_view.php"
</script>