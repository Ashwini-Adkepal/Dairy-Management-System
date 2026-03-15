<style>

/* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

</style>
<div class="navbar">
  <a class="active" href="customer_details_edit.php"><i class="fa fa-fw fa-home"></i> My Profile</a>
  <a href="product_catlogs.php"><i class="fa fa-fw fa-search"></i> Products </a>
  <a href="cart.php"><i class="fa fa-fw fa-envelope"></i> Cart 
   <?php
  include('../db_connect/dbconnect.php');
$uname=$_SESSION['uname'];
$sql23="select count(order_status) as cnt from customer_order co,customer_details c where co.customer_id=c.customer_id and c.email_id='$uname' and co.order_status='Pending'";
$res23=mysqli_query($conn,$sql23);
  if($row23=mysqli_fetch_array($res23))
  {
  ?>
  <font color="#FF0000">(<?php echo $row23['cnt'];?>)</font>
  <?php
  }
  ?>
  </a>
  <a href="customer_order_view.php"><i class="fa fa-fw fa-user"></i> Order Status</a>
  <a href="change_password.php"><i class="fa fa-fw fa-user"></i> Change Password</a>
  <a href="../logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>

