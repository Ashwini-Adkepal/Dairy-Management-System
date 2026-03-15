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
                            <h4 class="page-title">Vetenory Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
<a href="vetenory_details_form.php" class="btn btn-primary">ADD NEW VETENORY</a>
                              
                                <table id="datatable" class="table table-bordered">
  <thead>
  <tr>
    <th>SI.NO</th>
    <th>Doctor Name </th>
    <th>Doctor city </th>
    <th>Doctor address</th>
    <th>Doctor contact no</th>
    <th>Email id </th>
    
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php
  include('../db_connect/dbconnect.php');
  $SI_NO=1;
  $sql="select * from vetenory_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
?>
  <tr>
    <td>&nbsp;<?php echo $SI_NO++;?></td>
    <td>&nbsp;<?php echo $row['doctor_name'];?></td>
    <td>&nbsp;<?php echo $row['vetenory_city'];?></td>
    <td>&nbsp;<?php echo $row['vetenory_address'];?></td>
    <td>&nbsp;<?php echo $row['vetenory_contact_no'];?></td>
    <td>&nbsp;<?php echo $row['email_id'];?></td>
    <td><a href="vetenory_details_delete.php?vetenory_id=<?php echo $row['vetenory_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
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

