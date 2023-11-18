<?php
include "../shared/authguard_customer.php";
include "menu.html";
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
       width:100%;
       height:200px;
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
   </style>
</head>
<body>
</body>
</html>

<?php

    include_once "../shared/connection.php";
     
    $sql_obj=mysqli_query($conn,"select * from  orders  where userid=$_SESSION[userid] AND delivered='yes';");
    
    while($row=mysqli_fetch_assoc($sql_obj)){        
        //print_r($row);
        echo "<div class='pdt-card'>
                <div class='name'>$row[name]</div>
                <div class='price'>$row[price]</div>    
                <div class='code'>$row[code]</div>            
                <img class='pdt-img' src='$row[imgpath]'>   
                <div class='category'>$row[category]</div>                                 
                <div class='details'>$row[details]</div>
                
            </div>";
        
    }
    

?>