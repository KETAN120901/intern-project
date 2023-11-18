<?php
include "../shared/authguard_vendor.php";
include "menu.html";

$userid=$_SESSION['userid'];
$pid=$_POST['pid'];
$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];
$code=$_POST['code'];
$category=$_POST['category'];
$active=$_POST['active'];
include_once "../shared/connection.php";

if($_FILES['pdt_img']['name']==""){
    $status=mysqli_query($conn,"UPDATE product
SET name='$name',price='$price',details='$details',code='$code',category='$category',active='$active'
WHERE pid = '$pid'");
if($status){
    echo "updated successfully!";
    
}
else{
    echo "update failed";
    echo mysqli_error($conn);
}
die;
}
$imgpath="../shared/images/".$_FILES['pdt_img']['name'];
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$imgpath);

$status=mysqli_query($conn,"UPDATE product
SET name='$name',price='$price',details='$details',code='$code',category='$category',active='$active',imgpath='$imgpath'
WHERE pid = '$pid'");
if($status){
    echo "updated successfully!";
    
}
else{
    echo "update failed";
    echo mysqli_error($conn);
}
?>