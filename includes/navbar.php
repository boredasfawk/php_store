<!-- Navbar Begin -->
<div id="navbar" class="navbar navbar-default">

  <div class="container">
    <!-- Navbar-Header Begin -->
    <div class="navbar-header">

      <a href="../index.php" class="navbar-brand home">

        <img src="../images/ecom-store-logo.png" alt="Php_Store Logo" class="hidden-xs">
        <img src="../images/ecom-store-logo-mobile.png" alt="Php_Store Logo Mobile" class="visible-xs">

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
      </div>

      <a href="../tabs/cart.php" class="btn navbar-btn btn-primary right">

        <i class="fa fa-shopping-cart"></i>

        <span>CheckOut</span>

      </a>
      <!-- Navbar-Content Fininsh -->

      <!-- Navbar-Search Begin -->
      <div class="navbar-collapse collapse right">

        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">


          <span class="sr-only">Toggle Search</span>

          <i class="fa fa-search"></i>

        </button>
      </div>

      <div class="collapse clearfix" id="search">

        <form method="get" action="../tabs/results.php" class="navbar-form">

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