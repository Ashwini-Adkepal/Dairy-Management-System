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
<?php
include('../db_connect/dbconnect.php');
$farmer_payment_id=$_REQUEST['farmer_payment_id'];
$sql="select * from farmer_payments where farmer_payment_id='$farmer_payment_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1"id="formID" method="post" action="farmer_payment_update.php">
<input type="hidden" name="farmer_payment_id" value="<?php echo $row['farmer_payment_id'];?>">
  <table width="565" height="536" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="204">Select Farmer</td>
      <td width="304"><select name="ven_id" id="ven_id" class="form-control" required>
        <option value="">select farmer id</option>
        <?php
        
        $sql2="select * from farmer_details";
        $res2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_array($res2))
        {
		?>
        <option value="<?php echo $row2['farmer_id'];?>" <?php if($row2['farmer_id']==$row['farmer_id']) { ?> selected <?php } ?>><?php echo $row2['farmer_name'];?></option>
        <?php
		}
        ?>
      </select></td>
    </tr>
    <tr>
      <td>Payment_no</td>
      <td><input name="pay_no" type="text" id="pay_no" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['payment_no'];?>"></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" class="form-control [required,custom[onlyNumber]]" value="<?php echo $row['amount'];?>"></td>
    </tr>
    <tr>
      <td>Mode_of_payment</td>
      <td><input name="mode_of_pay" type="text" id="mode_of_pay" class="form-control validate[required]" value="<?php echo $row['mode_of_payment'];?>"></td>
    </tr>
    <tr>
      <td>Bank_name</td>
      <td><input name="bank_name" type="text" id="bank_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['bank_name'];?>"></td>
    </tr>
    <tr>
      <td>Cheque_dd_no</td>
      <td><input name="cheque_dd_no" type="text" id="cheque_dd_no" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['cheque_dd_no'];?>"></td>
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
