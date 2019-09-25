<?php
  $title = 'Insert Products';
  
  include("includes/db.php");

  include($_SERVER['DOCUMENT_ROOT']. "/php_store/includes/header.php");
  include("includes/admin_navbar.php");

?>


<div class="row">

  <div class="col-lg-12">
    <!-- breadcrumb Begin -->
    <ol class="breadcrumb">

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard / Insert Products

      </li>

    </ol>
    <!-- breadcrumb Finish -->

  </div>

</div>

<!-- Admin_Prod_Insert Begin -->
<div class="row">

  <div class="col-lg-12">
    <!-- Admin_Prod_insert_Content Begin -->
    <div class="panel panel-default">

      <div class="panel-heading">

        <h3 class="panel-title">

          <i class="fa fa-money fa-fw"></i> Insert Product

        </h3>
      </div>

      <div class="panel-body">

        <form method="post" class="form-horizontal" enctype="multipart/form-data">

          <div class="form-group">

            <label class="col-md-3 control-label"> Product Title </label>

            <div class="col-md-6">

              <input name="product_title" type="text" class="form-control" required>

            </div>
          </div>

          <div class="form-group">

            <label class="col-md-3 control-label"> Product Category </label>

            <div class="col-md-6">

              <select name="product_cat" class="form-control">

                <option> Select a Category Product </option>

                <!-- DB_Product_Cat Begin -->
                <?php 
                              
                  $get_p_cats = "select * from product_categories";
                  $run_p_cats = mysqli_query($con,$get_p_cats);
                  
                  while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                      
                    $p_cat_id = $row_p_cats['p_cat_id'];
                    $p_cat_title = $row_p_cats['p_cat_title'];
                    
                    echo "
                    
                    <option value='$p_cat_id'> $p_cat_title </option>
                    
                    ";
                      
                  }
                              
                ?>
                <!-- DB_Product_Cat Finish -->
              </select>
            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Category </label>

            <div class="col-md-6">


              <select name="product_cat" class="form-control">


                <option> Select a Category </option>

                <!-- DB_Cat Begin -->
                <?php 
                              
                  $get_cat = "select * from categories";
                  $run_cat = mysqli_query($con,$get_cat);
                  
                  while ($row_cat=mysqli_fetch_array($run_cat)){
                      
                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];
                    
                    echo "
                    
                    <option value='$cat_id'> $cat_title </option>
                    
                    ";
                      
                  }
                              
                ?>
                <!-- DB_Cat Finish -->
              </select>
            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Image 1 </label>

            <div class="col-md-6">


              <input name="product_img1" type="file" class="form-control" required>

            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Image 2 </label>

            <div class="col-md-6">


              <input name="product_img2" type="file" class="form-control" required>

            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Image 3 </label>

            <div class="col-md-6">


              <input name="product_img3" type="file" class="form-control form-height-custom" required>

            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Price </label>

            <div class="col-md-6">


              <input name="product_price" type="text" class="form-control" required>

            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Keywords </label>

            <div class="col-md-6">


              <input name="product_keywords" type="text" class="form-control" required>

            </div>
          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"> Product Desc </label>

            <div class="col-md-6">


              <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

            </div>

          </div>

          <div class="form-group">


            <label class="col-md-3 control-label"></label>

            <div class="col-md-6">


              <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Admin_Prod_insert_Content Finish -->
</div>
<!-- Admin_Prod_Insert Finish -->

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: 'textarea'
});
</script>
</body>

</html>