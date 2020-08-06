<?php
    session_start();
    $_SESSION['sun']="";
    $_SESSION['spwd']="";
    $ans=0;
    include "dbconfigure.php";
    if(verifyuser()){
    }else{
        echo "<script type='text/javascript'>document.location='index.php'</script>";
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
</head>
<body>
    <?php include "nav2.php" ?>
</body>
</html>