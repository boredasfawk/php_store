<?php

  include __DIR__ . "/../includes/header.php";

?>

<?php

  include __DIR__ . "/../includes/menu.php";

?>

<?php

  include __DIR__ . "/../includes/navbar.php";

?>
<!-- Contact Begin -->
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

    <!-- Contact-Content Begin -->
    <div class="col-md-9">

      <div class="box">

        <div class="box-header">

          <center>

            <h2> Feel free to Contact Us</h2>

            <p class="text-muted">

              If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>

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

              <label>Subject</label>

              <input type="text" class="form-control" name="subject" required>

            </div>

            <div class="form-group">

              <label>Message</label>

              <textarea name="message" class="form-control"></textarea>

            </div>

            <div class="text-center">

              <button type="submit" name="submit" class="btn btn-primary">

                <i class="fa fa-user-md"></i>Send Message

              </button>

            </div>

          </form>

        </div>

      </div>

    </div>
    <!-- Contact-Content Finish -->
  </div>
</div>
<!-- Contact Finish -->
<?php

    include __DIR__ . "/../includes/footer.php";
    
  ?>