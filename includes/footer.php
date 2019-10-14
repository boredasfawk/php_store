<!-- Footer Begin -->
<div id="footer">
  <div class="container">
    <div class="row">
      <!-- Footer-Content Begin -->
      <div class="col-sm-6 col-md-3">

        <h4>Pages</h4>

        <ul>

          <li class="<?php if($active=='home') echo"active"; ?>">

            <a href="../index.php">Home</a>
          </li>
          <li class="<?php if($active=='shop') echo"active"; ?>">

            <a href="../tabs/shop.php">Shop</a>
          </li>
          <li class="<?php if($active=='my_account') echo"active"; ?>">

            <a href="../customer_area/my_account.php">My Account</a>
          </li>
          <li class="<?php if($active=='cart') echo"active"; ?>">

            <a href="../tabs/cart.php">Shopping Cart</a> </li>
          <li class="<?php if($active=='contact') echo"active"; ?>">

            <a href="../tabs/contact.php">Contact Us</a>
          </li>
        </ul>

        <hr>

        <h4>User Section</h4>

        <ul>

          <li>

            <a href=" checkout.php">Login</a>

          </li>
          <li>

            <a href="customer_register.php">Register</a>

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
              
                <a href='shop.php?p_cat=$p_cat_id'>
                
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

<script src="../js/jquery-331.min.js"></script>
<script src="../js/bootstrap-337.min.js"></script>


</body>

</html>