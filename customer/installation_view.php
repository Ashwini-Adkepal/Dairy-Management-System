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
                            <h4 class="page-title">Installation</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Installation Charges</h4>
                             

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No</th>
    <th>Product Name </th>
    <th>Installation Description </th>
    <th>Installation Charges </th>
   
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