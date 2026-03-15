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
                            <h4 class="page-title">Customer payments</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Payments</h4><P></P>

<?php
 include('../db_connect/dbconnect.php');
 $cust_pay_id=$_REQUEST['cust_pay_id'];
 $sql="select * from customer_payments where cust_pay_id='$cust_pay_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);

?>
<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="customer_payment_update.php">
<input type="hidden" name="cust_pay_id" value="<?php echo $row['cust_pay_id']; ?>">
<table width="604" height="303" border="0" align="center">
    <tr>
      <td width="195">Customer order id </td>
      <td width="371"><select name="cust_order_id" id="cust_order_id" class="validate[required,custom[onlyNumber]]">
        <option value="" >Select customer</option>
        <?php
	  include('../db_connect/dbconnect.php');
	  $sql1="select * from customer_order";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['cust_order_id']; ?>" <?php if($row1['cust_order_id']==$row['cust_order_id']) { ?> selected <?php } ?> ><?php echo $row1['cust_order_id']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Service charges </td>
      <td><input name="service_charges" type="text" id="service_charges" value=" <?php echo $row['service_charges']; ?> " class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Tax amount </td>
      <td><input name="tax_amount" type="text" id="tax_amount" value="<?php echo $row['tax_amount']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Total amount </td>
      <td><input name="total_amount" type="text" id="total_amount" value="<?php echo $row['total_amount']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status1" value="<?php echo $row['status']; ?> " class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><input name="dat" type="Date" id="dat" value="<?php echo $row['date']; ?>" class="validate[required,custom[date]] form-control"></td>
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
  <p>&nbsp;</p>
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