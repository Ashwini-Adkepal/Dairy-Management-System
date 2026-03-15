<?php include('meta_tag.php'); ?>


 <?php include('top_bar.php'); ?>

      <?php include('menu_bar.php'); ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                              
                            </div>
                            <h4 class="page-title">Product Catalog </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Product Order Now </h4>
                                <form method="post" action="customer_order_insert.php" name="formId" id="formID">

                                <table id="datatable" class="table table-bordered">
                                   
  <tbody>
  
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$product_id=$_REQUEST['product_id'];
$sql="select * from product_catalog where product_id='$product_id'";
$res=mysqli_query($conn,$sql);
  if($row=mysqli_fetch_array($res))
  {
  ?>
  <input type="hidden" value=" <?php echo $row['product_id']; ?>" name="product_id">
  <input type="hidden" value=" <?php echo $row['product_rate']; ?>" name="rate">
  <tr>
    <td>&nbsp; <img src="../images/<?php echo $row['product_image']; ?>" width="320px" height="320px"> </td>
    <td>&nbsp; <h3>Product Name: <?php echo $row['product_name']; ?></h3>
	<?php echo $row['product_description']; ?>
	<br><h4><font color="#000066">Rs. <?php echo $row['product_rate']; ?></font></h4></td>
    
    <td><h6>Quantity</h6><br><input name="quantity" class="form-control validate[required,custom[onlyNumber]]" type="text" id="quantity"></td>
    <td><input type="submit" value="Order Now" class="btn btn-primary"></td>
  </tr></td>
  </tr>
  <?php
  }
  ?>
                          </tbody>
                                </table>
								</form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>
		<?php include('val.php'); ?>