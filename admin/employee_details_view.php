<?php include('meta_tag.php'); ?>


 <?php include('top_bar.php'); ?>

      <?php include('menu_bar.php'); ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                               
                            </div>
                            <h4 class="page-title">Employee Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              <a href="employee_details_form.php" class="btn btn-primary">ADD NEW EMPLOYEE</a>
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</td>
    <th>Employee name </th>
    <th>Designation</th>
    <th>Date of birth </th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Date of joining</th>
    <th>Basic salary </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $sql="select * from employee_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['employee_name'];?></td>
    <td>&nbsp;<?php echo $row['designation'];?></td>
    <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
    <td>&nbsp;<?php echo $row['gender'];?></td>
    <td>&nbsp;<?php echo $row['qualification'];?></td>
    <td>&nbsp;<?php echo $row['date_of_joining'];?></td>
    <td>&nbsp;<?php echo $row['basic_salary'];?></td>
    <td><a href="employee_details_edit.php?employee_id=<?php echo $row['employee_id'];?>"class="btn btn-primary"">Edit</a></td>
    <td><a href="employee_details_delete.php?employee_id=<?php echo $row['employee_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  </tr>
  <?php
  }
  ?>
 </tbody>
</table>
 </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>


