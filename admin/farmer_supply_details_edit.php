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
<?php
include('../db_connect/dbconnect.php');
$farmer_supply_id=$_REQUEST['farmer_supply_id'];
$sql="select * from farmer_supply_details where farmer_supply_id='$farmer_supply_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>


<form name="form1" id="formID" method="post" action="farmer_supply_details_update.php">
<input type="hidden" name="farmer_supply_id" value="<?php echo $row['farmer_supply_id'];?>">
<table width="497" height="495" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="189">Select Farmer</td>
        <td width="308"><select name="ven_id" id="ven_id" class="form-control" required>
          <option value="">select farmer name</option>
          <?php
        $sql2="select * from farmer_details";
        $res2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_array($res2))
        {
		?>
          <option value="<?php echo $row2['farmer_id'];?>" <?php if($row2['farmer_id']==$row['farmer_id']) { ?> selected <?php } ?>><?php echo $row2['farmer_name'];?></option>
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
        $sql3="select * from product_catalog";
        $res3=mysqli_query($conn,$sql3);
        while($row3=mysqli_fetch_array($res3))
        {
		?>
          <option value="<?php echo $row3['product_id'];?>" <?php if($row3['product_id']==$row['product_id']) { ?> selected <?php } ?>><?php echo $row3['product_name'];?></option>
          <?php
		}
        ?>
        </select></td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td><input name="quantity" type="text" id="quantity" class="form-control validate[required]" value="<?php echo $row['quantity'];?>"></td>
      </tr>
      <tr>
        <td>Purchase_rate</td>
        <td><input name="purchase_rate" type="text" id="purchase_rate" class="form-control validate[required,custom[onlyNumber]]" value="<?php echo $row['purchase_rate'];?>"></td>
      </tr>
      <tr>
        <td>Supply_date</td>
        <td><input name="date" type="date" id="date" class="form-control validate[required,custom[date]]" value="<?php echo $row['supply_date'];?>"></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><input name="status1" type="text" id="status1" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['status'];?>"></td>
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
