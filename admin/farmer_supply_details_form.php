<?php include('meta_tag.php'); ?>

<?php include('top_bar.php'); ?>

            <!-- MENU Start -->
             <?php include('menu_bar.php'); ?>
             <style type="text/css">
<!--
.style1 {font-size: large}
.style2 {font-size: large}
-->
             </style>
             


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
                          <h4 class="page-title">&nbsp;</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 align="center" class="mt-0 header-title style1">&nbsp;</h4>
                                <h4 align="center" class="mt-0 header-title style1">Farmer Supply Details</h4>
                                <p></p>
                                <p class="style2"></p>
                                <p class="style2"></p>
  <form name="form1" id="formID" method="post" action="farmer_supply_details_insert.php">
    <table width="481" height="495" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="168">Select Farmer</td>
        <td width="313"><select name="ven_id" id="ven_id" class="form-control"required>
          <option value="">select farmer name</option>
		  <?php
        include('../db_connect/dbconnect.php');
        $sql="select * from farmer_details";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res))
        {
		?>
		<option value="<?php echo $row['farmer_id'];?>"><?php echo $row['farmer_name'];?></option>
		<?php
		}
        ?>
                </select></td>
      </tr>
      <tr>
        <td>Select Product</td>
        <td><select name="pro_id" id="pro_id" class="form-control" required>
          <option value="">select product name</option>
		  <?php
        include('../db_connect/dbconnect.php');
        $sql="select * from product_catalog";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res))
        {
		?>
		<option value="<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?></option>
		<?php
		}
        ?>
        </select></td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td><input name="quantity" type="quantity" id="quantity" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td>Purchase_rate</td>
        <td><input name="purchase_rate" type="text" id="purchase_rate" class="form-control validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td>Supply_date</td>
        <td><input name="date" type="date" class="form-control validate[required,custom[date]]" id="date"></td>
      </tr>
      
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          <input name="reset" type="reset" id="reset" value="Reset" class="btn btn-danger">
        </div></td>
      </tr>
    </table>
  </form>
 </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include('footer.php'); ?>
		<?php include('val.php'); ?>
