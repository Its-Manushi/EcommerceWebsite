<?php 

    $conn=mysqli_connect("localhost:3307","root","root","mystore");

    if(!$conn){
        die(mysqli_error($conn));
    }
    
?>