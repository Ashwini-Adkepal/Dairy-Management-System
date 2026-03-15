  <?php include('meta_tag.php'); ?>

<?php include('top_bar.php'); ?>

            <!-- MENU Start -->
             <?php include('menu_bar.php'); ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                 
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title"></h4>
                                <p class="text-muted mb-4 font-14"> <code
                                        class="highlighter-rouge">.</code> 
                                   <code class="highlighter-rouge"></code> <code
                                            class="highlighter-rouge"></code>.</p>
											<a href="Production_form.php" class="btn btn-primary">Add Production</a> 
<table id="datatable" class="table table-bordered">
<thead>
  <tr>
    <th>SL NO </th>
    <th>PRODUCT ID </th>
   
    <th>PRODUCTION QUANTITY </th>
    <th>PRODUCTION DATE</th>
      <th>DELETE</th>
  </tr>
  </thead>
  <tbody>
    <?php
include('../db_connect/dbconnect.php');
  $sl=1;
  $sql="select * from production";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
   <tr>
     <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['product_id'];?></td>
    <td>&nbsp;<?php echo $row['production_qty'];?></td>
	<td>&nbsp;<?php echo $row['production_date'];?></td>
      <td><a href="Production_delete.php?cpi=<?php echo $row['production_id'];?>"class="btn btn-danger" onClick="return confirm('You want to Delete');">Delete</a></td>
  
  
  </tr>
   <?php
  }
  ?>
  </tbody>
</table>
  </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>
 