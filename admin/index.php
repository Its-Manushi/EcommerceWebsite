<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font Awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file-->
    <link rel="stylesheet" href="../style.css">

</head>

<body style="overflow-x: hidden; overflow-wrap: break-word;">

    <!--navbar-->
    <div class="container-fluid p-0">

        <!--First Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="../images/cart3.png" alt="Logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3">
                            <a href="" class="nav-link text-dark">WELCOME GUEST</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-light bg-black text-center">LOGOUT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--Second Child-->
        <div class="bg-dark">
            <h3 class="text-center text-light p-2">MANAGE DETAILS</h3>
        </div>

        <!--Third Child-->
        <div class="row">
            <div class="col-md-12 bg-light p-1 d-flex align-items-center">
                <div class="px-3">
                    <a href="#"><img
                            src="../images/young-woman-summer-clothes-listening-music-wearing-headphones-singing-along-favorite-song-dancing-earphones-standing-against-blue-background.jpg"
                            alt="admin" class="admin_image"></a>
                    <p class=" text-dark text-center">Admin Name</p>
                </div>
                <div class="button text-center">

                    <!--button*10>a.nav-link.text-light.bg-dark.my-1-->

                    <button class="my-3"><a href="insert_products.php"
                            class="nav-link text-light bg-secondary m-1">INSERT
                            PRODUCTS</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">VIEW PRODUCTS</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-secondary m-1">INSERT
                            CATEGORIES</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">VIEW CATEGORIES</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-secondary m-1">INSERT
                            BRANDS</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">VIEW BRANDS</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">ORDERS</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">PAYMENTS</a></button>
                    <button><a href="" class="nav-link text-light bg-secondary m-1">USERS</a></button>

                </div>
            </div>
        </div>

        <!--Fourth Child-->
        <div class="class-container m-3">
            <?php
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brands.php');
                }
            ?>
        </div>

        <!--Last Child-->
        <div class="bg-light p-2 text-center" style="position:absolute; bottom:0px; left: 600px;">
            <p>All rights reserved © - Designed by Manushi - 2022</p>
        </div>
    </div>


    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>