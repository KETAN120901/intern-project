<?php
include "../shared/authguard_customer.php";
include "menu.html";
$cartid=$_GET['cartid'];
$userid=$_SESSION['userid'];
include_once "../shared/connection.php";



$status=mysqli_query($conn,"delete from cart1 where cartid=$cartid");
if($status){
    echo "Removed from the  cart!";
    header("location:view_cart.php");
}
else{
    echo "can not remove from the cart";
    echo mysqli_error($conn);
}
?>