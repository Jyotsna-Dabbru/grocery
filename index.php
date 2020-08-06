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
      <style>
      .carousel-inner{
          height: 500px;
      } 
      .container1{
          background-color: antiquewhite;
      }
 </style>
</head>
<body>
    <?php include "nav1.php" ?>
    <div class="container-fluid" style="height:10px">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
             <div class="carousel-inner">
                 <div class="carousel-item active">
                    <img src="images/groc1.png" alt="groc1" style="width:100%;">
                        <div class="carousel-caption">
                          <h3>All Grocery</h3>
                          <p>Corona can stop but not Groceries</p>
                        </div>
                 </div>
                 <div class="carousel-item">
                    <img src="images/groc2.jpg" alt="groc2" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Sanitised Basket</h3>
                      <p>Bags which are sanitised</p>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <img src="images/groc3.jpg" alt="groc3" style="width:100%;">
                        <div class="carousel-caption">
                          <h3>Safe Touch</h3>
                          <p>Sanitised staffs and customers</p>
                        </div>
                 </div>
              </div>
    
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
        <div class="container">       
        <div class="container1" style="margin-top: 580px">
              <h2 class="fontsize">Grocery at Home – online grocery store </h2>
            <p>Did you ever imagine that the freshest of <b>fruits and vegetables</b>, top quality pulses and food grains, <b>dairy products</b> and hundreds of branded items could be handpicked and delivered to your home, all at the click of a button? India’s first comprehensive online megastore, groceryathome.com, brings a whopping 20000+ products with more than 1000 brands, to over 4 million happy customers. From household cleaning products to beauty and makeup, bigbasket has everything you need for your daily needs. 
            groceryathome.com is convenience personified
            We’ve taken away all the stress associated with shopping for daily essentials, and you can now order all your household products and even buy groceries online without travelling long distances or standing in serpentine queues. Add to this the convenience of finding all your requirements at one single source, along with great savings, and you will realize that Grocery at Home- India’s largest online supermarket, has revolutionized the way India shops for groceries. Online grocery shopping has never been easier. Need things fresh? Whether it’s fruits and vegetables or dairy and meat, we have this covered as well! Get fresh eggs, meat, fish and more online at your convenience. 
            Hassle-free Home Delivery options</p>
            <p>We deliver to 25 cities across India and maintain excellent delivery times, ensuring that all your products from groceries to snacks <b>branded foods</b> reach you in time. </p> 
            <ul>
            <li> Slotted Delivery: Pick the most convenient delivery slot to have your grocery delivered. From early morning delivery for early birds, to late-night delivery for people who work the late shift. </li> 
            <li> Express Delivery: This super useful service can be availed by customers in cities like Bangalore, Mumbai, Pune, Chennai, Kolkata, Hyderabad and Delhi-NCR in which we deliver your orders to your doorstep in 90 Minutes. </li>
            <li> BH Specialty stores: Missed out on buying that essential item from your favorite neighborhood store for tonight’s party? We’ll deliver it for you! From bakery, sweets and meat to flowers and chocolates, we deliver your order in 90 minutes, through a special arrangement with a nearby specialty store, verified by us. </li>
            </ul>

          </div>          
      </div>
      <div>
          <?php include "footer.php" ?>
      </div>
      
</body>
</html>