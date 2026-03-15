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
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
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
                                <a href="customer_payment_form.php" class="btn btn-info">Add</a><p></p>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>


    <th>Sl No</th>
    <th>Customer Order id</th>
    <th>Service Charges </th>
    <th>Tax amount </th>
    <th>Total amount </th>
    <th>Status</th>
    <th>Date</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>  
  
  
   <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$sql="select * from customer_payments cp,customer_order co where cp.cust_order_id=co.cust_order_id";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp; <?php echo $sl++; ?> </td>
    <td>&nbsp; <?php echo $row['cust_order_id']; ?> </td>
    <td>&nbsp; <?php echo $row['service_charges']; ?> </td>
    <td>&nbsp; <?php echo $row['tax_amount']; ?> </td>
    <td>&nbsp; <?php echo $row['total_amount']; ?> </td>
    <td>&nbsp; <?php echo $row['status']; ?> </td>
    <td>&nbsp; <?php echo $row['date']; ?> </td>
    <td><a href="customer_payment_edit.php?cust_pay_id=<?php echo $row['cust_pay_id']; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="customer_payment_delete.php?cust_pay_id=<?php echo $row['cust_pay_id']; ?>" class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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
