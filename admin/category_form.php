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
                            <h4 class="page-title">Category</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Product Category</h4>
                                <p></p>

<form action="category_insert.php" id="formID" method="post"  name="form1">
  <table width="677" height="351" border="0" align="center">
    <tr>
      <td width="259">Category Name </td>
      <td width="408"><input name="category_name" type="text" id="category_name" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Category Description</td>
      <td><textarea name="category_description" id="category_description" class="validate[required] form-control"></textarea></td>
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