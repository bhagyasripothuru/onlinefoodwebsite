<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Yummy Treats </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We Deliver.</h1>
                       <p>Flat 10% OFF on all your tasty foods.</p>
                       <a href="products.php" class="btn btn-danger">Order Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/chocolateicecream.avif" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Desserts</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/lemonade.avif" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Drinks</p>
                                    <p>Original ingredients from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/biryani.avif" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Biryanis</p>
                                   <p>Our exquisite collection of Biryani's.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a>Welcome World.</a>. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>