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
                               
                            </div>
                            <h4 class="page-title">Customer Registration</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              
                                <p></p>
<form name="form1" id="formID" method="post" action="customer_details_insert.php">
  
  <table width="620" height="497" border="0" align="center">
    <tr>
      <td width="228">Customer Name  </td>
      <td width="406"><input name="customer_name" type="text" id="customer_name" required class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td height="112">Address</td>
      <td><textarea name="address" id="address" class="validate[required] form-control" required></textarea></td>
    </tr>
    <tr>
      <td height="37">Pin Code </td>
      <td><input name="pin_code" type="text" id="pin_code" required class="validate[required,custom[pinCode]] form-control"></td>
    </tr>
    <tr>
      <td height="51">City</td>
      <td><input name="city" type="text" id="city" required class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
  
    <tr>
      <td height="54">Contact No </td>
      <td><input name="contact_no" type="text" required id="contact_no" class="validate[required,custom[mobile]] form-control"></td>
    </tr>
	  <tr>
	    <td height="49" colspan="2"><strong>Login</strong></td>
	    </tr>
	  <tr>
      <td height="52">Email Id </td>
      <td><input name="email_id" type="text" id="email_id" required class="validate[required,custom[email]] form-control"></td>
    </tr>
	  <tr>
      <td height="50">Password </td>
      <td><input name="password" type="password" id="password" required	 class="validate[required] form-control"></td>
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