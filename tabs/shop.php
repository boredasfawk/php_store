<?php 
  $title = 'Shop';
  
  include __DIR__ . "/../includes/header.php" ;
  
?>

<?php 
    
    include __DIR__ . "/../includes/menu.php";
    
  ?>

<?php 
    
    include __DIR__ . "/../includes/navbar.php";
    
  ?>
<!-- Shop Begin -->
<div id="content">
  <div class="container">
    <div class="col-md-12">
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

    <div class="col-md-9">
      <div class="box">
        <h1>Shop</h1>
        <p>
          Barkadeer rigging swab rum capstan lateen sail killick keelhaul coffer Arr. Scuttle Gold Road row's nest
          square-rigged smartly Jolly Roger chandler galleon loot marooned Chain Shot main sheet.
        </p>
      </div>
      <!-- Shop-Product Begin -->
      <div class="row">
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-women-4.jpeg" alt="Product 1">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  Woman T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-women-2.jpeg" alt="Product 2">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  Woman T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-women-2.jpeg" alt="Product 3">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  Woman T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-women-5.jpeg" alt="Product 4">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  Woman T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-men-4.jpeg" alt="Product 5">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  man T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-4 col-sm-6 center-responsive">

          <div class="product">

            <a href="details.php">

              <img class="img-responsive" src="../admin_area/product_images/product-men-1.jpeg" alt="Product 6">

            </a>

            <div class="text">

              <h3>
                <a href="details.php">
                  man T-Shirt
                </a>
              </h3>

              <p class="price">$30</p>

              <p class="button">

                <a href="details.php" class="btn btn-default">View Details</a>

                <a href="details.php" class="btn btn-primary">

                  <i class="fa fa-shopping-cart">
                    Add To Cart
                  </i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <center>
        <ul class="pagination">
          <li class="active;"><a href="#">First Page</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Last Page</a></li>
        </ul>
      </center>
    </div>
    <!-- Shop-Product Finish -->
  </div>
</div>
<!-- Shop Finish -->

<?php 
  
  include __DIR__ . "/../includes/footer.php";
  
?>