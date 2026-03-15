<?php
include('../db_connect/dbconnect.php');
$farmer_id=$_POST["ven_id"];
$product_id=$_POST["pro_id"];
$quantity=$_POST["quantity"];
$purchase_rate=$_POST["purchase_rate"];
$supply_date=$_POST["date"];

$sql1="select * from stock_details where product_id='$product_id'";
$res1=mysqli_query($conn,$sql1);
if($row1=mysqli_fetch_array($res1))
{
$stock=$row1['stock']+$quantity;

$sql="insert into farmer_supply_details values(null,'$farmer_id','$product_id','$quantity','$purchase_rate','$supply_date','Supply')";
mysqli_query($conn,$sql);

$sql2="update  stock_details set stock='$stock' where product_id='$product_id'";
mysqli_query($conn,$sql2);

}
else
{
$sql="insert into farmer_supply_details values(null,'$farmer_id','$product_id','$quantity','$purchase_rate','$supply_date','Supply')";
mysqli_query($conn,$sql);

$sql2="insert into stock_details values(null,'$product_id','$quantity')";
mysqli_query($conn,$sql2);
}
?>
<script>
alert("values are inserted");
document.location="farmer_supply_details_view.php"
</script>
