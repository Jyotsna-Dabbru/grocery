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
      .loginform {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        } 
      
      .loginform h1 {
          height: 50px;
          background-color: #f2f3f7;
      }
      
      .loginform a {
            color: #5cb85c;
        } 
      
  </style>
</head>
<body>
    <?php include "nav1.php" ?>
    <div class="loginform"  style="margin-top : 30px">
        <h1 class="text-center" style="font-family : 'Monotype Corsiva';color:#035318"><b>HEY, THERE</b></h1>
        <br/>
        <form method="post">
            <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" required="required">
                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" required="required">
                <br/>
                <input type="submit" value="Login" class="btn-success form-control" style="width : 100%" name="login">
                <br/>
                <input type="checkbox" checked="checked" name="remember"><b>Remember Me</b>
            </div>
                <div class="container" style="background-color:#f1f1f1; height : 80px;margin-top:10px;">
                    <button  style="margin-top:25px" type="button" class="btn-danger">Cancel</button>
                    <span style="float:right; padding-top: 25px;">| Don't have an account? <a href="forgotpwd.php">Register now</a></span>
                    <span style="float:right; padding-top: 25px;">Forgot <a href="forgotpwd.php">Password?</a> | </span>
            </div>
        </form>
    </div>
    <div>
        <?php include "footer.php" ?>
    </div> 
</body>
</html>   