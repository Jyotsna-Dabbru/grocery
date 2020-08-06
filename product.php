<?php
    session_start();
    include "dbconfigure.php";
    if(verifyuser()){
        //echo "hello";
        $name=$_SESSION['sun'];
        
    }else{
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }
?>



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
  <style>
      
  </style>
</head>
<body>
    <?php include "nav1.php" ?>
    <?php include "nav2.php" ?>
    <div class="container" style="margin-top:50px; margin-left:280px;">
	<div class="row" >
		<div class="col-md-4" style=" float:left">
			<img src="images/tresemme.jpg" height="300" width="300" class="rounded-circle">
		</div>
		<div class="col-md-4" style=" float:right">
		    <img src="images/wow.jpg" height="300" width="300" class="rounded-circle">
		</div>
		<div class="col-md-4" style=" float:right">
			<img src="images/argan.jpg" height="300" width="300" class="rounded-circle">
        </div>
	</div>
	</div>
	<br/>
	<div class="container" style="margin-left:280px">
	<div class="row">
		<div class="col-md-4">
			<div class="text-success"  style=" float:left"><h4>Tresemme Shampoo(₹ 349.00)</h4>
            <a href="category.php" class="btn btn-success" style=" float:right" name="buy1">Add to Cart</a></div>
		</div>
		<div class="col-md-4">
		    <div class="text-success"  style=" float:left"><h4>WOW Shampoo(₹ 529.00)</h4>
			<a href="#" class="btn btn-success" style=" float:right" name="buy2">Add to Cart</a></div>		
        </div>
		<div class="col-md-4">
			<div class="text-success"  style=" float:left"><h4>Argon Oil Shampoo(₹ 479.00)</h4>
			<a href="#" class="btn btn-success" style=" float:right" name="buy3">Add to Cart</a></div>
        </div>
	</div>
    </div>
    <br/>
       <div class="container text-success" style="margin-top:50px; margin-left:280px;">
	    <div class="row col-md-4">
        <?php
            $query="SELECT * FROM product";
            $rs=my_select($query);
           
            while($row=mysqli_fetch_array($rs)){
                    echo "<img src='admin/$row[2]' width='300' height='300' class='rounded-circle' "; 
                    $query1="SELECT * FROM category WHERE id=$row[3]";
                    $rs1=my_select($query1);
                    if($row1=mysqli_fetch_array($rs)){
                    }
                    
                    echo "<td><h4>$row[5]</h4></td>";
                    echo "<td><h4>(₹ $row[4].00)</h4></td>";
                    echo "<td><a href='#' class='btn btn-success float:right'>Add to Cart</a></td>";
                
            }
        ?>
        </div>
    </div>
    
    <div>
        <?php include "footer.php" ?>
    </div> 
</body>
</html>