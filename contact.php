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
      .contact_form h3{
          color: #636363;
           height: 80px;
           background-color: #f2f3f7;
           padding: 20px;
           margin: 30px 30px;
           text-align: center;
      }
  </style>
</head>
<body>
    <?php include "nav1.php" ?>
    <div class="container">
        <form method="post" class="contact_form">
            <h3>Contact us now</h3>
        </form>
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="float-right">
                        <br/>SAMBALPUR BRANCH<br/>
                        <h4>FIND US HERE</h4>
                        
                        <div class="z-depth-1-half map-container" style="height: 1000px width:1000px">
                          <iframe src="https://maps.google.com/maps?q=sambalpur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <br/><h4>CONTACT OUR TEAM</h4><br/>
                <div class="container">
                <form>
                    <input type="text" placeholder="Name"/><br/><br/>
                    <input type="email" placeholder="Email"/><br/><br/>
                    <input type="tel" placeholder="Phone Number"/><br/><br/>
                    <textarea class="form-control" placeholder="Query"></textarea><br/><br/>
                    <input type="submit" class="btn-danger" value="SUBMIT NOW"/>
                </form>
                    </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-6">
                <div class="logo">
                    <a href="#"><img src="images/fb.png" height="30" width="30"></a>
                    <a href="#"><img src="images/insta.png" height="30" width="30"></a>
                    <a href="#"><img src="images/linkedin.png" height="30" width="30"></a>
                    <a href="#"><img src="images/skype.png" height="30" width="30"></a>
                    <a href="#"><img src="images/twitter.png" height="30" width="30"></a>
                </div>
            </div>
            </div>
    </div>
    <div>
       <?php include "footer.php" ?>
    </div> 
</body>
</html>
