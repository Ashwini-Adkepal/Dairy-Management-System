<?php
include('../db_connect/dbconnect.php');
$employee_id=$_POST["employee_id"];
$employee_name=$_POST["emp_name"];
$designation=$_POST["designation"];
$date_of_birth=$_POST["dob"];
$gender=$_POST["gender"];
$qualification=$_POST["qualification"];
$date_of_joining=$_POST["doj"];
$basic_salary=$_POST["salary"];
$sql="update employee_details set employee_name='$employee_name',designation='$designation',date_of_birth='$date_of_birth',gender='$gender',qualification='$qualification',date_of_joining='$date_of_joining',basic_salary='$basic_salary' where employee_id='$employee_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("values are updated");
document.location="employee_details_view.php"
</script>

