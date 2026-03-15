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
                            <h4 class="page-title">Customer Payment </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Payment </h4>
                            
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>


    <th>Sl No</th>
    <th>Customer Name</th>
    <th>Total amount </th>
    <th>Status</th>
    <th>Date</th>
	<th>Transaction ID</th>
   
  </tr>
  </thead>
  <tbody>  
  
  
   <?php
  include('../db_connect/dbconnect.php');
$sl=1;
  $sql="select * from customer_payments cp,customer_details cd where cp.customer_id=cd.customer_id ";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++; ?> </td>
    <td><?php echo $row['customer_name']; ?> </td>
    <td><?php echo $row['total_amount']; ?> </td>
    <td><?php echo $row['status']; ?> </td>
    <td><?php echo $row['date']; ?> </td>
	<td><?php echo $row['tranc_id']; ?> </td>
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
