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
    <form style="background: #fff;margin-top:35px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 product-img">
                <img src="images/tresemme.jpg" style="width: 100%">
            </div>
            <div class="col-7">
                <div class="text-top" style="height: 200px">
                    <h3>Tresemme Combo -  </h3>
                    <div class="text-center">
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal" style="margin-top: 49px;margin-left: 12px;">Buy Now</button>
                    </div>
                </div>
                <div class="text-content">
                    <h4>Description</h4>
                    <hr>
                    <b>₹ 349.00 (₹ 60.17 / 100 ml) Fulfilled FREE Delivery on orders over ₹ 499.00 </b>
                    <p>TRESemme Keratin Smooth Shampoo helps restore keratin and nourishes each strand to leave hair gorgeously straighter, shinier and more manageable.</p>                                   
                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f2f3f7;">
              <h4>Fill details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="">
                <textarea placeholder="Enter Address" name="address" required></textarea><br/><br/>
              <input type="number" placeholder="Enter Pincode" name="pin" required><br/><br/>
              <label><input type="radio" name="radio1" checked>Cash On Delivery</label><br/><br/>
              <label><input type="radio" name="radio1" >Card Payment</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Place Order</button>
            </div>
          </div>
    </div>
  </div>
  <div>
        <?php include "footer.php" ?>
 </div> 
</body>
</html>