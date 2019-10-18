<?php
  include("../includes/db.php");
  include("../functions/functions.php");
  
  // checks if pro_id is declared as a url param
  // if product id is declared put id into variable
  // put query string that get all rows from products that matches product id into variable
  // put query string that selects table from db into variable
  // put db row into an array then into a variable
  // put string held in product category id into variable
  // put string held in product_title/price/desc/img1-2-3 into variable
  // put query string that get all rows from product_categories that matches product category id into variable
  // put query string that selects table from db into variable
  // put number of rows in table into variable
  // put query string that selects table from db into variable
  // put db row into an array then into a variable
  // put string held in p_cat_title into variable
  if(isset($_GET['pro_id'])) {
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="no-cache">
  <title><?php echo $title?></title>
  <link rel="stylesheet" href="../styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="../font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body>