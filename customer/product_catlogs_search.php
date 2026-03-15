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
                            <h4 class="page-title">Products</h4>
                        </div>
						<a href="product_catlogs_next.php?pt=Sweet" class="btn btn-primary">Sweet</a>&nbsp;&nbsp;&nbsp;
						<a href="product_catlogs_next.php?pt=Masala" class="btn btn-primary">Masala</a>
						<p>&nbsp;</p>
						<div align="right">
						<form name="form1" method="post" action="product_catlogs_search.php">
                      Select Product : 
                      <select name="product_id" id="product_id" class="validate[required]">
                        <option value="select">Select</option>
                        <?php
 include('../db_connect/dbconnect.php');
  $sql2="select * from product_catalog";
  $res2=mysqli_query($conn,$sql2);
  while($row=mysqli_fetch_array($res2))
  {
  ?>
                        <option value="<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?></option>
                        <?php
	   }
	   ?>
                      </select>
					   <input type="submit" name="Submit" value="Submit">
                    </form>
						</div>
                    </div>
				 
                    <p>&nbsp;</p>
                     
  
               </div>
				
                <!-- end page title end breadcrumb -->
                <div class="row">
				
				<?php
				  include('../db_connect/dbconnect.php');
$product_id=$_POST['product_id'];
$sql="select * from product_catalog where product_id='$product_id'";
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