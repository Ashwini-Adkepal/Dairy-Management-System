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
                            <h4 class="page-title">My Customer Order </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">My Order Details </h4>
                                 

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>
    <th>Sl No </th>
    <th>Customer Name </th>
    <th>Product Name </th>
    <th>Quantity</th>
    <th>Rate</th>
	<th>Total </th>
    <th>Status</th>
    <th>Order Date </th>
  
    
  </tr>
  </thead>
  <tbody>
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
$uname=$_SESSION['uname'];
$tot=0;
$email_id='san@gmail.com';
$contact_no='7865678987';
$customer_name='san';
$sql="select * from customer_order co,customer_details cd,product_catalog pc where co.customer_id=cd.customer_id and co.product_id=pc.product_id and cd.email_id='$uname' and co.order_status='Pending'";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['rate']*$row['quantity']; 
  $email_id=$row['email_id'];
  $contact_no=$row['contact_no'];
  $customer_name=$row['customer_name'];
  ?>
  
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<?php echo $row['customer_name']; ?></td>
    <td>&nbsp;<?php echo $row['product_name']; ?></td>
    <td>&nbsp;<?php echo $row['quantity']; ?></td>
    <td>&nbsp;<?php echo $row['rate']; ?></td>
	 <td>&nbsp;<?php echo $tamt=$row['rate']*$row['quantity']; ?></td>
    <td>&nbsp;<?php echo $row['order_status']; ?></td>
    <td>&nbsp;<?php echo $row['order_date']; ?></td>
  </tr>
  
  <?php
  
  }
  ?>
  
  
                          </tbody>
						  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;<strong>Total Amount</strong></td>
    <td>&nbsp;<strong><?php echo $tot; ?></strong></td>
     <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> 
                                </table>
								
								 <a href="customer_payment_form.php?&customer_name=<?php echo $customer_name; ?>&email_id=<?php echo $email_id; ?>&contact_no=<?php echo $contact_no; ?>&tamt=<?php echo $tot; ?>" class="btn btn-success">Pay Now</a> 

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>