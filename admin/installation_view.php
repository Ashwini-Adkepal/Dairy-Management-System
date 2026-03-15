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
                            <h4 class="page-title">Installation Charges</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Installation </h4>
                                <a href="installation_form.php" class="btn btn-info">Add Charges</a><p></p>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No</th>
    <th>Product Name </th>
    <th>Installation Description </th>
    <th>Installation Charges </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  
  
   <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$sql="select * from installation i,product_catalog pc where i.product_id=pc.product_id";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  
  <tr>
    <td>&nbsp; <?php echo $sl++; ?></td>
    <td>&nbsp; <?php echo $row['product_name']; ?></td>
    <td>&nbsp; <?php echo $row['installation_description']; ?></td>
    <td>&nbsp; <?php echo $row['installation_charges']; ?></td>
     <td><a href="installation_edit.php?i_id=<?php echo $row['installation_id']; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="installation_delete.php?installation_id=<?php echo $row['installation_id']; ?>" class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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