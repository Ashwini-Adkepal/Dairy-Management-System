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
                                <h4 align="center" class="mt-0 header-title style1">Farmer Details</h4>
                                <p></p>
                                <p class="style2"></p>
                                <p class="style2"></p>

<?php
include('../db_connect/dbconnect.php');
$farmer_id=$_REQUEST['farmer_id'];
$sql="select * from farmer_details where farmer_id='$farmer_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="farmer_details_update.php">
<input type="hidden" name="farmer_id" value="<?php echo $row['farmer_id'];?>">
  <table width="638" height="474" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="206">Farmer_name</td>
      <td width="357"><input name="ven_name" type="text" id="ven_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['farmer_name'];?>"></td>
    </tr>
    <tr>
      <td>Farmer_city</td>
      <td><input name="ven_city" type="text" id="ven_city" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['farmer_city'];?>"></td>
    </tr>
    <tr>
      <td height="164">Farmer_address</td>
      <td><textarea name="ven_address" id="ven_address" class="form-control validate[required]]"><?php echo $row['farmer_address'];?></textarea></td>
    </tr>
    <tr>
      <td>Farmer_contact_no</td>
      <td><input name="ven_contact" type="text" id="ven_contact"  class="form-control validate[required,custom[mobile]]" value="<?php echo $row['farmer_contact_no'];?>"></td>
    </tr>
    <tr>
      <td>Email_id</td>
      <td><input name="email_id" type="text" id="email_id" class="form-control validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit"class="btn btn-primary">
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
