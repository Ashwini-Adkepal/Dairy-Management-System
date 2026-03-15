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
                            <h4 class="page-title">Delivery and Installation</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Delivery and Installation</h4><P></P>
                              <form name="form1" id="formID" method="post" action="delivery_installation_insert.php">
                                <table width="758" height="295" border="0" align="center">
    <tr>
      <td width="223">Customer Order No / Customer </td>
      <td width="379"><select name="cust_order_id" id="cust_order_id" class="validate[required] form-control">
	  <option value="" >Select customer</option>
	  <?php
	  include('../db_connect/dbconnect.php');
	  $sql1="select * from customer_order co,customer_details cd where co.customer_id=cd.customer_id ";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['cust_order_id']; ?>">OrderNo: <?php echo $row1['cust_order_id']; ?>  /<?php echo $row1['customer_name']; ?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Delivery Description </td>
      <td><textarea name="delivery_description" id="delivery_description" class="validate[required] form-control"></textarea></td>
    </tr>
    <tr>
      <td>Delivery Status</td>
      <td><select name="delivery_status" id="delivery_status" class=" form-control validate[required]">
        <option value="">Select Status</option>
        <option value="Deleverd">Deleverd</option>
        <option value="Not Delevered">Not Delevered</option>
		<option value="Not Delevered">Pending</option>
		
      </select></td>
    </tr>
    <tr>
      <td>Delivery Date </td>
      <td><input name="dat" type="Date" id="dat" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">        
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
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