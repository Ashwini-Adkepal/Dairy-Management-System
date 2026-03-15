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
                            <h4 class="page-title">Farmer payment Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              <a href="farmer_payment_form.php" class="btn btn-primary">ADD NEW VENDOR PAYMENT</a>
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Farmer name</th>
    <th>Payment no </th>
    <th>Amount</th>
    <th>Mode Of Payment</th>
    <th>Bank name </th>
    <th>Cheque dd no </th>
    <th>Given date </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $tot=0;
  $sql="select * from farmer_payments vp,farmer_details vd where vp.farmer_id=vd.farmer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+$row['amount'];
?>
  
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['farmer_name'];?></td>
    <td>&nbsp;<?php echo $row['payment_no'];?></td>
    <td>&nbsp;<?php echo $row['amount'];?></td>
    <td>&nbsp;<?php echo $row['mode_of_payment'];?></td>
    <td>&nbsp;<?php echo $row['bank_name'];?></td>
    <td>&nbsp;<?php echo $row['cheque_dd_no'];?></td>
    <td>&nbsp;<?php echo $row['given_date'];?></td>
    <td><a href="farmer_payment_edit.php?farmer_payment_id=<?php echo $row['farmer_payment_id'];?>"class="btn btn-primary"">Edit</a></td>
    <td><a href="farmer_payment_delete.php?farmer_payment_id=<?php echo $row['farmer_payment_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;Total Collect</td>
    <td>&nbsp;<?php echo $tot;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
 </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
				
        <!-- Footer -->
        <?php include('footer.php'); ?>

