<?php include('meta_tag.php'); ?>

<?php include('top_bar.php'); ?>

            <!-- MENU Start -->
             <?php include('menu_bar.php'); ?>


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
                            <h4 class="page-title">My Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                
                                <p></p>
								
<?php
 include('../db_connect/dbconnect.php');
 $uname=$_SESSION['uname'];
 $sql="select * from customer_details where email_id='$uname'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);

?>
<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="customer_details_update.php">

  <div align="left">
    <input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>">
  </div>
  <table width="509" height="363" border="0" align="center">
    <tr>
      <td width="174">Customer Name  </td>
      <td width="319"><input name="customer_name" type="text" id="customer_name" value="<?php echo $row['customer_name']; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" class="validate[required] form-control"><?php echo $row['customer_address']; ?></textarea></td>
    </tr>
    <tr>
      <td>Pin Code </td>
      <td><input name="pin_code" type="text" id="pin_code" value="<?php echo $row['pincode']; ?>" class="validate[required,custom[pinCode]] form-control"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $row['city']; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td><input name="email_id" type="text" id="email_id" readonly="" value="<?php echo $row['email_id']; ?>" class="validate[required,custom[email]] form-control"></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']; ?>" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
    <tr>
      <td height="49" colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">        
            <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
      </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>
		<?php include('val.php'); ?>