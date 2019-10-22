<?php
  $title = 'Contact';
  $active = 'contact';
  
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
          <?php 
            // checks if form has been submitted           
            if(isset($_POST['submit'])){
              // admin portion  
              
              // grabs info from form and puts into variables
              // uses admins email to recieve emails
              $sender_name = $_POST['name'];
              
              $sender_email = $_POST['email'];
              
              $sender_subject = $_POST['subject'];
              
              $sender_message = $_POST['message'];
              
              $receiver_email = "olonnyetaylor@gmail.com";
              
              mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
              
              // auto reply to sender 
              //grab email from form
              // put msg to sender in variables to set in mail function
              // return html to confirm email 
              $email = $_POST['email'];
              
              $subject = "Welcome to my website";
              
              $msg = "Thank you for reaching out. I will personally get back to you within 24 - 48hrs";
              
              $from = "olonnyetaylor@gmail.com";
              
              mail($email,$subject,$msg,$from);
              
              echo "<h2 align='center'> Your message has sent sucessfully </h2>";
                
            }           
          ?>
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