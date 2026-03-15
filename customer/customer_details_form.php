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
                            <h4 class="page-title">Customer Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Details</h4>
                                <p></p>
<form name="formID" id="formID" method="post" action="customer_details_insert.php">
  
  <table width="620" height="375" border="0" align="center">
    <tr>
      <td width="228">Customer Name  </td>
      <td width="406"><input name="customer_name" type="text" id="customer_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="112">Address</td>
      <td><textarea name="address" id="address" class="validate[required] form-control"></textarea></td>
    </tr>
    <tr>
      <td height="37">Pin Code </td>
      <td><input name="pin_code" type="text" id="pin_code" class="validate[required,custom[pinCode]] form-control"></td>
    </tr>
    <tr>
      <td height="51">City</td>
      <td><input name="city" type="text" id="city" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="41">Email Id </td>
      <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]] form-control"></td>
    </tr>
    <tr>
      <td height="54">Contact No </td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
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