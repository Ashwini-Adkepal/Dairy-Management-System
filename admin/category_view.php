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

                                <h4 class="mt-0 header-title">Product Category </h4>
                                <a href="category_form.php" class="btn btn-info">Add New Category</a><p></p>
             <div align="right"><a href="product_catalog_view.php" class="btn btn-info">Product Details</a><p></p></div>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>								    
									
									
									
    <th width="33">Sl No</th>
    <th width="65">Category Name </th>
	
    <th width="94">Description </th>
    <th width="11">Delete</th>
  </tr>
  </thead>
  <tbody>
  
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$sql="select * from category";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp; <?php echo $sl++; ?> </td>
    <td>&nbsp; <?php echo $row['category_name']; ?></td>
	<td>&nbsp; <?php echo $row['category_description']; ?></td>
  <td><a href="category_delete.php?category_id=<?php echo $row['category_id']; ?>" class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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