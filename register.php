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
        .signup-form {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }
        .signup-form h2 {
            color: #636363;
            margin-bottom: 35px;
            position: relative;
            text-align: center;
        }

        .signup-form form {
            background: #f2f3f7;   
            padding: 30px;
        }

        .signup-form form a {
            color: #5cb85c;
        }   
    </style>
</head>
<body>
    <?php include"nav1.php" ?>
    
    <div class="signup-form">
        <form  method="post">
            <h2>Register</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="firstname" placeholder="First Name" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required"></div>
                </div>        	
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>        
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
            <div class="text-center">Already have an account? <a href="login.php">Login</a></div>
        </form> 
    </div>
    <div>
        <?php include "footer.php" ?>
    </div> 
</body>
</html>