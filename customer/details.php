  <?php 
    
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

                    <center><img class="img-responsive" src="../admin_area/product_images/product-men-1.jpeg"
                        alt="Product 1"></center>

                  </div>

                  <div class="item">

                    <center><img class="img-responsive" src="../admin_area/product_images/product-men-2.jpeg"
                        alt="Product 2"></center>

                  </div>

                  <div class="item">

                    <center><img class="img-responsive" src="../admin_area/product_images/product-men-3.jpeg"
                        alt="Product 3"></center>

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

              <h1 class="text-center">Polo Shirt Men</h1>

              <form action="details.php" class="form-horizontal" method="post">
                <div class="form-group">

                  <label for="" class="col-md-5 control-label">Products Quantity</label>

                  <div class="col-md-7">

                    <select name="product_qty" id="" class="form-control">

                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
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

                <p class="price">$50</p>

                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to
                    cart</button></p>

              </form>
            </div>

            <div class="row" id="thumbs">

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/product-women-4.jpeg" alt="product 4" class="img-responsive">

                </a>
              </div>

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/product-women-3.jpeg" alt="product 5" class="img-responsive">

                </a>
              </div>

              <div class="col-xs-4">

                <a href="#" class="thumb">

                  <img src="../admin_area/product_images/product-women-2.jpeg" alt="product 6" class="img-responsive">

                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="box" id="details">

          <h4>Product Details</h4>

          <p>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere
            nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi
            asperiores, temporibus! Consequatur?

          </p>

          <h4>Size</h4>

          <ul>

            <li>Small</li>

            <li>Medium</li>

            <li>Large</li>
          </ul>
          <hr>
        </div>

        <div id="row same-heigh-row">

          <div class="col-md-3 col-sm-6">

            <div id="details" class="box same-height headline">

              <h3 class="text-center">Products You Maybe Like</h3>

            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive details">

            <div class="product same-height">

              <a href="details.php">

                <img class="img-responsive" src="../admin_area/product_images/product-women-5.jpeg" alt="Product 7">

              </a>

              <div class="text">
                <h3><a href="details.php">Tank Top Women</a></h3>

                <p class="price">$40</p>

              </div>

            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive details">

            <div class="product same-height">

              <a href="details.php">

                <img class="img-responsive" src="../admin_area/product_images/product-women-3.jpeg" alt="Product 8">

              </a>

              <div class="text">
                <h3><a href="details.php">Street Shirt Women</a></h3>

                <p class="price">$45</p>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive details">

            <div class="product same-height">
              <a href="details.php">
                <img class="img-responsive" src="../admin_area/product_images/product-men-1.jpeg" alt="Product 9">
              </a>

              <div class="text">
                <h3><a href="details.php">T-Shirt men</a></h3>

                <p class="price">$50</p>

              </div>
            </div>

          </div>
        </div>
        <!-- Details-Content FINISH -->
      </div>
    </div>
  </div>
  <!-- Details Finish -->

  <?php 
  
  include __DIR__ . "/../includes/footer.php";
  
?>