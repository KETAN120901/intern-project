<?php
include "../shared/authguard_vendor.php";
include "menu.html";
$pid=$_GET['pid'];
$userid=$_SESSION['userid'];
include_once "../shared/connection.php";



$status=mysqli_query($conn,"delete from product where pid=$pid");
if($status){
    echo "Removed from the  products!";
    header("location:home.php");
}
else{
    echo "can not remove from the products";
    echo mysqli_error($conn);
}
?>