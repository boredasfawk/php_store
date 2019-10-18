  <?php 
    $title = 'Clothing Details';
    $active = 'shop';
  
    include __DIR__ . "/../includes/header.php" ;
    
  ?>

  <?php 
    
    include __DIR__ . "/../includes/menu.php";
    
  ?>

  <?php 
    
    include __DIR__ . "/../includes/navbar.php";
    
  ?>

  <!-- Details Begin -->
  <div id="content">
    <div class="container">
      <div class="col-md-12 details">

        <!-- Crumb Begin -->
        <ul class="breadcrumb">
          <li>
            <a href="../index.php">Home</a>
          </li>
          <li>
            Shop
          </li>
          <li>
            <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
          </li>
          <li>
            <?php echo $pro_title; ?>
          </li>
        </ul>
        <!-- Crumb Finish -->
      </div>

      <div class="col-md-3">

        <?php 
  
          include __DIR__ . "/../includes/sidebar.php";
  
        ?>

      </div>
      <!-- Details-Content Begin -->
      <div class="col-md-9">

        <div id="productMain" class="row">

          <div class="col-sm-6">

            <div id="mainImage">

              <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                  <li data-target="#myCarousel" data-slide-to="1"></li>

                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                  <div class="item active">

                    <center>

                      <img class="img-responsive" src="../admin_area/product_images/<?php echo $pro_img1; ?>"
                        alt="Product 3-a">

                    </center>
                  </div>

                  <div class="item">

                    <center>

                      <img class="img-responsive" src="../admin_area/product_images/<?php echo $pro_img2; ?>"
                        alt="Product 3-b">

                    </center>
                  </div>

                  <div class="item">

                    <center>

                      <img class="img-responsive" src="../admin_area/product_images/<?php echo $pro_img3; ?>"
                        alt="Product 3-c">

                    </center>
                  </div>
                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">

                  <span class="glyphicon glyphicon-chevron-left"></span>

                  <span class="sr-only">Previous</span>

                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">

                  <span class="glyphicon glyphicon-chevron-right"></span>

                  <span class="sr-only">Previous</span>

                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6">

            <div class="box">

              <h1 class="text-center"><?php echo $pro_title; ?> </h1>

              <form action="../index.php?add_cart=<?php echo $pro_id; ?>" class="form-horizontal" method="post">

                <div class="form-group">

                  <label for="" class="col-md-5 control-label">Products Quantity</label>

                  <div class="col-md-7">

                    <select name="product_qty" id="" class="form-control">

                      <?php
                        // loops through integer 0-100 
                        // each loop puts integer in option tag
                        for ($i=0; $i<=100; $i++) {
                      ?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
                      <?php
                        }
                      ?>
                    </select>

                  </div>
                </div>

                <div class="form-group">

                  <label class="col-md-5 control-label">Product Size</label>

                  <div class="col-md-7">

                    <select name="product_size" class="form-control">

                      <option>Select a Size</option>
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>

                    </select>

                  </div>
                </div>

                <p class="price">$ <?php echo $pro_price; ?></p>

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to
                    cart</button></p>

              </form>
            </div>

            <div class="row" id="thumbs">

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 4"
                    class="img-responsive">

                </a>
              </div>

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 5"
                    class="img-responsive">

                </a>
              </div>

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 6"
                    class="img-responsive">

                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="box" id="details">

          <h4>Product Details</h4>

          <p>

            <?php echo $pro_desc; ?>

          </p>

          <h4>Size</h4>

          <ul>

            <li>Small</li>

            <li>Medium</li>

            <li>Large</li>
          </ul>
          <hr>
        </div>
        <!-- Details-Content Finish -->

        <!-- Other Products Start -->
        <div id="row same-heigh-row">

          <div class="col-md-3 col-sm-6">

            <div id="details" class="box same-height headline">

              <h3 class="text-center">Products You Maybe Like</h3>

            </div>
          </div>

          <?php 
            // put query string that selects table from db and limits rows to first 3 into variable
            // put query function that connects php to db into variable
            // put db row into an array then into a variable
            // loop throw array and output variables into html.. 
            // ..until mysqli_fetch_array hits end of results and returns null       
            $get_products = "select * from products order by 1 DESC LIMIT 0,3";
          
            $run_products = mysqli_query($con,$get_products);
          
            while($row_products=mysqli_fetch_array($run_products)){
              // on each iteration put string held in product_id/title/price/img into variable
              // return html that shows each variable on the page  
              $pro_id = $row_products['product_id'];
              
              $pro_title = $row_products['product_title'];
              
              $pro_img1 = $row_products['product_img1'];
              
              $pro_price = $row_products['product_price'];
              
              echo "
              
                <div class='col-md-3 col-sm-6 center-responsive'>
                
                  <div class='product same-height'>
                  
                    <a href='details.php?pro_id=$pro_id'>
                    
                      <img class='img-responsive' src='../admin_area/product_images/$pro_img1'>
                    
                    </a>
                    
                    <div class='text'>
                    
                      <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                      
                      <p class='price'> $ $pro_price </p>
                    
                    </div>
                  </div>
                </div>
              ";
            }    
          ?>
        </div>
        <!-- Other Products Finish -->
      </div>
    </div>
  </div>
  <!-- Details Finish -->

  <?php 
  
  include __DIR__ . "/../includes/footer.php";
  
?>