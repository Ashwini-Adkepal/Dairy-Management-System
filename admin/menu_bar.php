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
  <a class="active" href="product_catalog_view.php"><i class="fa fa-fw fa-home"></i> Products</a>
  <a href="customer_order_view.php"><i class="fa fa-fw fa-search"></i> Order Details</a>
  <a href="customer_details_view.php"><i class="fa fa-fw fa-envelope"></i>Customer</a>
  <a href="customer_payment_view.php"><i class="fa fa-fw fa-user"></i>Payments</a>
  <a href="farmer_details_view.php"><i class="fa fa-fw fa-user"></i>Farmer</a>
   <a href="farmer_supply_details_view.php"><i class="fa fa-fw fa-user"></i>Farmer Supply</a>
   <a href="vetenory_details_view.php"><i class="fa fa-fw fa-user"></i>Vetenory Details</a>
  
  <a href="../logout.php"><i class="fa fa-fw fa-user"></i>Logout</a>
</div>

 
        </header>
        <!-- End Navigation Bar-->