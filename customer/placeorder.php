<?php
include "../shared/authguard_customer.php";
include "menu.html";
include_once "../shared/connection.php";
$address=$_POST['address'];
$userid=$_SESSION['userid'];
$sql_obj=mysqli_query($conn,"select * from cart1 where userid=$_SESSION[userid]");
    
    while($row=mysqli_fetch_assoc($sql_obj)){        
        //print_r($row);
        $status1=mysqli_query($conn,"insert into orders(userid,pid,name,price,details,category,imgpath,code,uploaded_by,address) values('$userid','$row[pid]','$row[name]','$row[price]','$row[details]','$row[category]','$row[imgpath]','$row[code]','$row[uploaded_by]','$address')");
if($status1){
    echo "order placed Successfully!";
    echo "<br>";
    
}
else{
    echo "order Failed";
    echo mysqli_error($conn);
}
$status2=mysqli_query($conn,"delete from cart1 where cartid=$row[cartid]");
if($status2){
    echo "Removed from the  cart!";
    echo "<br>";
}
else{
    echo "can not remove from the cart";
    echo mysqli_error($conn);
}

        
    }
?>