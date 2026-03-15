
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
                            <h4 class="page-title">Vetenory Details</h4>
                        </div>
                    </div>
                </div>
				
                <!-- end page title end breadcrumb -->
                <div class="row">
				<?php
				  include('db_connect/dbconnect.php');

$sql="select * from vetenory_details";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {

?>
                    <div class="col-md-6 col-lg-6 col-xl-3">            
                        <!-- Simple card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title font-20 mt-0">Doctor Name : <?php echo $row['doctor_name']; ?></h4>
                                <p class="card-text">City : <?php echo $row['vetenory_city']; ?></p>
								  <p class="card-text">Address :<?php echo $row['vetenory_address']; ?></p>
								  <p class="card-text">Contact No :<?php echo $row['vetenory_contact_no']; ?></p>
								    <p class="card-text">Email ID :<?php echo $row['email_id']; ?></p>
                            </div>
                        </div>            
                    </div><!-- end col -->

                
<?php
}
?>
 

           


         

              
                <!-- end row -->



          
                 
                    
                    
        <!-- end wrapper -->


        <!-- Footer -->
       <?php include('footer.php'); ?>

    </body>
</html>