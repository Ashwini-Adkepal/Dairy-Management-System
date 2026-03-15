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
                            <h4 class="page-title">Delivery Status </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Delivery Installation </h4>
                                <a href="delivery_installation_form.php" class="btn btn-info">Add</a><p></p>

                                <table id="datatable" class="table table-bordered">
                                    <thead>
                                    <tr>

    <th>Sl No</th>
    <th>Order No /Customer Name </th>
    <th>Delivery Description </th>
    <th>Delivery Status </th>
    <th>Delivery Date </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  
  
  <?php
  include('../db_connect/dbconnect.php');
$sl=1;
 $sql="select * from delivery_installation di,customer_order co ,customer_details cd  where di.cust_order_id=co.cust_order_id and co.customer_id=cd.customer_id ";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp; <?php echo $sl++; ?> </td>
    <td>&nbsp; <?php echo $row['cust_order_id']; ?> / <?php echo $row['customer_name']; ?></td>
    <td>&nbsp; <?php echo $row['delivery_description']; ?></td>
    <td>&nbsp; <?php echo $row['delivery_status']; ?></td>
    <td>&nbsp; <?php echo $row['delivery_date']; ?></td>
    <td><a href="delivery_installation_edit.php?delivery_installation_id=<?php echo $row['delivery_installation_id']; ?>" class="btn btn-primary">Edit</a></td>
    <td><a href="delivery_installation_delete.php?delivery_installation_id=<?php echo $row['delivery_installation_id']; ?>" class="btn btn-danger" onClick="return confirm('Are u sure want to delete')">Delete</a></td>
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
