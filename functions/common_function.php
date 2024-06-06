
<?php

    //getting products
    function getProducts(){
        global $conn; 

        if(!isset($_GET["category"])){
            if(!isset($_GET["brand"])){
                $select_query = "select * from products order by rand() LIMIT 0,5";
                        $result = mysqli_query($conn,$select_query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"];
                            $brand_id = $row["brand_id"];

                            echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image1' class='card-img-top'
                                    style='height: 270px; width:100%; object-fit:contain' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>";
                    }
            }
        }
    }

    //getting brands
    function getBrands(){
        global $conn;
        $select_brands = "select * from brands";
        $result = mysqli_query($conn, $select_brands);

        while ($row_data = mysqli_fetch_assoc($result)) {
            $brand_title = $row_data["brand_title"];
            $brand_id = $row_data["brand_id"];
            echo "<li class='nav-item'><a href='index.php?brand=$brand_id' class='nav-link text-dark'>$brand_title</a></li>";
        }
    }

    //getting categories
    function getCategories(){
        global $conn;
        $select_category = "select * from categories";
        $result = mysqli_query($conn, $select_category);

        while ($row_data = mysqli_fetch_assoc($result)) {
            $cat_title = $row_data["category_title"];
            $cat_id = $row_data["category_id"];
            echo "<li class='nav-item'><a href='index.php?category=$cat_id' class='nav-link text-dark'>$cat_title</a></li>";
        }
    }

    //getting unique categories when category variable is set
    function getUniqueCategories(){
        global $conn; 

        if(isset($_GET["category"])){

            $category_id = $_GET["category"];
            
                $select_query = "select * from products where category_id=$category_id";
                $result = mysqli_query($conn,$select_query);
                $num = mysqli_num_rows($result);

                    if($num==0){
                        echo "<h2 class='text-center text-danger'>No stock for this Category!!</h2>";
                    }
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"];
                            $brand_id = $row["brand_id"];

                            echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image1' class='card-img-top'
                                    style='height: 270px; width:100%; object-fit:contain' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>";
                        }
        }
    }

    //getting unique brands when brand variable is set
    function getUniqueBrands(){
        global $conn; 

        if(isset($_GET["brand"])){

            $brand_id = $_GET["brand"];
            
                $select_query = "select * from products where brand_id=$brand_id";
                $result = mysqli_query($conn,$select_query);
                $num = mysqli_num_rows($result);

                    if($num==0){
                        echo "<h2 class='text-center text-danger'>No stock for this Brand!!</h2>";
                    }
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"];
                            $brand_id = $row["brand_id"];

                            echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image1' class='card-img-top'
                                    style='height: 270px; width:100%; object-fit:contain' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>";
                        }
        }
    }

    //getting all products  
    function getAllProducts(){
        global $conn; 

        if(!isset($_GET["category"])){
            if(!isset($_GET["brand"])){
                $select_query = "select * from products";
                        $result = mysqli_query($conn,$select_query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"]; 
                            $brand_id = $row["brand_id"];

                            echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image1' class='card-img-top'
                                    style='height: 270px; width:100%; object-fit:contain' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>";
                    }
            }
        }
    }

    //get searching products
    function searchProduct(){
        global $conn; 

        if(isset($_GET["search_data_product"])){

            $search_data_value = $_GET["search_data"];
            $search_query = "select * from products where product_keywords like '%$search_data_value%'";
            $result = mysqli_query($conn,$search_query);    
            $num = mysqli_num_rows($result);

                    if($num==0){
                        echo "<h2 class='text-center text-danger'>No results match!! No products found of this category!!</h2>";
                    }          

            while($row = mysqli_fetch_assoc($result)){
                $product_id = $row["product_id"];
                $product_description = $row["product_description"];
                $product_title = $row["product_title"];
                $product_price = $row["product_price"];
                $product_image1 = $row["product_image1"];
                $brand_id = $row["brand_id"];
                $category_id = $row["category_id"];

                        echo "<div class='col-md-4 mb-2'>
                            <div class='card'>
                                <img src='./admin/product_images/$product_image1' class='card-img-top'
                                    style='height: 270px; width:100%; object-fit:contain' alt='$product_title'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p class='card-text'>$product_description</p>
                                    <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                    <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>";
                    }
        }
     }

     //view details
     function viewDetails(){
        global $conn, $product_keywords; 

        if(isset($_GET["product_id"])){
        if(!isset($_GET["category"])){
            if(!isset($_GET["brand"])){

                $product_id = $_GET["product_id"];
                $select_query = "select * from products where product_id=$product_id";
                    $result = mysqli_query($conn,$select_query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_keywords = $row['product_keywords'];
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_image2 = $row["product_image2"];
                            $product_image3 = $row["product_image3"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"];
                            $brand_id = $row["brand_id"];

                            echo "<div class='col-md-5 bg-light'>
                            </div>  
                            <div class='col-md-4 bg-light'>
                        
                               
                                <div class='card'>
                                    
                                <div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
                                    <div class='carousel-inner'>
                                    <div class='carousel-item active'>
                                        <img src='./admin/product_images/$product_image1' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='./admin/product_images/$product_image2' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='./admin/product_images/$product_image3' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    </div>
                                    <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Previous</span>
                                    </button>
                                    <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Next</span>
                                    </button>
                              </div>
        
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                        <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                        <a href='index.php' class='btn btn-secondary'>Home</a>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3 bg-light'>
                            </div>";
                    }
            }
        }
     }
    }

    function wildmatch($keywrd)
    {
        $str = '';
        $ary = explode(',', $keywrd);
        foreach($ary as $k)
        {
            if ( $str != '' ) $str .= ' OR ';
            $str .= ' product_keywords LIKE \'%'.$k.'%\'';
        }
        return $str;
    }
    //get related products
    function viewRelatedProducts(){
        global $conn, $product_keywords; 

        if(isset($_GET["product_id"])){
        if(!isset($_GET["category"])){
            if(!isset($_GET["brand"])){

                $select_query = "select * from products WHERE ".wildmatch($product_keywords)." LIMIT 0,3";
                // echo $select_query;exit;
                    $result = mysqli_query($conn,$select_query);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $product_id = $row["product_id"];
                            $product_title = $row["product_title"];
                            $product_description = $row["product_description"];
                            $product_image1 = $row["product_image1"];
                            $product_image2 = $row["product_image2"];
                            $product_image3 = $row["product_image3"];
                            $product_price = $row["product_price"];
                            $category_id = $row["category_id"];
                            $brand_id = $row["brand_id"];

                            echo 
                            "<div class='col-md-4 bg-light'>
                        
                               
                                <div class='card'>
                                    
                                <div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
                                    <div class='carousel-inner'>
                                    <div class='carousel-item active'>
                                        <img src='./admin/product_images/$product_image1' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='./admin/product_images/$product_image2' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    <div class='carousel-item'>
                                        <img src='./admin/product_images/$product_image3' style='height: 270px; width:100%; object-fit:contain' class='d-block w-100' alt='$product_title'>
                                    </div>
                                    </div>
                                    <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Previous</span>
                                    </button>
                                    <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Next</span>
                                    </button>
                              </div>
        
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <h6 class='card-text mb-3'>Rs: $product_price/-</h6> 
                                        <a href='index.php?add_to_cart=$product_id' class='btn btn-dark'>Add to Cart</a>
                                        <a href='#' class='btn btn-secondary'>View More</a>
                                    </div>
                                </div>
                            </div>";
                    }
            }
        }
     }
    }

    //getting IP address
    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
        //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }  
   
    //cart function
    function cart(){
        if(isset($_GET["add_to_cart"])){
            global $conn;
            $ip = getIPAddress();
            $get_product_id = $_GET["add_to_cart"];

            $select_query = "select * from cartdetails where ip_address='$ip' and product_id=$get_product_id";
            $result = mysqli_query($conn,$select_query);

            $num = mysqli_num_rows($result);

                    if($num>0){
                        echo "<script>alert('This item is already present in Cart!')</script>";
                        echo "<script>window.open('index.php',_self)</script>";
                    }       
                    else{
                        $insert_query = "insert into cartdetails (product_id,ip_address,quantity) values ($get_product_id,'$ip',1)";
                        $result = mysqli_query($conn,$insert_query);
                        /* echo "<script>alert('This item is added to Cart!')</script>"; */
                        echo "<script>window.open('index.php',_self)</script>";
                    }
        }
    }

    //getting cart item numbers
    function cartItem(){
        if(isset($_GET["add_to_cart"])){
            global $conn;
            $ip = getIPAddress();

            $select_query = "select * from cartdetails where ip_address='$ip'";
            $result = mysqli_query($conn,$select_query);

            $num = mysqli_num_rows($result);
        }   
        else{
            global $conn;
            $ip = getIPAddress();

            $select_query = "select * from cartdetails where ip_address='$ip'";
            $result = mysqli_query($conn,$select_query);

            $num = mysqli_num_rows($result);
        }
        echo $num;
    }
    
    //getting total price
    function totalPrice(){
        global $conn;
        $ip = getIPAddress();
        $total = 0;

        $cart_query = "select * from cartdetails where ip_address='$ip'";
        $result = mysqli_query($conn,$cart_query);

        while($row=mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $get_products = "select * from products where product_id='$product_id'"; 
            $result_products = mysqli_query($conn,$get_products);

            while($row_price = mysqli_fetch_array($result_products)){
                $product_price = array($row_price["product_price"]);
                $product_values = array_sum($product_price);
                $total+=$product_values;
            }
        }
        echo $total;
    }

    //displaying final cart.php
    function cartPage(){
        
        global $conn;

                            $ip = getIPAddress();
                            $total=0;
                            $index = 0;
                    
                            $cart_query = "select * from cartdetails where ip_address='$ip'";
                            $result = mysqli_query($conn,$cart_query);
                            $count = mysqli_num_rows($result);

                            $buttonId = 0;

                            if($count>0){

                                echo 
                                "<form action='' method='POST'>
                                   <table class='table table-bordered'>
                                       <thead class='bg-dark text-center text-light'>
                                           <tr>
                                               <th>Product Title</th>
                                               <th>Product Image</th>
                                               <th>Quantity</th>
                                               <th>Product Price</th>
                                               <th>Total Price</th>
                                               <!--<th>Remove</th>-->
                                               <th colspan='2'>Operations</th>
                                           </tr>
                                       </thead>
                                       <tbody>";

                                while($row=mysqli_fetch_array($result)){
                                    $product_id = $row["product_id"];
                                    $get_products = "select * from products where product_id='$product_id'"; 
                                    $result_products = mysqli_query($conn,$get_products);

                                    while($row_price = mysqli_fetch_array($result_products)){
                                        $product_price = array($row_price["product_price"]);
                                        $price_table = $row_price["product_price"];
                                        $product_title = $row_price["product_title"];
                                        $product_image1 = $row_price["product_image1"];
                                        $product_values = array_sum($product_price);
                                        

                                        $prodId = "prod".$buttonId;

                                        // Removing product from cart
                                        if(isset($_POST["remove_cart_$product_id"])){
                                            $delete_query = "delete from cartdetails where product_id=$product_id";
                                            $result_delete = mysqli_query($conn,$delete_query);
            
                                            if($result_delete){
            
                                            echo "<script>
                                                console.log(\"removing product $product_id\")
                                                window.location.href = '/EcommerceWebsite/cart.php'
                                            </script>";
                                            }
                                        }

                                        echo  
                                        "<tr style='text-align:center'>
                                            <td>$product_title</td>
                                            <td><img src='./images/$product_image1' style='height:100px;width:100px; object-fit:contain' alt='$product_title'></td>
                                            <td>
                                                <div class='container'>
                                                <input type='button' onclick='decrementValue(\"$prodId\")' value='-' class='px-2'/>
                                                <input type='text' name='qty[]' value='".$row['quantity']."' maxlength='2' max='10' size='1' id='$prodId' style='text-align:center'/>
                                                <input type='button' onclick='incrementValue(\"$prodId\")' value='+' class='px-2'/>
                                                <input type='hidden' name='product_id[]' value='$product_id' />
                                                </div>
                                            </td>";
                            
                                        $ip = getIPAddress();

                                        $qty = 1;
                                        if(isset($_POST["update_cart_$product_id"])){
                                            $quantity = $_POST["qty"];
                                            $product_id = $_POST["product_id"];
                                            
                                            $qty = $quantity[$index];
                                            $prod_Id = $product_id[$index];
                                            $update_query = "update cartdetails set quantity=$qty where ip_address='$ip' and product_id='$prod_Id'";
                                            $result_quantity = mysqli_query($conn,$update_query);
                                            $total += $price_table * $qty;

                                            echo "<script>
                                                document.getElementById(\"$prodId\").value = $qty
                                            </script>";
                                            $product_id = $prod_Id;
                                            $total += $price_table;
                                        }


                                        echo 
                                            "<td>$price_table</td>
                                            <td>". ($price_table * $qty) . "</td>
                                            <!--<td><span><i class='fa-solid fa-trash'></i></span></td>-->
                                            <td>
                                                <input type='submit' value='Update' class='btn btn-success px-3' name='update_cart_$product_id'></button>
                                                <input type='submit' value='Remove' class='btn btn-danger px-3' name='remove_cart_$product_id'></button>
                                            </td>
                                        </tr>";
                                    
                                    }

                                    $buttonId += 1;
                                    $index += 1;
                                }
                            }else{
                                echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                            }
                            
                    echo   
                        "</tbody>
                        </table>
                        <!--subtotal-->";

                        if($count>0){

                            $ip = getIPAddress();
                            $cart_query = "select * from cartdetails where ip_address='$ip'";
                            $result = mysqli_query($conn,$cart_query);
                            $count = mysqli_num_rows($result);

                            echo 
                            "<div>
                                <h4 class='text-center'>Subtotal: <strong class='text-secondary'>$total</strong></h4>
                                <div class='text-center my-3'>
                                    <input type='submit' value='Continue Shopping' class='btn btn-dark px-3' name='continue_shopping'></button>
                                    <input type='submit' value='Checkout' class='btn btn-dark px-3' name='checkout'></button>
                                </div>
                            </div>";
                        }
                        else{
                            echo    "<div class='text-center my-3'>
                                        <input type='submit' value='Continue Shopping' class='btn btn-dark px-3' name='continue_shopping'></button>
                                    </div>";
                        }
                        
                    if(isset($_POST['continue_shopping'])){
                        echo "<script>
                                window.open('index.php','_self')
                             </script>";
                    }
                    if(isset($_POST['checkout'])){
                        echo "<script>
                                window.open('checkout.php','_self')
                             </script>";
                    }


                    echo "</form>";
    }
?>
