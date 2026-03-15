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
                            <h4 class="page-title">Delivery and Installation</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Delivery and Installation</h4><P></P>
<?php
 include('../db_connect/dbconnect.php');
 $delivery_installation_id=$_REQUEST['delivery_installation_id'];
 $sql="select * from delivery_installation where delivery_installation_id='$delivery_installation_id'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);

?>

<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="delivery_installation_update.php">
<input type="hidden" name="delivery_installation_id" value="<?php echo $row['delivery_installation_id']; ?>">
<table width="555" height="300" border="0" align="center">
    <tr>
      <td width="173">Customer Order id </td>
      <td width="294"><p>

        <select name="cust_order_id" id="cust_order_id" class="validate[required]">
          <option value="" >Select customer</option>
          <?php
	  //include('../db_connect/dbconnect.php');
	  $sql1="select * from customer_order";
	  $res1=mysqli_query($conn,$sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
          <option value="<?php echo $row1['cust_order_id']; ?>" <?php if($row1['cust_order_id']==$row['cust_order_id']) { ?> selected <?php } ?> ><?php echo $row1['cust_order_id']; ?></option>
          <?php
	  }
	  ?>
        </select>
      </p>
      </td>
    </tr>
    <tr>
      <td>Delivery description </td>
      <td><textarea name="delivery_description" id="delivery_description" class="validate[required] form-control"><?php echo $row['delivery_description']; ?></textarea></td>
    </tr>
    <tr>
      <td>Delivery status</td>
      <td><input name="delivery_status" type="text" id="delivery_status1" value="<?php echo $row['delivery_status']; ?>" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Delivery date </td> 
      <td><input name="dat" type="Date" id="dat" value="<?php echo $row['delivery_date']; ?>" class="validate[required,custom[date]]form-control"></td>
    </tr>
    <tr>
      <td height="79" colspan="2"><div align="center">
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