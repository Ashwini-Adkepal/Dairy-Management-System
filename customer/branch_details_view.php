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
                            <h4 class="page-title">Farmer Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Farmer name </th>
    <th>Farmer city </th>
    <th>Farmer address</th>
    <th>Farmer contact no</th>
    <th>Email id </th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $sql="select * from farmer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['farmer_name'];?></td>
    <td>&nbsp;<?php echo $row['farmer_city'];?></td>
    <td>&nbsp;<?php echo $row['farmer_address'];?></td>
    <td>&nbsp;<?php echo $row['farmer_contact_no'];?></td>
    <td>&nbsp;<?php echo $row['email_id'];?></td>
	<td><a href="map.php?addr=<?php echo $row['farmer_address'];?>" class="btn btn-success">MAP</a></td>
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

