<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
   <?php
        include "nav2.php";
    ?>
    <div class="container" style="margin-top:40px">
       <h1 class="text-center" style="font-family:'Monotype Corsiva';color:red">Add Product</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label><b>Product Name</b></label>
                <input type="text" name="name" class="form-control" placeholder="Enter product name">
                <br/>
                <label><b>Product Image</b></label>
                <input type="file" name="image" class="form-control">
                <br/>
                <label><b>Product Category</b></label>
                <input type="text" name="category" class="form-control" placeholder="Enter product category">
                <br/>
                <label><b>Product Price</b></label>
                <input type="text" name="price" class="form-control" placeholder="Enter product price">
                <br/>
                <label><b>Product Description</b></label>
                <textarea name="description" class="form-control"></textarea>
                <br/>
                <input type="submit" name="submit" value="Submit" class="btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
<?php
    include "dbconfigure.php";
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"uploadimage/".$_FILES['image']['name']);
        $image="uploadimage/".$_FILES['image']['name'];
        $category=$_POST['category'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        
        //echo $name;
        //echo $category;
        //echo $price;
        //echo $description;
        //echo $image;
        
        $query="INSERT INTO product(name,image,category,price,description) VALUES('$name','$image','$category','$price','$description')";
        $n=my_iud($query);
        if($n==1){
            echo '<script>alert("Product Added Successfully");</script>';
        }else{
            echo '<script>alert("Something Went Wrong");</script>';
        }
    }
?>














