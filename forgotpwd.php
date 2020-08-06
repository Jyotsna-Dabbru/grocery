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
      .resetform {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }
      
      .resetform h5 {
           color: #636363;
           height: 80px;
           background-color: #f2f3f7;
           padding: 10px;
           margin-bottom: 35px;
           text-align: center;
      }
      
      .resetform a {
            color: #5cb85c;
        } 
      
  </style>
</head>
<body>
    <?php include "nav1.php" ?>
    <form class="resetform" method="post">
       <h5>Enter your valid email before proceeding to password reset</h5>
       <br/>
        <label for="Email"><b>Email</b></label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" required="required">
        <br/>
        <input type="submit" value="Submit" class="btn btn-success form-control" name="submit">
        
        <div style="padding-top: 40px; display:block;">Already have an account? <a href="login.php">Login here</a></div>
        <div style="padding-top: 10px; display:block;">New user <a href="register.php">Create new account</a></div>
        
    </form>
    <div>
          <?php include "footer.php" ?>
      </div> 
</body>
</html>