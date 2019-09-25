<?php
  $title = 'Register';
  
  include __DIR__ . "/../includes/header.php";

?>

<?php

  include __DIR__ . "/../includes/menu.php";

?>

<?php

  include __DIR__ . "/../includes/navbar.php";

?>
<!-- Registration Begin -->
<div id="content">
  <div class="container">

    <div class="col-md-12">

      <!-- Crumb Begin -->
      <ul class="breadcrumb">

        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          Contact Us
        </li>
      </ul>
      <!-- Crumb Finish -->
    </div>

    <div class="col-md-3">

      <?php 
  
        include __DIR__ . "/../includes/sidebar.php";

      ?>

    </div>

    <!-- Registration-Content Begin -->
    <div class="col-md-9">

      <div class="box">

        <div class="box-header">

          <center>

            <h2> Account Creation</h2>

            <p class="text-muted">

              Please create an account

            </p>

          </center>

          <form action="contact.php" method="post">

            <div class="form-group">

              <label>Name</label>

              <input type="text" class="form-control" name="name" required>

            </div>

            <div class="form-group">

              <label>Email</label>

              <input type="email" class="form-control" name="email" required>

            </div>

            <div class="form-group">

              <label>Password</label>

              <input type="password" class="form-control" name="password" required>

            </div>

            <div class="form-group">

              <label>City</label>

              <input type="text" class="form-control" name="city" required>

            </div>

            <div class="form-group">

              <label>Country</label>

              <input type="text" class="form-control" name="country" required>

            </div>

            <div class="form-group">

              <label>Address</label>

              <input type="text" class="form-control" name="Address" required>

            </div>

            <div class="form-group">

              <label>Phone Number</label>

              <input type="number" class="form-control" name="number" required>

            </div>

            <!-- TODO: Get Working For Long Term Goal -->
            <!-- <div class="form-group">

              <label>Upload File</label>

              <input type="file" class="form-control" name="file" required>

            </div> -->

            <div class="text-center">

              <button type="submit" name="submit" class="btn btn-primary">

                <i class="fa fa-user-md"></i>Send Message

              </button>

            </div>

          </form>

        </div>

      </div>

    </div>
    <!-- Registration-Content Finish -->
  </div>
</div>
<!-- Registration Finish -->
<?php

    include __DIR__ . "/../includes/footer.php";
    
?>