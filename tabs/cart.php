<?php 
    $title = 'Cart';
    $active = 'cart';
  
    include __DIR__ . "/../includes/header.php" ;

  ?>

<?php 

    include __DIR__ . "/../includes/menu.php";

  ?>

<?php 

    include __DIR__ . "/../includes/navbar.php";

  ?>

<!-- Cart Begin -->
<div id="content" class="cart">
  <div class="container">
    <div class="col-md-12">
      <!-- Crumb Begin -->
      <ul class="breadcrumb">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          Cart
        </li>
      </ul>
      <!-- Crumb Finish -->
    </div>

    <!-- Cart-Content Begin -->
    <div id="cart" class="col-md-9">

      <div class="box">

        <form action="cart.php" method="post" enctype="multipart/form-data">

          <h1>Shopping Cart</h1>

          <?php 
            // checks ip of current user in cart page thenputs results into variable
            // query string that selects all rows from cart that..
            // ...matches current users ip results arre put in variable    
            // put quesry string to send query to db in variable
            // put number of rows into variable       
            $ip_add = getRealIpUser();
            
            $select_cart = "select * from cart where ip_add='$ip_add'";
            
            $run_cart = mysqli_query($con,$select_cart);
            
            $count = mysqli_num_rows($run_cart);
                       
          ?>
          <p class="text-muted">You currently <?php echo $count; ?> item(s)in your cart</p>

          <div class="table-responsive">

            <table class="table">

              <thead>

                <tr>

                  <th colspan="2">Product</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Size</th>
                  <th colspan="1">Delete</th>
                  <th colspan="2">Sub-Total</th>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>

                    <img class="img-responsive" src="../admin_area/product_images/product-men-3.jpeg" alt="Product 3a">

                  </td>

                  <td>

                    <a href="#">Polo Shirt Men</a>

                  </td>

                  <td>

                    2

                  </td>

                  <td>

                    $50

                  </td>

                  <td>

                    Large

                  </td>

                  <td>

                    <input type="checkbox" name="remove[]">

                  </td>

                  <td>

                    $100

                  </td>

                </tr>

              </tbody>

              <tbody>

                <tr>

                  <td>

                    <img class="img-responsive" src="../admin_area/product_images/product-women-2.jpeg"
                      alt="Product 3a">

                  </td>

                  <td>

                    <a href="#">Woman T-Shirt </a>

                  </td>

                  <td>

                    2

                  </td>

                  <td>

                    $50

                  </td>

                  <td>

                    Large

                  </td>

                  <td>

                    <input type="checkbox" name="remove[]">

                  </td>

                  <td>

                    $100

                  </td>

                </tr>

              </tbody>

              <tbody>

                <tr>

                  <td>

                    <img class="img-responsive" src="../admin_area/product_images/product-women-4.jpeg"
                      alt="Product 3a">

                  </td>

                  <td>

                    <a href="#">Woman Tank Top </a>

                  </td>

                  <td>

                    2

                  </td>

                  <td>

                    $50

                  </td>

                  <td>

                    Large

                  </td>

                  <td>

                    <input type="checkbox" name="remove[]">

                  </td>

                  <td>

                    $100

                  </td>

                </tr>

              </tbody>

              <tfoot>

                <tr>

                  <th colspan="5">Total</th>
                  <th colspan="2">$600</th>

                </tr>

              </tfoot>

            </table>

          </div>

          <div id="cart" class="box-footer">

            <div class="pull-left">

              <a href="index.php" class="btn btn-default">

                <i class="fa fa-chevron-left"></i> Continue Shopping

              </a>

            </div>

            <div class="pull-right">

              <button type="submit" name="update" value="Update Cart" class="btn btn-default">

                <i class="fa fa-refresh"></i> Update Cart

              </button>

              <a href="checkout.php" class="btn btn-primary">

                Proceed Checkout <i class="fa fa-chevron-right"></i>

              </a>

            </div>

          </div>

        </form>

      </div>

      <!-- TODO: messing up flow of page check back after making page dynamic -->

      <!-- <div id="row same-heigh-row">
                  <div class="col-md-3 col-sm-6">
                      <div id="cart" class="box same-height headline">
                          <h3 class="text-center">Products You Maybe Like</h3>
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6 center-responsive cart">
                      <div class="product same-height">
                          <a href="details.php">
                              <img class="img-responsive" src="../admin_area/product_images/product-men-1.jpeg" alt="Product 6">
                          </a>
                          
                          <div class="text">
                              <h3><a href="details.php">Tank Top men</a></h3>
                              
                              <p class="price">$40</p>
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6 center-responsive cart">
                      <div class="product same-height">
                          <a href="details.php">
                              <img class="img-responsive" src="../admin_area/product_images/product-women-5.jpeg" alt="Product 6">
                          </a>
                          
                          <div class="text">
                              <h3><a href="details.php">Street Shirt Women</a></h3>
                              
                              <p class="price">$45</p>
                              
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6 center-responsive cart">
                      <div class="product same-height">
                          <a href="details.php">
                              <img class="img-responsive" src="../admin_area/product_images/product-women-2.jpeg" alt="Product 6">
                          </a>
                          
                          <div class="text">
                              <h3><a href="details.php">Polo T-Shirt Women</a></h3>
                              
                              <p class="price">$50</p>
                              
                          </div>
                          
                      </div>
                  </div>
                  
              </div>
              
          </div> -->

      <div class="col-md-3">

        <div id="order-summary" class="box">

          <div id="cart" class="box-header">

            <h3>Order Summary</h3>

          </div>

          <p class="text-muted">

            Shipping and additional costs are calculated based on value you have entered

          </p>

          <div class="table-responsive">

            <table class="table">

              <tbody>

                <tr>

                  <td> Order Sub-Total </td>
                  <th> $600 </th>

                </tr>

                <tr>

                  <td> Shipping and Handling </td>
                  <td> $0 </td>

                </tr>

                <tr>

                  <td> Tax </td>
                  <th> $0 </th>

                </tr>

                <tr class="total">

                  <td> Total </td>
                  <th> $600 </th>

                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Cart-Content Finish -->
    </div>
  </div>
  <!-- Cart Finish -->
  <?php 
  
   include __DIR__ . "/../includes/footer.php";
  
  ?>