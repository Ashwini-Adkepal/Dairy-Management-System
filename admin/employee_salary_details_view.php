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
                            <h4 class="page-title">Employee Salary Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                     <a href="employee_salary_details_form.php" class="btn btn-primary">ADD NEW EMPLOYEE SALARY</a>
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Emloyee name</th>
	<th>Basic Salary</th>
    <th>DA-Ta</th>
	<th>Gross Salary</th>
    <th>Pf</th>
	<th>Net Salary</th>
    <th>Year</th>
    <th>Month</th>
    <th>Given date</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $tot=0;
  $sql="select * from employee_salary_details es,employee_details ed where es.employee_id=ed.employee_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+(($row['basic_salary']+$row['da_ta'])-$row['pf']);
  ?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['employee_name'];?></td>
	 <td>&nbsp;<?php echo $row['basic_salary'];?></td>
    <td>&nbsp;<?php echo $row['da_ta'];?></td>
	<td>&nbsp;<?php echo $row['basic_salary']+$row['da_ta'];?></td>
    <td>&nbsp;<?php echo $row['pf'];?></td>
	<td>&nbsp;<b><?php echo ($row['basic_salary']+$row['da_ta'])-$row['pf'];?></b></td>
    <td>&nbsp;<?php echo $row['year'];?></td>
    <td>&nbsp;<?php echo $row['month'];?></td>
    <td>&nbsp;<?php echo $row['given_date'];?></td>
    <td><a href="employee_salary_details_edit.php?employee_salary_id=<?php echo $row['employee_salary_id'];?>"class="btn btn-primary"">Edit</a></td>
    <td><a href="employee_salary_details_delete.php?employee_salary_id=<?php echo $row['employee_salary_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  </tr>
 
  <?php
  }
  ?>
</tbody>
 <tr>
    <td colspan="6"><div align="right"><b>Total Paid Salary</b> </div></td>
    <td>&nbsp;<b><?php echo $tot; ?></b></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>  
</table>
</div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>

