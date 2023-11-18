<?php
include "../shared/authguard_vendor.php";
include "menu.html";
$pid=$_GET['pid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .pdt-card{
        width:250px;
        
        display:inline-block;
        margin:10px;
        border:2px solid grey;
        padding:10px;
        background-color:violet;
        
    }
    .pdt-img{
       width:250px;
       height:250px;
    }
    .price{
        font-size:24px;
    }
    .price::before{
        content:"Rs."
    }
    .name{
        font-size:22px;
        font-weight:bold;
        color:blue;
    }
    .product-container{
        display:flex;
        flex-direction:column;
        align-items:center;
        text-align:center;
    }
    .img-container{
        display:flex;
        font-size:24px;
        color:blue;
        border:2px solid grey;
        padding:20px;
        margin:10px;
        width:40%;
        justify-content:space-around;
        align-items:center;
        background-color:violet;
    }
   </style>
</head>
<body>
</body>
</html>

<?php

    include_once "../shared/connection.php";
     
    $sql_obj=mysqli_query($conn,"select * from product where pid='$pid'");
    
    while($row=mysqli_fetch_assoc($sql_obj)){        
        //print_r($row);
        echo "<div class=product-container><div class='img-container'><img class=pdt-img src='$row[imgpath]'><div class='content'>$row[name]<br>Rs.$row[price]<br>$row[code]<br>$row[category]<br>$row[details]</div></div></div>";
        
    }
    

?>