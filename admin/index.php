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
    <?php include "nav1.php" ?>
    <div class="container" style="margin-top : 50px">
        <h1 class="text-center" style="font-family : 'Monotype Corsiva';color:red">Admin Login</h1>
        <form method="post">
            <div class="form-group">
                <label><b>Admin Name</b></label>
                <input type="text" class="form-control" placeholder="Enter your name" name="adminname">
                <label><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
                <br/>
                <input type="checkbox" name="rem"><b>Remember Me</b>
                <br/><br/>
                <input type="submit" value="Login" class="btn-primary" style="width : 150px" name="login">
            </div>
        </form>
    </div>
</body>
</html>
<?php
    session_start();
    include "dbconfigure.php";
  if(isset($_POST["login"])){
      $adminname=$_POST["adminname"];
      $password=$_POST["password"];
  
      $query="SELECT COUNT(*) FROM admin where adminname='$adminname' and password='$password'";
      $ans=my_one($query);
      //echo $ans;
      if($ans==1){
          $_SESSION['sun']=$adminname;
          $_SESSION['spwd']=$password;
          echo '<script type="text/javascript">document.location="adminhome.php"</script>';
      }else{
          echo '<script>alert("Invalid Credential Username or Password")</script>';
      }
  
  
  
  
  }
    
    
?>