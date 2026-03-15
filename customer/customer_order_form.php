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
                            <h4 class="page-title">Customer Order Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Order Details</h4>
                                <p></p>
<form name="form1" id="formID" method="post" action="customer_order_insert.php">
  
  <table width="685" height="286" border="0" align="center">
    <tr>
      <td width="304">Customer id </td>
      <td width="371">
	  <select name="customer_id" id="customer_id" class="validate[required] form-control">
	  <option value="" >Select Customer</option>
	  <?php
	  include('../db_connect/dbconnect.php');
	  $sql1="select * from customer_details";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['customer_id']; ?>"><?php echo $row1['customer_name']; ?></option>
	  <?php
	  }
	  ?>
      </select>
	  </td>
    </tr>
    <tr>
      <td>Product id </td>
      <td><select name="product_id" id="product_id" class="validate[required] form-control">
	  <option value="" >Select product</option>
	   <?php
	  include('../db_connect/dbconnect.php');
	  $sql2="select * from product_catalog";
	  $res2=mysqli_query($conn,$sql2);
	  while($row1=mysqli_fetch_array($res2))
	  {
	  ?>
	  <option value="<?php echo $row1['product_id']; ?>"><?php echo $row1['product_name']; ?></option>
	  <?php
	  }
	  ?>
	  
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Rate</td>
      <td><input name="rate" type="text" id="rate" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status1" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Order Date </td>
      <td><input name="dat" type="Date" id="dat" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">        
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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