<?php
    include("../includes/connect.php"); 

    if(isset($_POST["insert_cat"])){
        $category_title=$_POST["cat_title"];

        //select data from database
        $select_query = "select * from categories where category_title='$category_title'";
        $result1 = mysqli_query($conn,$select_query);
        $num = mysqli_num_rows($result1);

        if($num>0){
            echo "<script>alert('This Category is already inserted!')</script>";
        }
        else{
            $insert_query = "insert into categories (category_title) values ('$category_title')";
            $result = mysqli_query($conn,$insert_query);

            if($result){
                echo "<script>alert('Category has been inserted successfully')</script>";
            }
        }
    }
?>

<h3 class="text-center my-3">INSERT CATEGORIES</h3>

<form action="" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Categories" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-dark text-light p-2 my-2 border-0 rounded" name="insert_cat"
            value="Insert Categories">

    </div>
</form>