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
                            <h4 class="page-title">Installation Details</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Installation Details</h4>
                                <p></p>
<form name="form1" id="formID" method="post" action="installation_insert.php">
  <table width="754" height="262" border="0" align="center">
    <tr>
      <td width="304">Product id </td>
      <td width="440"><select name="product_id" id="product_id" class="validate[required] form-control">
	  <option value="" >Select product</option>
	  <?php
	  include('../db_connect/dbconnect.php');
	  $sql1="select * from product_catalog";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['product_id']; ?>"><?php echo $row1['product_name']; ?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Installation Description </td>
      <td><textarea name="installation_description" id="installation_description" class="validate[required] form-control"></textarea></td>
    </tr>
    <tr>
      <td>Installation Charges </td>
      <td><input name="installation_charges" type="text" id="installation_charges" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary"> 
          <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
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