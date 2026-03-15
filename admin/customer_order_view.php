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
                            <h4 class="page-title">Customer Order </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Customer Order </h4>
                                
                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No </th>
    <th>Ordeer No </th>
    <th>Customer Name </th>
    <th>Product Name </th>
    <th>Quantity</th>
    <th>Rate</th>
	<th>Total</th>
    <th>Status</th>
    <th>Order Date </th>
    <th>Dispatched</th>
    <th>Cancel</th>
  </tr>
  </thead>
  <tbody>
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$tot=0;
$sql="select * from customer_order co,customer_details cd,product_catalog pc where co.customer_id=cd.customer_id and co.product_id=pc.product_id";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['rate']*$row['quantity'];
  ?>
  
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['cust_order_id']; ?></td>
	<td>&nbsp;<?php echo $row['customer_name']; ?></td>
    <td>&nbsp;<?php echo $row['product_name']; ?></td>
    <td>&nbsp;<?php echo $row['quantity']; ?></td>
    <td>&nbsp;<?php echo $row['rate']; ?></td>
	 <td>&nbsp;<?php echo $row['rate']*$row['quantity']; ?></td>
    <td>&nbsp;<?php echo $row['order_status']; ?></td>
    <td>&nbsp;<?php echo $row['order_date']; ?></td>
    <td><?php if($row['order_status']=='Dispatched') { } else { ?><a href="customer_depached.php?cust_order_id=<?php echo $row['cust_order_id']; ?>"><i class="fa fa-fw fa-edit"></i><font color="#000099"><b>Click Here to Dispatched</b></font></a><?php } ?></td>
    <td><?php if($row['order_status']=='Dispatched') { } else { ?><a href="customer_order_delete.php?cust_order_id=<?php echo $row['cust_order_id']; ?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Cancel</a><?php } ?></td>
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