<?php
    include("../includes/connect.php"); 

    if(isset($_POST["insert_brand"])){
        $brand_title=$_POST["brand_title"];

        //select data from database
        $select_query = "select * from brands where brand_title='$brand_title'";
        $result1 = mysqli_query($conn,$select_query);
        $num = mysqli_num_rows($result1);

        if($num>0){
            echo "<script>alert('This Brand is already inserted!')</script>";
        }
        else{
            $insert_query = "insert into brands (brand_title) values ('$brand_title')";
            $result = mysqli_query($conn,$insert_query);

            if($result){
                echo "<script>alert('Brand has been inserted successfully')</script>";
            }
        }
    }
?>

<h3 class="text-center my-3">BRANDS</h3>

<form action="" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Brands" aria-label="brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-dark text-light p-2 my-2 border-0 rounded" name="insert_brand"
            value="Insert Brands">
    </div>
</form>