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
                            <h4 class="page-title">Farmer Supply Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                              <a href="farmer_supply_details_form.php" class="btn btn-primary">ADD NEW  FARMER SUPPLY</a>
							    <p>&nbsp;</p>
							  <form name="form1" method="post" action="farmer_supply_details_view_next.php">
							    Select Date : 
							    <input name="date" type="date" id="date">
                                <input type="submit" name="Submit" value="Submit">
                              </form>
							    <p>&nbsp;</p>
                              <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Farmer name</th>
    <th>Product name</th>
    <th>Quantity</th>
    <th>Purchase rate</th>
	<th>Total Amount</th>
    <th>Supply date </th>
    <th>Status</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $tot=0;
  $sql="select * from farmer_supply_details vs,farmer_details vd,product_catalog pc where vs.farmer_id=vd.farmer_id and vs.product_id=pc.product_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $tot=$tot+($row['purchase_rate']*$row['quantity']);
  ?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['farmer_name'];?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['purchase_rate'];?></td>
	<td>&nbsp;<?php echo $row['purchase_rate']*$row['quantity'];?></td>
    <td>&nbsp;<?php echo $row['supply_date'];?></td>
    <td>&nbsp;<?php echo $row['status'];?></td>
    <td><a href="farmer_supply_details_delete.php?farmer_supply_id=<?php echo $row['farmer_supply_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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
    <td>&nbsp;<b>Total</b></td>
    <td>&nbsp;<b><?php echo $tot; ?></b></td>
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

