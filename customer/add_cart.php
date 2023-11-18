<?php
include "../shared/authguard_customer.php";
include "menu.html";
$pid=$_GET['pid'];
$userid=$_SESSION['userid'];
$name=$_GET['name'];
$price=$_GET['price'];
$details=$_GET['details'];
$imgpath=$_GET['imgpath'];
$code=$_GET['code'];
$category=$_GET['category'];
$uploaded_by=$_GET['uploaded_by'];
include_once "../shared/connection.php";



$status=mysqli_query($conn,"insert into cart1(userid,pid,name,price,details,category,imgpath,code,uploaded_by) values('$userid','$pid','$name','$price','$details','$category','$imgpath','$code','$uploaded_by')");
if($status){
    echo "Added to cart!";
    header("location:view_cart.php");
}
else{
    echo "Added to cart Failed";
    echo mysqli_error($conn);
}
?>