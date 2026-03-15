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
                                <h4 align="center" class="mt-0 header-title style1">Employee Details</h4>
                                <p></p>
                                <p class="style2"></p>
                                <p class="style2"></p>
<form name="form1" id="formID" method="post" action="employee_details_insert.php">
  <table width="473" height="591" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>Employee_name</td>
      <td><input name="emp_name" type="text" id="emp_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Designation</td>
      <td><input name="designation" type="text" id="designation" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Date_of_birth</td>
      <td><input name="dob" type="date" id="dob" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male">        <span class="style1">male</span>        <input name="gender" type="radio" value="female">
      <span class="style1">female</span></td></tr>
    <tr>
      <td>Qualification</td>
      <td><input name="qualification" type="text" id="qualification" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Date_of_joining</td>
      <td><input name="doj" type="date" id="doj" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Basic_salary</td>
      <td><input name="salary" type="text" id="salary" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="77" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit"  class="btn btn-primary">      
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