<?php include('meta_tag.php'); ?>

<?php include('top_bar.php'); ?>

            <!-- MENU Start -->
             <?php include('menu_bar.php'); ?>


            <div class="container-fluid">

                <!-- Page-Title -->
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Products</h4>
                        </div>
						<h3>Categorits : </h3>
						  <?php
  include('../db_connect/dbconnect.php');

$sql="select * from category";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>

						<a href="product_catlogs_next.php?category_id=<?php echo $row['category_id'];?>" class="btn btn-primary"><?php echo $row['category_name'];?></a>&nbsp;&nbsp;&nbsp;
						<?php
						}
						?>
						</div>
				 
                    <p>&nbsp;</p>
                     
  
               </div>
				
                <!-- end page title end breadcrumb -->
                <div class="row">
				
				<?php
				  include('../db_connect/dbconnect.php');

$sql="select * from product_catalog";
$res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {

?>
                    <div class="col-md-6 col-lg-6 col-xl-3">            
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="../images/<?php echo $row['product_image']; ?>"  alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-20 mt-0"><?php echo $row['product_name']; ?></h4>
                                <p class="card-text"><?php echo $row['product_description']; ?></p>
								  <h4 class="card-title font-20 mt-0">Rs. <?php echo $row['product_rate']; ?></h4>
								<a href="product_catalog_view.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-primary waves-effect waves-light">Buy Now</a>
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