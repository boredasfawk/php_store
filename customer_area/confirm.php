<?php
  $title = 'Confirm';
  
  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/header.php");

  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/menu.php");

  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/navbar.php");
?>

<!-- Confirm Begin -->
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

    <!-- Confirm-Content Begin -->
    <div class="col-md-9">


      <div class="box">


        <h1 align="center"> Please confirm your payment</h1>

        <form action="confirm.php" method="post" enctype="multipart/form-data">


          <div class="form-group">


            <label> Invoice No: </label>

            <input type="text" class="form-control" name="invoice_no" required>

          </div>

          <div class="form-group">


            <label> Amount Sent: </label>

            <input type="text" class="form-control" name="amount_sent" required>

          </div>

          <div class="form-group">


            <label> Select Payment Mode: </label>

            <select name="payment_mode" class="form-control">


              <option> Select Payment Mode </option>
              <option> Back Code </option>
              <option> UBL / Omni Paisa </option>
              <option> Easy Paisa </option>
              <option> Western Union </option>

            </select>

          </div>

          <div class="form-group">


            <label> Transaction / Reference ID: </label>

            <input type="text" class="form-control" name="ref_no" required>

          </div>

          <div class="form-group">


            <label> Omni Paisa / East Paisa: </label>

            <input type="text" class="form-control" name="code" required>

          </div>

          <div class="form-group">


            <label> Payment Date: </label>

            <input type="text" class="form-control" name="date" required>

          </div>

          <div class="text-center">


            <button class="btn btn-primary btn-lg">


              <i class="fa fa-user-md"></i> Confirm Payment

            </button>

          </div>

        </form>

      </div>

    </div>
    <!-- Confirm-Content Finish -->
  </div>
</div>
<!-- Confirm-Content Finish -->

<?php 
  
  include($_SERVER['DOCUMENT_ROOT']."/php_store/includes/footer.php");
  
?>