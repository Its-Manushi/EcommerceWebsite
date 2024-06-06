<!--connect php-->
<?php
include("includes/connect.php");
include("functions/common_function.php");
cart();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarBuy</title>

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

<body style="overflow-x: hidden; overflow-wrap: break-word;">
    <!--navbar-->
    <div class="container-fluid p-0">

        <!--First Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="./images/cart3.png" alt="Logo here" class="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="cart.php"><i
                                    class="fa-solid fa-cart-shopping"></i><sup><?php cartItem() ?></sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Total Price: <?php totalPrice()?></a>
                        </li>

                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-secondary" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button> -->
                        <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>

        <!-- Second Child-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">WELCOME GUEST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="./users_area/user_login.php">LOGIN</a>
                </li>
            </ul>
        </nav>

        <!-- Third Child-->
        <div class="bg-light p-2">
            <h3 class="text-center">StarBuy</h3>
            <p class="text-center">
                Anything...Everything...All at once!!
            </p>
        </div>

        <!-- Fourth Child-->
        <div class="row">
            <div class="col-md-10 bg-light">
                <!--products-->
                <div class="row px-3">
                <!--fetching products-->
                    <?php
                        getProducts();
                        getUniqueCategories();
                        getUniqueBrands();
                    ?>

                    <!--row end-->
                </div>
                <!--column end-->
            </div>
            <!--side-nav-->
            <div class="col-md-2 bg-light p-0">
                <!--Brands-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-dark">
                        <a href="#" class="nav-link text-light">
                            <h4>BRANDS</h4>
                        </a>
                    </li>

                    <?php
                       getBrands();
                    ?>

                </ul>

                <!--Categories-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-dark">
                        <a href="#" class="nav-link text-light">
                            <h4>CATEGORIES</h4>
                        </a>
                    </li>

                    <?php
                        getCategories();
                    ?>

                </ul>
            </div>
        </div>

        <!--Last Child-->
            <!--include footer-->
            <?php
                include("./includes/footer.php");
            ?>

    </div>

    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>