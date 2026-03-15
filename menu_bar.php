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
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="product_catlogs.php"><i class="fa fa-fw fa-search"></i> Products</a>
  <a href="vetenory_details.php"><i class="fa fa-fw fa-search"></i> Vetenory Details</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="customer_details_form.php"><i class="fa fa-fw fa-user"></i> New Registration</a>
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
</div>
        </header>
        <!-- End Navigation Bar-->