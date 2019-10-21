<?php 
// TODO: Refactor db scope from global to function argument

// put db connection function that connects php to db into variable
$db = mysqli_connect("localhost","ADMIN","admin","ecom_store");

// get product function start
function getPro(){

  // put db variable into function scope
  // put query string that selects table from db and limits rows to first 9 into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // loop throw array and output variables into html.. 
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

  // put db variable into function scope
  // put query string that selects table from db into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // loop throw array and output variables into html.. 
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
  // loop throw array and output variables into html.. 
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
  
  // put db variable into function scope
  // checks if p_cat is set 
  // puts cat id into variable
  // put query string that get all rows from product_categories that matches cat id into variable
  // put query string that selects table from db into variable
  // put db row into an array then into a variable
  // put string held in p_cat_desc/p_cat_title into variable
  // put query string that get alls rows from product that matches product category id into variable
  // put query string that selects table from db into variable
  // put number of rows in table into variable
  global $db;

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

    // loop throw array and output variables into html.. 
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
          
            <img class='img-responsive' src='../admin_area/product_images/$pro_img1'>
          
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

// get category product function start 
function getcatpro(){

  // put db variable into function scope
  // checks if cat is declared
  // if true puts cat id into a variable
  // put query string that get all rows from categories that matches cat id into variable
  // put query string that selects table from db into variable
  // put query function that connects php to db into variable
  // put db row into an array then into a variable
  // put string held in cat_title/cat_desc into variable
  // put query string that get all rows from product that matches cat id into variable
  // put query string that selects table from db into variable
  // put number of rows in table into variable
  global $db;
  
  if(isset($_GET['cat'])){
      
    $cat_id = $_GET['cat'];
    
    $get_cat = "select * from categories where cat_id='$cat_id'";
    
    $run_cat = mysqli_query($db,$get_cat);
    
    $row_cat = mysqli_fetch_array($run_cat);
    
    $cat_title = $row_cat['cat_title'];
    
    $cat_desc = $row_cat['cat_desc'];
    
    $get_cat = "select * from products where cat_id='$cat_id'";
    
    $run_products = mysqli_query($db,$get_cat);
    
    $count = mysqli_num_rows($run_products);

    // if number of rows is equal to 0 return "none found" response
    // if number of rows greater than 0 return products in row
    if($count==0){
          
      echo "
      
        <div class='box'>
        
          <h1> No Product Found In This Category </h1>
        
        </div>
      ";
    }else{
        
      echo "
      
        <div class='box'>
        
          <h1> $cat_title </h1>
          
          <p> $cat_desc </p>
        
        </div>
      ";
    }
    
    // loop throw array and output variables into html.. 
    // ..until mysqli_fetch_array hits end of results and returns null
    while($row_products=mysqli_fetch_array($run_products)){

      // on each iteration put string held in id/title into variable
      // return html that shows each variable on the page 
      $pro_id = $row_products['product_id'];
      
      $pro_title = $row_products['product_title'];
      
      $pro_price = $row_products['product_price'];
      
      $pro_desc = $row_products['product_desc'];
      
      $pro_img1 = $row_products['product_img1'];
      
      echo "
      
        <div class='col-md-4 col-sm-6 center-responsive'>
                            
          <div class='product'>
                              
            <a href='details.php?pro_id=$pro_id'>
                                
              <img class='img-responsive' src='../admin_area/product_images/$pro_img1'>
                                
            </a>
                                
            <div class='text'>
                                
              <h3>
                                  
                <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                  
              </h3>
                                
            <p class='price'>

              $$pro_price

            </p>

              <p class='buttons'>

                <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                View Details

                </a>

                <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                <i class='fa fa-shopping-cart'></i> 
                  
                  Add To Cart

                </a>
              </p>              
            </div>              
          </div>              
        </div>
      ";   
    }   
  } 
}
// get category product function finish

// get ip from user/customer function start
function getRealIpUser(){
  // check if for where user ip is and return ip address
  if(!empty($_SERVER['HTTP_X_REAL_IP'])) {
    return $_SERVER['HTTP_X_REAL_IP'];

  } elseif(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    return $_SERVER['HTTP_CLIENT_IP'];

  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    return $_SERVER['HTTP_X_FORWARDED_FOR'];

  } else{
    return $_SERVER['REMOTE_ADDR'];
  } 
}
// get ip from customer function finish

// add product to cart function start
function add_cart(){
  
  // put db variable into function scope
  // checks if add_cart is set on url param
  // use getRealIpUser func to get user ip and put into variable
  // check post req for product quantity and size and put each into respective variable
  // put query string that get all rows from cart that matches ip_add & p_id into variable
  // put query function that connects php to db into variable
  // check if rows return from db query is greater than 0
    // if true returns sends alert item has already been added and refresh window
    // if false puts query string that adds item to db into variable..
    //..then sends query to db and refreshs page
  global $db;
  
  if(isset($_GET['add_cart'])){
      
    $ip_add = getRealIpUser();
    
    $p_id = $_GET['add_cart'];
    
    $product_qty = $_POST['product_qty'];
    
    $product_size = $_POST['product_size'];
    
    $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
    
    $run_check = mysqli_query($db,$check_product);
    
    if(mysqli_num_rows($run_check)>0){
        
      echo "<script>alert('This product has already added in cart')</script>";
      echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";    
    }else{
        
      $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
      
      $run_query = mysqli_query($db,$query);
      
      echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";   
    }   
  } 
}
// add product to cart function finish

// get items in cart function start
function items(){
  
  // put db variable into function scope
  // use getRealIpUser func to get user ip and put into variable
  // put query string that get all rows from cart that matches ip_add into variable
  // put query function that connects php to db into variable
  // put array of rows from db into variable
  // print number items found 
  global $db;
  
  $ip_add = getRealIpUser();
  
  $get_items = "select * from cart where ip_add='$ip_add'";
  
  $run_items = mysqli_query($db,$get_items);
  
  $count_items = mysqli_num_rows($run_items);
  
  echo $count_items;
  
}
// get items in cart function finish

// get total price in cart function start
function total_price(){
  
  // put db variable into function scope
  // use getRealIpUser func to get user ip and put into variable
  // set intial price total to 0
  // put query string that get all rows from cart that matches ip_add into variable
  // put query function that connects php to db into variable
  // print total
  global $db;
  
  $ip_add = getRealIpUser();
  
  $total = 0;
  
  $select_cart = "select * from cart where ip_add='$ip_add'";
  
  $run_cart = mysqli_query($db,$select_cart);

  // loop throw array and find items in cart table in products table
  // ..until mysqli_fetch_array hits end of results and returns null
  while($record=mysqli_fetch_array($run_cart)){
    // on each iteration put string held in p_id/qty into variable
    // put query string that has current iterations product id into string
    // send query to db
    $pro_id = $record['p_id'];
    
    $pro_qty = $record['qty'];
    
    $get_price = "select * from products where product_id='$pro_id'";
    
    $run_price = mysqli_query($db,$get_price);
    
    // loop throw array and find price of products
    // ..until mysqli_fetch_array hits end of results and returns null
    while($row_price=mysqli_fetch_array($run_price)){
      // on each iteration multiple current product price by quantity
      // then add to total variable  
      $sub_total = $row_price['product_price']*$pro_qty;
      
      $total += $sub_total;  
    }  
  }
  
  echo "$" . $total;
}

// get total price in cart function finish
?>