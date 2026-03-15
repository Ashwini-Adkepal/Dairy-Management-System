<?php include('meta_tag.php'); ?>

<?php include('top_bar.php'); ?>

            <!-- MENU Start -->
             <?php include('menu_bar.php'); ?>
             <style type="text/css">
<!--
.style1 {font-size: large}
.style2 {font-size: large}
-->
             </style>
             


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                      <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <!-- <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li> -->
                                </ol>
                            </div>
                          <h4 class="page-title">&nbsp;</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 align="center" class="mt-0 header-title style1">&nbsp;</h4>
                                <h4 align="center" class="mt-0 header-title style1">Employee Salary Details</h4>
                                <p></p>
                                <p class="style2"></p>
                                <p class="style2"></p>
<?php
include('../db_connect/dbconnect.php');
$employee_salary_id=$_REQUEST['employee_salary_id'];
$sql="select * from employee_salary_details where employee_salary_id='$employee_salary_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="employee_salary_details_update.php">
<input type="hidden" name="employee_salary_id" value="<?php echo $row['employee_salary_id'];?>">
<table width="430" height="481" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="176">Select Employee</td>
      <td width="254"><select name="emp_id" id="emp_id" class="form-control" required>
        <option value="">select employe name</option>
        <?php
        $sql2="select * from employee_details";
        $res2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_array($res2))
        {
		?>
        <option value="<?php echo $row2['employee_id'];?>" <?php if($row2['employee_id']==$row['employee_id']) { ?> selected <?php } ?>><?php echo $row2['employee_name'];?></option>
        <?php
		}
        ?>
      </select></td>
    </tr>
    <tr>
      <td>Da_ta</td>
      <td><input name="da_ta" type="text" id="da_ta" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['da_ta'];?>"></td>
    </tr>
    <tr>
      <td>Pf</td>
      <td><input name="pf" type="text" id="pf" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['pf'];?>"></td>
    </tr>
    <tr>
      <td>Year</td>
      <td><input name="year" type="year" id="year" class="form-control validate[required]" value="<?php echo $row['year'];?>"></td>
    </tr>
    <tr>
      <td>Month</td>
      <td><input name="month" type="text" id="month" class="form-control validate[required]" value="<?php echo $row['month'];?>"></td>
    </tr>
    <tr>
      <td>Given_date</td>
      <td><input name="given_date" type="date" id="given_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['given_date'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input name="reset" type="reset" id="reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
</form>
</div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>
		<?php include('val.php'); ?>