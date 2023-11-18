<?php
include "../shared/authguard_vendor.php";
include "menu.html";
$pid=$_GET['pid'];
$userid=$_SESSION['userid'];
include_once "../shared/connection.php";
$sql_obj=mysqli_query($conn,"select * from product where pid=$pid");
    $row=mysqli_fetch_assoc($sql_obj);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
body{
            background-color: #fcde67;
        }
        .bg-warning1{
            
            width: 30%;
            background-color: grey;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            color:black;
        }
        label{
            text-align:left;
            color:black;
        }
        form{
            margin:10px;
            padding:20px
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center">

    <form action="edit.php" method="post" enctype="multipart/form-data" class="w-50 bg-warning1 p-5">
         <h3 class="text-center">Update Product</h3>
         <input class="form-control mt-2" type="text" placeholder="Product id" name="pid" value="<?php echo $row['pid']; ?>" readonly>
        <input class="form-control mt-2" type="text" placeholder="Product Name" name="name" value="<?php echo $row['name']; ?>">
        <input class="form-control mt-2" type="text" placeholder="Product Price" name="price" value="<?php echo $row['price']; ?>" >

        <textarea class="form-control mt-2"  id="" cols="20" rows="5" placeholder="Product Details" name="details"><?php echo $row['details']; ?></textarea>

        <input class="form-control mt-2" type="text" placeholder="Product Code" name="code" value="<?php echo $row['code']; ?>">
        <label class=" mb-2 mt-2" >Category</label>

        <select class="form-control "  id="category" name="category" value="<?php echo $row['category']; ?>">
            <option  <?php if ($row['category'] === 'Electronics') echo 'selected'; ?>>Electronics</option>
            <option <?php if ($row['category'] === 'Home Applicances') echo 'selected'; ?>>Home Applicances</option>
            <option <?php if ($row['category'] === 'Fashion') echo 'selected'; ?>>Fashion</option>
            <option <?php if ($row['category'] === 'Sports') echo 'selected'; ?>>Sports</option>
        </select>
        <label class="  ms-2 mt-2" >Active</label>
        <select class="form-control mt-2"  id="active" name="active" value="<?php echo $row['active']; ?>">
            <option <?php if ($row['active'] === 'Yes') echo 'selected'; ?>>Yes</option>
            <option <?php if ($row['active'] === 'No') echo 'selected'; ?>>No</option>
        </select>
        <input type="file" class="form-control mt-2" accept=".jpg,.png" name="pdt_img">

        <div class="text-center mt-3">
            <button class="btn btn-success">Update</button>
        </div>
    

    </form>
    </div>
    
</body>
</html>
