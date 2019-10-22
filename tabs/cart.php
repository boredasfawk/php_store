<!-- TODO: Find a way to add individual state taxes based on user info -->

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
                <?php 
                  // set intial price total to 0               
                  $total = 0;
                  
                  // loop throw array and find rows in cart table 
                  // ..until mysqli_fetch_array hits end of results and returns null
                  while($row_cart = mysqli_fetch_array($run_cart)){

                    // on each iteration put string held in p_id/size/qty into variable
                    // put query string that has current iterations product id into string
                    // send query to db  
                    $pro_id = $row_cart['p_id'];
                      
                    $pro_size = $row_cart['size'];
                      
                    $pro_qty = $row_cart['qty'];
                      
                    $get_products = "select * from products where product_id='$pro_id'";
                    
                    $run_products = mysqli_query($con,$get_products);

                      // loop throw array and find content of product
                      // ..until mysqli_fetch_array hits end of results and returns null
                      while($row_products = mysqli_fetch_array($run_products)){

                        // on each iteration find product_title/img/price and put into variable
                        // on each iteration multiple current product price by quantity
                        // then add to total variable
                        $product_title = $row_products['product_title'];
                        
                        $product_img1 = $row_products['product_img1'];
                        
                        $only_price = $row_products['product_price'];
                        
                        $sub_total = $row_products['product_price']*$pro_qty;
                        
                        $total += $sub_total;
                                           
                ?>

                <tr>

                  <td>

                    <img class="img-responsive" src="../admin_area/product_images/<?php echo $product_img1; ?>"
                      alt="Product 3a">

                  </td>

                  <td>

                    <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>

                  </td>

                  <td>

                    <?php echo $pro_qty; ?>

                  </td>

                  <td>

                    <?php echo $only_price; ?>

                  </td>

                  <td>

                    <?php echo $pro_size; ?>

                  </td>

                  <td>

                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">

                  </td>

                  <td>

                    $<?php echo $sub_total; ?>

                  </td>
                </tr>
                <?php 
                    // run_product while loop
                    } 
                  // run_cart while loop
                  }   
                ?>
              </tbody>

              <tfoot>

                <tr>

                  <th colspan="5">Total</th>
                  <th colspan="2">$<?php echo $total; ?></th>

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

      <?php 
        // function to update changes on client side to db in server      
        function update_cart(){
          // bring connection to db into function scope
          // check if update is added to url param
          global $con;
          
          if(isset($_POST['update'])){

            // looks through array of removed items  
            foreach($_POST['remove'] as $remove_id){
              
              // put query string that deletes rows from cart by id into variable
              // put query string to send query to db into variable
              // check if query has been sent to db and refresh cart page
              $delete_product = "delete from cart where p_id='$remove_id'";
              
              $run_delete = mysqli_query($con,$delete_product);
              
              if($run_delete){
                  
                echo "<script>window.open('cart.php','_self')</script>";
             
              }   
            }   
          }  
        }
        
        // put update cart function into variable and put variable into global scope
        // TODO: DOESNT DISPLAY ERRORS... make better error handling
        echo @$up_cart = update_cart();
               
      ?>

      <div id="row same-heigh-row">
        <div class="col-md-3 col-sm-6">
          <div class="box same-height headline">
            <h3 class="text-center">Products You Maybe Like</h3>
          </div>
        </div>

        <?php 
          
          // put query string that has current iterations product id into string
          // send query to db  
          $get_products = "select * from products order by rand() LIMIT 0,3";
          
          $run_products = mysqli_query($con,$get_products);
          
          // loop throw array and find content of product
          // ..until mysqli_fetch_array hits end of results and returns null
          while($row_products=mysqli_fetch_array($run_products)){
            
            // on each iteration find product_id/title/img/price and put into variable
            // on each iteration print out html for that product
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
              
              <div class='col-md-3 col-sm-6 center-responsive'>

                <div class='product same-height'>

                  <a href='details.php?pro_id=$pro_id'>

                    <img class='img-responsive' src='../admin_area/product_images/$pro_img1' alt='Product 6'>
                  </a>
                  
                  <div class='text'>

                    <h3>

                      <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                    </h3>
                    
                    <p class='price'>$$pro_price</p>
                      
                  </div> 
                </div>
              </div>
            ";   
          }
        ?>
      </div>
    </div>

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
                <th> <?php echo $total; ?> </th>

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
                <th> <?php echo $total; ?> </th>

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