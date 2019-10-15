<?php 
// put db connection function that connects php to db into variable
$db = mysqli_connect("localhost","ADMIN","admin","ecom_store");

// get product function start
function getPro(){
  // put db variable into global scope
  // put query string that selects table from db and limits rows to first 9 into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // loop throw array and output variables into options tag.. 
  // ..until mysqli_fetch_array hits end of results and returns null
  global $db;
  
  $get_products = "select * from products order by 1 DESC LIMIT 0,9";
  
  $run_products = mysqli_query($db,$get_products);
  
  while($row_products=mysqli_fetch_array($run_products)) {
    // on each iteration put string held in id/title/price/product_img into variable
    // return html that shows each variable on the page
    $pro_id = $row_products['product_id'];
    
    $pro_title = $row_products['product_title'];
    
    $pro_price = $row_products['product_price'];
    
    $pro_img1 = $row_products['product_img1'];
    
    echo "
      
    <div class='col-md-4 col-sm-6 single'>
    
      <div class='product'>
      
        <a href='tabs/details.php?pro_id=$pro_id'>
        
          <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
        </a>
        
        <div class='text'>
        
          <h3>
  
            <a href='tabs/details.php?pro_id=$pro_id'>

              $pro_title

            </a>
          </h3>
          
          <p class='price'>
          
            $pro_price
          
          </p>
          
          <p class='button'>
          
            <a class='btn btn-default' href='tabs/details.php?pro_id=$pro_id'>

              View Details

            </a>
        
            <a class='btn btn-primary' href='tabs/details.php?pro_id=$pro_id'>

              <i class='fa fa-shopping-cart'></i> Add to Cart

            </a>
          </p>
        </div>
      </div>
    </div>
    ";  
  }  
}
// get product function finish

// get product categories function start 

function getPCats(){
  // put db variable into global scope
  // put query string that selects table from db into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // loop throw array and output variables into options tag.. 
  // ..until mysqli_fetch_array hits end of results and returns null
  global $db;
  
  $get_p_cats = "select * from product_categories";
  
  $run_p_cats = mysqli_query($db,$get_p_cats);
  
  while($row_p_cats=mysqli_fetch_array($run_p_cats)){
    // on each iteration put string held in id/title into variable
    // return html that shows each variable on the page  
    $p_cat_id = $row_p_cats['p_cat_id'];
    
    $p_cat_title = $row_p_cats['p_cat_title'];
    
    echo "
    
      <li>
      
        <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
      
      </li>
    ";  
  }
}
  
// get product categories function finish

// get categories function start 

function getCats(){
  // put db variable into global scope
  // put query string that selects table from db into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // loop throw array and output variables into options tag.. 
  // ..until mysqli_fetch_array hits end of results and returns null
  global $db;
  
  $get_cats = "select * from categories";
  
  $run_cats = mysqli_query($db,$get_cats);
  
  while($row_cats=mysqli_fetch_array($run_cats)){
    // on each iteration put string held in id/title into variable
    // return html that shows each variable on the page    
    $cat_id = $row_cats['cat_id'];
    
    $cat_title = $row_cats['cat_title'];
    
    echo "
    
      <li>
      
        <a href='shop.php?cat=$cat_id'> $cat_title </a>
      
      </li>
    ";   
  }
}
  
// get categories function finish 

// get products from a product category function start 
function getpcatpro(){
  
  global $db;
  // checks if p_cat is set 
  // puts cat id into variable
  // put query string that get all rows from product_categories that matches cat id into variable
  // put query string that selects table from db into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // put string held in p_cat_desc/p_cat_title into variable
  // put query string that get all rows from product that matches cat id into variable
  // put query string that selects table from db into variable
  // put number of rows in table into variable
  if(isset($_GET['p_cat'])){
      
    $p_cat_id = $_GET['p_cat'];
    
    $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($db,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
    $p_cat_desc = $row_p_cat['p_cat_desc'];
    
    $get_products ="select * from products where p_cat_id='$p_cat_id'";
    
    $run_products = mysqli_query($db,$get_products);
    
    $count = mysqli_num_rows($run_products);
  
    // if number of rows is equal to 0 return "none found" response
    // if number of rows greater than 0 return products in row
    if($count==0){
        
      echo "
      
        <div class='box'>
        
          <h1> No Product Found In This Product Categories </h1>
        
        </div>
      ";
    }else{
        
      echo "
      
        <div class='box'>
        
          <h1> $p_cat_title </h1>
          
          <p> $p_cat_desc </p>
        
        </div>
      ";
    }

    // loop throw array and output variables into options tag.. 
    // ..until mysqli_fetch_array hits end of results and returns null
    while($row_products=mysqli_fetch_array($run_products)){
      // on each iteration put string held in Product_id/title/price/img into variable
      // return html that shows each variable on the page  
      $pro_id = $row_products['product_id'];
  
      $pro_title = $row_products['product_title'];

      $pro_price = $row_products['product_price'];

      $pro_img1 = $row_products['product_img1'];
      
      echo "
      
      <div class='col-md-4 col-sm-6 center-responsive'>
  
        <div class='product'>
        
          <a href='details.php?pro_id=$pro_id'>
          
            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
          
          </a>
        
          <div class='text'>
          
            <h3>
    
              <a href='details.php?pro_id=$pro_id'>

                $pro_title

              </a>
            </h3>
            
            <p class='price'>
            
              $ $pro_price
            
            </p>
            
            <p class='button'>
            
              <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                View Details

              </a>
          
              <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                <i class='fa fa-shopping-cart'></i> Add to Cart

              </a>
            </p>
          </div>
        </div>
      </div>
      ";   
    }   
  } 
}
// get products from a product category function finish

?>