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
    <?php include "header.php"; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>


</head>
<body>
    <?php 
    include "nav2.php"; 
    echo "<b style='color:green; text-transform:capitalize'>$name</b>";
    ?>
    <div class="container" style="margin-top : 50px">
        <h1 class="text-center" style="font-family:'monotype corsiva'; color:#e6120e">View Product</h1><br/>
        <?php
            $query="SELECT * FROM product";
            $rs=my_select($query);
            echo "<table class='table table-hover' id='example'>";
            echo "<thead style='background-color: green; color : white'>";
            echo "<tr>";
            echo "<th>Product ID</th>";
            echo "<th>Product Name</th>";
            echo "<th>Product Image</th>";
            echo "<th>Product category</th>";
            echo "<th>Price</th>";
            echo "<th>Product Description</th>";
            echo "<th>Action</th>";
        
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row=mysqli_fetch_array($rs)){
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                //echo "<td>$row[2]</td>";
                echo "<td><img src=$row[2] width='100' height='100'</td>";
                //echo "<td>$row[3]</td>";
                $query1="SELECT * FROM category WHERE id=$row[3]";
                $rs1=my_select($query1);
                if($row1=mysqli_fetch_array($rs1)){
                    echo "<td>$row1[1]</td>";
                }
                echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "<td><a href='deleteproduct.php?id=$row[0]' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        ?>
        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                } );
            } );
        </script>
    </div>
</body>
</html>