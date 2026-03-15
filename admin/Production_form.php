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
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#"></a></li>
                                    <li class="breadcrumb-item"><a href="#"></a></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
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
<?php
include('val.php');
?>
<form name="formID"  id="formID" method="post" action="Production_insert.php">
  <div align="center">
   <table width="699" class="table table-bordered" id="datatable">
      <tr>
        <td colspan="2"><div align="center">
          <h1>Production</h1>
        </div></td>
      </tr>
       
    <tr>
        <td><h2>Product Name </h2></td>
        <td><select name="product_id" id="product_id" class="validate[required] form-control">
          <option value="select">select</option>
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
        </select></td>
      </tr>
      <tr>
        <td><h2>Production quantity</h2></td>
        <td><input name="production_qty" type="text" id="production_qty" class="validate[required,custom[onlyNumber]] form-control"></td>
      </tr>
      <tr>
        <td><h2>Production date </h2></td>
        <td><input name="production_date" type="Date" id="production_date" class="validate[required,custom[date]] form-control"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
        </div></td>
      </tr>
    </table>
  </div>
</form>
    </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>