<?php 
  $active = 'home';
  include("includes/db.php");
  include("functions/functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="no-cache">
  <title>X.o.X Store</title>
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <!-- Menu Begin -->
  <div id="top">

    <div class="container">
      <!-- Welcome Begin -->
      <div class="col-md-6 offer">

        <a href="#" class="btn btn-success btn-sm">Welcome</a>

        <a href="tabs/checkout.php">CheckOut</a>

      </div>
      <!-- Welcome Finish -->

      <!-- Menu-content Begin -->
      <div class="col-md-6">

        <ul class="menu">

          <li>

            <a href="tabs/customer_register.php">Register</a>

          </li>

          <li>

            <a href="customer_area/my_account.php">My Account</a>

          </li>

          <li>

            <a href="tabs/cart.php">Go To Cart</a>

          </li>

          <li>

            <a href="tabs/checkout.php">Login</a>

          </li>
        </ul>
      </div>
      <!-- Menu-Content Finish -->
    </div>
  </div>
  <!-- Menu Finish -->

  <!-- Navbar Begin -->
  <div id="navbar" class="navbar navbar-default">

    <div class="container">
      <!-- Navbar-Header Begin -->
      <div class="navbar-header">

        <a href="index.php" class="navbar-brand home">

          <img src="images/ecom-store-logo.png" alt="Php_Store Logo" class="hidden-xs">
          <img src="images/ecom-store-logo-mobile.png" alt="Php_Store Logo Mobile" class="visible-xs">

        </a>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

          <span class="sr-only">Toggle Navigation</span>

          <i class="fa fa-align-justify"></i>

        </button>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

          <span class="sr-only">Toggle Search</span>

          <i class="fa fa-search"></i>

        </button>
      </div>
      <!-- Navbar-Header Finish -->

      <!-- Navbar-Content Begin-->
      <div class="navbar-collapse collapse" id="navigation">

        <div class="padding-nav">

          <ul class="nav navbar-nav left">

            <li class="<?php if($active=='home') echo"active"; ?>">

              <a href="index.php">Home</a>

            </li>
            <li class="<?php if($active=='shop') echo"active"; ?>">

              <a href="tabs/shop.php">Shop</a>

            </li>
            <li class="<?php if($active=='my_account') echo"active"; ?>">

              <a href="customer_area/my_account.php">My Account</a>

            </li>
            <li class="<?php if($active=='cart') echo"active"; ?>">

              <a href="tabs/cart.php">Shopping Cart</a>

            </li>
            <li class="<?php if($active=='contact') echo"active"; ?>">

              <a href="tabs/contact.php">Contact Us</a>

            </li>
          </ul>
        </div>

        <a href="tabs/cart.php" class="btn navbar-btn btn-primary right">

          <i class="fa fa-shopping-cart"></i>

          <span>CheckOut</span>

        </a>
        <!-- Navbar-Content Fininsh -->

        <!-- Navbar-Search Begin -->
        <div class="navbar-collapse collapse right">

          <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
            <!-- btn btn-primary navbar-btn Begin -->

            <span class="sr-only">Toggle Search</span>

            <i class="fa fa-search"></i>

          </button>
        </div>

        <div class="collapse clearfix" id="search">

          <form method="get" action="results.php" class="navbar-form">

            <div class="input-group">

              <input type="text" class="form-control" placeholder="Search" name="user_query" required>

              <span class="input-group-btn">

                <button type="submit" name="search" value="Search" class="btn btn-primary">

                  <i class="fa fa-search"></i>

                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
      <!-- Navbar-Search Fininsh-->
    </div>
  </div>
  <!-- Navbar Finish -->

  <!-- carousel-slide Begin -->
  <div class="container" id="slider">

    <div class="col-md-12">

      <!-- carousel-slide-content Begin -->
      <div class="carousel slide" id="myCarousel" data-ride="carousel">

        <ol class="carousel-indicators">

          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>

          <li data-target="#myCarousel" data-slide-to="1"></li>

          <li data-target="#myCarousel" data-slide-to="2"></li>

          <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <div class="carousel-inner">
          <!-- Dynamic-Carousel Begin -->
          <?php 
            // put query string that selects table from db into variable
            // put query function that connects php to db into variable
            // put db row into an array then into a variable
            // loop throw array and output variables into options tag.. 
            // ..until mysqli_fetch_array hits end of results and returns null
            $get_slides = "select * from slider LIMIT 0,1";
            $run_slides = mysqli_query($con,$get_slides);

            // on each iteration put string held in slide_name/slide_image into variable
            // return html that shows each variable on the page            
            while($row_slides=mysqli_fetch_array($run_slides)){
                
                $slide_name = $row_slides['slide_name'];
                $slide_image = $row_slides['slide_image'];
                
                echo "
                
                <div  class='item active'>
                
                <img id='carousel' src='admin_area/slides_images/$slide_image'>
                
                </div>          
                ";  
            }

            // repeat of previous code but for different row
            $get_slides = "select * from slider LIMIT 1,3";
            $run_slides = mysqli_query($con,$get_slides);
            
            while($row_slides=mysqli_fetch_array($run_slides)){
                
                $slide_name = $row_slides['slide_name'];
                $slide_image = $row_slides['slide_image'];
                
                echo "
                
                <div class='item'>
                
                <img id='carousel' src='admin_area/slides_images/$slide_image'>
                
                </div> 
                "; 
            } 
          ?>
        </div>
        <!-- Dynamic-Carousel Finish -->
        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
          <!-- left carousel-control Begin -->

          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>

        </a>

        <a href="#myCarousel" class="right carousel-control" data-slide="next">
          <!-- left carousel-control Begin -->

          <span class="glyphicon glyphicon-chevron-right"></span>

          <span class="sr-only">Next</span>

        </a>
      </div>
      <!-- carousel-slide-content Finish -->
    </div>
  </div>
  <!-- carousel-slide Finish -->

  <!-- Offers Begin -->
  <div id="offer">

    <div class="container">

      <div class="same-height-row">
        <!-- Offers-content Begin -->
        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">

              <i class="fa fa-heart"></i>

            </div>

            <h3><a href="#">Best Offer</a></h3>

            <p>Wherry squiffy man-of-war Spanish Main code of conduct quarter</p>

          </div>
        </div>

        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">

              <i class="fa fa-tag"></i>

            </div>

            <h3><a href="#">Best Prices</a></h3>

            <p>Pinnace main sheet weigh anchor carouser matey Chain, consectetur adipisicing elit.</p>

          </div>
        </div>

        <div class="col-sm-4">

          <div class="box same-height">

            <div class="icon">

              <i class="fa fa-thumbs-up"></i>

            </div>

            <h3><a href="#">100% Original</a></h3>

            <p>Bucko Arr Jack Ketch draft pirate Admiral of the Black parley lugger stern Blimey.</p>

          </div>
        </div>
      </div>
      <!-- Offers-content Finish -->
    </div>

  </div>
  <!-- Offers Finish -->

  <!-- New-Products Begin -->
  <div id="hot">

    <div class="box">

      <div class="container">

        <div class="col-md-12">

          <h2>
            Our Latest Products
          </h2>
        </div>
      </div>
    </div>
  </div>


  <div id="content" class="container">

    <div class="row">
      <!-- New-Products-Content Begin -->
      <?php 
        // calls function to provide newest products added to db up to 9
        getPro();

      ?>
      <!-- New-Products-Content Finish -->
    </div>
  </div>
  <!-- New-Products Finish -->

  <!-- Footer Begin -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <!-- Footer-Content Begin -->
        <div class="col-sm-6 col-md-3">

          <h4>Pages</h4>

          <ul>
            <li>

              <a href="tabs/cart.php">Shopping Cart</a>

            </li>
            <li>

              <a href="tabs/contact.php">Contact Us</a>

            </li>
            <li>

              <a href="tabs/shop.php">Shop</a>

            </li>
            <li>

              <a href="customer_area/my_account.php">My Account</a>

            </li>
          </ul>

          <hr>

          <h4>User Section</h4>

          <ul>
            <li>

              <a href="tabs/login.php">Login</a>

            </li>
            <li>

              <a href="tabs/customer_register.php">Register</a>

            </li>
          </ul>

          <hr class="hidden-md hidden-lg hidden-sm">

        </div>

        <div class="com-sm-6 col-md-3">

          <h4>Top Products Categories</h4>

          <ul>
            <?php   
              // put query string that selects table from db into variable
              // put query function that connects php to db into variable
              // put db row into an array then into a variable
              // loop throw array and output variables into options tag.. 
              // ..until mysqli_fetch_array hits end of results and returns null      
              $get_p_cats = "select * from product_categories";
              $run_p_cats = mysqli_query($con,$get_p_cats);
          
              while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                // on each iteration put string held in p_cat_id/p_cat_title into variable
                // return html that shows each variable on the page     
                $p_cat_id = $row_p_cats['p_cat_id'];               
                $p_cat_title = $row_p_cats['p_cat_title'];
                
                echo "
                
                  <li>
                  
                    <a href='tabs/shop.php?p_cat=$p_cat_id'>
                    
                      $p_cat_title
                    
                    </a>
                  </li>
                ";   
              }
            ?>
          </ul>

          <hr class="hidden-md hidden-lg">

        </div>

        <div class="col-sm-6 col-md-3">

          <h4>Find Us</h4>

          <p>

            <strong>Bored inc.</strong>
            <br />Las Vegas,
            <br />Nevada
            <br />702-356-6202
            <br />olonnyetaylor@gmail.com

          </p>

          <a href="tabs/contact.php">Check Our Contact Page</a>

          <hr class="hidden-md hidden-lg">

        </div>

        <div class="col-sm-6 col-md-3">

          <h4>Get The News</h4>

          <p class="text-muted">
            Dont miss our latest update products.
          </p>

          <form style="border:1px solid #ccc;padding:3px;text-align:center;"
            action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"
            onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=olonnye', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
            <p>Enter your email address:</p>
            <p><input type="text" style="width:140px" name="email" /></p><input type="hidden" value="olonnye"
              name="uri" /><input type="hidden" name="loc" value="en_US" /><input type="submit" value="Subscribe" />
            <p>Delivered by <a href="https://feedburner.google.com" target="_blank">FeedBurner</a></p>
          </form>

          <hr>

          <h4>Keep In Touch</h4>

          <p class="social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google-plus"></a>
            <a href="#" class="fa fa-envelope"></a>
          </p>

        </div>
      </div>
    </div>
  </div>


  <div id="copyright">
    <div class="container">
      <div class="col-md-6">

        <p class="pull-left">&copy; 2019 Php Store All Rights Reserve</p>

      </div>
      <div class="col-md-6">

        <p class="pull-right">Theme by: <a href="https://olonnye.com">Olonnye Taylor</a></p>

      </div>
      <!-- Footer-Content Finish -->
    </div>
  </div>
  <!-- Footer Finish -->

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>


</body>

</html>