<?php
  $title = 'My Account';
  $active = 'my_account';
  
  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/header.php");

  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/menu.php");

  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/navbar.php");
?>

<!-- Account Begin -->
<div id="content">

  <div class="container">

    <div class="col-md-12">

      <!-- Crumb Begin -->
      <ul class="breadcrumb">

        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          My Account
        </li>
      </ul>
      <!-- Crumb Finish -->
    </div>

    <div class="col-md-3">

      <?php 
  
      include("includes/customer_sidebar.php");

    ?>

    </div>
    <!-- Account-Content Begin -->
    <div class="col-md-9">

      <div class="box">

        <?php
          // check if my_orders is in url param, if true includes my_orders page  
          if (isset($_GET['my_orders'])){
            include("my_orders.php");
          }
               
        ?>

      </div>

    </div>
    <!-- Account-Content Finish -->
  </div>


</div>
</div>
<!-- Account Finish -->

<?php 
  
  include($_SERVER['DOCUMENT_ROOT']."/php_store/includes/footer.php");
  
?>