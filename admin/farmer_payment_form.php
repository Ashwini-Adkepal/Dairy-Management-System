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
                                <h4 align="center" class="mt-0 header-title style1">Farmer Payment Details</h4>
                                <p></p>
                                <p class="style2"></p>
                                <p class="style2"></p>
<form name="form1" id="formID" method="post" action="farmer_payment_insert.php">
  <table width="462" height="536" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="200">Select Farmer</td>
      <td width="254"><select name="ven_id" id="ven_id" class="form-control" required>
        <option value="">select farmer name</option>
		<?php
        include('../db_connect/dbconnect.php');
        $sql="select * from farmer_details";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res))
        {
		?>
		<option value="<?php echo $row['farmer_id'];?>"><?php echo $row['farmer_name'];?></option>
		<?php
		}
        ?>
      </select></td>
    </tr>
    <tr>
      <td>Payment_no</td>
      <td><input name="pay_no" type="text" id="pay_no" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Mode_of_payment</td>
      <td><input name="mode_of_pay" type="text" id="mode_of_pay" class="form-control validate[required]]"></td>
    </tr>
    <tr>
      <td>Bank_name</td>
      <td><input name="bank_name" type="text" id="bank_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Cheque_dd_no</td>
      <td><input name="cheque_dd_no" type="text" id="cheque_dd_no" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Given_date</td>
      <td><input name="given_date" type="date" id="given_date" class="form-control validate[required,custom[date]]"></td>
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
