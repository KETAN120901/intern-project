<?php
include "../shared/authguard_vendor.php";
include "menu.html";
$orderid=$_GET['orderid'];
$userid=$_SESSION['userid'];
include_once "../shared/connection.php";



$status=mysqli_query($conn,"UPDATE orders
SET delivered = 'yes'
WHERE orderid = $orderid");
if($status){
    echo "delivered!";
    
}
else{
    echo "can not deliver";
    echo mysqli_error($conn);
}
?>