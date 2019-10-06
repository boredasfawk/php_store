<?php 
// put db connection function that connects php to db into variable
$db = mysqli_connect("localhost","ADMIN","admin","ecom_store");

function getPro(){
    // put db variable into global scope
    // put query string that selects table from db into variable
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

?>