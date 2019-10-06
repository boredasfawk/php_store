<!--  customer-sidebar Begin  -->
<div class="panel panel-default sidebar-menu">

  <div class="panel-heading">

    <!-- TODO: Get Working For Long Term Goal -->
    <!-- <center>
  
      <img src="customer_images/olonnye.jpg" alt="Mdev Profile">

    </center> -->

    <br />

    <h3 align="center" class="panel-title">

      Name: Olonnye Taylor

    </h3>

  </div>

  <div class="panel-body">


    <ul class="nav-pills nav-stacked nav">
      <!-- check if my_orders is in url params return an active string to class attr -->
      <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">

        <a href="my_account.php?my_orders">

          <i class="fa fa-list"></i> My Orders

        </a>

      </li>
      <!-- check if pay_offline is in url params return an active string to class attr -->
      <li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">

        <a href="my_account.php?pay_offline">

          <i class="fa fa-bolt"></i> Pay Offline

        </a>

      </li>
      <!-- check if edit_account is in url params return an active string to class attr -->
      <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">

        <a href="my_account.php?edit_account">

          <i class="fa fa-pencil"></i> Edit Account

        </a>

      </li>
      <!-- check if change_pass is in url params return an active string to class attr -->
      <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

        <a href="my_account.php?change_pass">

          <i class="fa fa-user"></i> Change Password

        </a>

      </li>
      <!-- check if delete_account is in url params return an active string to class attr -->
      <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">

        <a href="my_account.php?delete_account">

          <i class="fa fa-trash-o"></i> Delete Account

        </a>

      </li>

      <li>

        <a href="logout.php">

          <i class="fa fa-sign-out"></i> Log Out
        </a>
      </li>
    </ul>
  </div>
</div>
<!--  customer-sidebar Finish  -->