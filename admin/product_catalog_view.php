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

                                <h4 class="mt-0 header-title">Product Catalog </h4>
                               	 <a href="product_catalog_form.php" class="btn btn-info">Add New Product</a><p></p>
								<div align="right">  <a href="category_view.php" class="btn btn-info">Product Category</a><p></p>
</div>
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>								    
									
									
									
    <th width="33">Sl No</th>
    <th width="65">Product Name </th>
	<th width="65">Product Type </th>
    <th width="94">Product Description </th>
    <th width="65">Product Rate </th>
    <th width="65">Product Image </th>
    <th width="30">Edit</th>
    <th width="11">Delete</th>
  </tr>
  </thead>
  <tbody>
  
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$sql="select * from product_catalog p,category c where p.category_id=c.category_id ";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp; <?php echo $sl++; ?> </td>
    <td>&nbsp; <?php echo $row['product_name']; ?></td>
	<td>&nbsp; <?php echo $row['category_name']; ?></td>
    <td>&nbsp; <?php echo $row['product_description']; ?></td>
    <td>&nbsp; <?php echo $row['product_rate']; ?></td>
    <td>&nbsp; <img src="../images/<?php echo $row['product_image']; ?>" width="100px" height="100px"></td>
    <td><a href="product_catalog_edit.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="product_catalog_delete.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  </tr></td>
  </tr>
  <?php
  }
  ?>
                          </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>