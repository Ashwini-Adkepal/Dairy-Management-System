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
                                    <!-- <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Elements</li> -->
                                </ol>
                            </div>
                            <h4 class="page-title">Product Catalog</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Product Catalog</h4>
                                <p></p>
<?php
 include('../db_connect/dbconnect.php');
 $product_id=$_REQUEST['product_id'];
 $sql="select * from product_catalog where product_id='$product_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);

?>



<?php include('val.php'); ?>
<form action="product_catalog_update.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
  <p>&nbsp;</p>
  <table width="478" height="299" border="0" align="center">
    <tr>
      <td width="166">Product name </td>
      <td width="302"><input name="product_name" type="text" id="product_name" value=" <?php echo $row['product_name']; ?>" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Product description</td>
      <td><textarea name="product_description" id="product_description" class="validate[required] form-control"> <?php echo $row['product_description']; ?></textarea></td>
    </tr>
    <tr>
      <td>Product rate </td>
      <td><input name="product_rate" type="text" id="product_rate" value="<?php echo $row['product_rate']; ?>" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td>Product image </td>
      <td>      <input type="file" name="file" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"> <div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
    <p>&nbsp;</p>
  <p>&nbsp;  </p>
  <p>&nbsp;</p>
</form>
</div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>
		<?php include('val.php'); ?>