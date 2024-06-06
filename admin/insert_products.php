<!--connect php-->
<?php
include "../includes/connect.php";

if (isset($_POST["insert_product"])) {
    $product_title = $_POST["product_title"];
    $product_description = $_POST["product_description"];
    $product_keyword = $_POST["product_keyword"];
    $product_category = $_POST["product_category"];
    $product_brand = $_POST["product_brand"];
    $product_price = $_POST["product_price"];
    $product_status = "true";

    //accessing images
    $product_image1 = $_FILES["product_image1"]["name"];
    $product_image2 = $_FILES["product_image2"]["name"];
    $product_image3 = $_FILES["product_image3"]["name"];

    //accessing image tmp name
    $tmp_image1 = $_FILES["product_image1"]["tmp_name"];
    $tmp_image2 = $_FILES["product_image2"]["tmp_name"];
    $tmp_image3 = $_FILES["product_image3"]["tmp_name"];

    //checking empty conditon
    if ($product_title == '' or $product_description == '' or $product_keyword == '' or $product_category == '' or $product_brand == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('Please fill all the required fields')</script>";
        exit();
    } else {
        move_uploaded_file($tmp_image1, "./product_images/$product_image1");
        move_uploaded_file($tmp_image2, "./product_images/$product_image2");
        move_uploaded_file($tmp_image3, "./product_images/$product_image3");

        //insert query
        $insert_product = "insert into products (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$product_description','$product_keyword','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price', NOW() ,'$product_status')";
        $result = mysqli_query($conn, $insert_product);
        if ($result) {
            echo "<script>alert('Successfully inserted the product!!')</script>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>

    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font Awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file-->
    <link rel="stylesheet" href="style.css">

</head>

<body class="bg-light" style="overflow-x: hidden; overflow-wrap: break-word;">

    <div class="container mt-3">
        <h1 class="text-center">INSERT PRODUCTS</h1>
        <!--Form-->
        <form action="" method="POST" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_title" class="form-label">PRODUCT TITLE</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title..." autocomplete="off" required="required">
            </div>
            <!--description-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_description" class="form-label">PRODUCT DESCRIPTION</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter product description..." autocomplete="off" required="required">
            </div>
            <!--keyword-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_keyword" class="form-label">PRODUCT KEYWORD</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                    placeholder="Enter product keyword..." autocomplete="off" required="required">
            </div>
            <!--categories-->
            <div class="form-outline w-50 mb-4 m-auto">
                <select name="product_category" id="product_category" class="form-select">
                    <option value="">SELECT A CATEGORY</option>

                    <?php
                        $select_query = "select * from categories";
                        $result = mysqli_query($conn, $select_query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>

                </select>
            </div>

            <!--brands-->
            <div class="form-outline w-50 mb-4 m-auto">
                <select name="product_brand" id="product_brand" class="form-select">
                    <option value="">SELECT A BRAND</option>

                    <?php
                        $select_query = "select * from brands";
                        $result = mysqli_query($conn, $select_query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $brand_title = $row['brand_title'];
                            $brand_id = $row['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                    ?>

                </select>
            </div>
            <!--image 1-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_image1" class="form-label">PRODUCT IMAGE 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <!--image 2-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_image2" class="form-label">PRODUCT IMAGE 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <!--image 3-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_image3" class="form-label">PRODUCT IMAGE 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <!--price-->
            <div class="form-outline w-50 mb-4 m-auto">
                <label for="product_price" class="form-label">PRODUCT PRICE</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter product price..." autocomplete="off" required="required">
            </div>
            <!--submit-->
            <div class="form-outline w-50 mb-4 m-auto">
                <input type="submit" name="insert_product" class="btn btn-dark mb-3 px-3" value="INSERT PRODUCT">
            </div>
        </form>
    </div>

</body>

</html>