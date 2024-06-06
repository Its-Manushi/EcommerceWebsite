<!--connect php-->
<?php
include("./includes/connect.php");
include("./functions/common_function.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StarBuy-Login</title>

    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font Awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .hero {
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        top:30px;
        }

        .form-box {
        width: 420px;
        height: 650px;
        position: relative;
        margin: auto;
        background: #fff;
        overflow: hidden;
        }

        .button-box {
        width: 250px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #5500aa2c;
        border-radius: 30px;
        }

        .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        }

        #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 125px;
        height: 100%;
        background: linear-gradient(to right, #6c6cec, #a5cae8);
        border-radius: 30px;
        transition: 0.5s;
        }

        .input-groups {
        top: 80px;
        position: absolute;
        width: 320px;
        transition: 0.5s;
        }

        .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
        }

        .submit-btn {
        width: 75%;
        padding: 10px 30px;
        position: relative;
        top: 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, #6c6cec, #a5cae8);
        border: 0;
        outline: none;
        border-radius: 30px 30px;
        }

        .check-box {
        margin: 30px 10px 30px 0;
        }

        span {
        color: #777;
        font-size: 12px;
        bottom: 28px;
        left: 30px;
        position: absolute;
        }

        #login {
        left: 100px;
        top: 150px;
        }

        #signup {
        left: 50px;
        top: 100px;
        }

        .btn-acc{
          border:0px;
          text-decoration:underline;
        }

    </style>

  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">
            Log In
          </button>
          <button type="button" class="toggle-btn" onclick="signup()">
            Sign Up
          </button>
        </div>

        <form id="login" class="input-groups" onsubmit="return auth()" action="" method="POST" >
        <input
            type="text"
            class="input-field"
            placeholder="Username"
            id="user_username" 
            name="user_username" 
            autocomplete="off"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Enter Password"
            id="user_password"
            name="user_password"
            autocomplete="off"
            required
          />
          
          <button type="submit" class="submit-btn" name="user_login">Log in</button>
          <p style="position:relative; top:50px; text-align:center" class="small fw-bold">Don't have an account? <button class="btn-acc text-danger" onclick="signup()">SignUp</button></p>
        </form>
        <script>
          
          function auth(){
            var a = document.getElementById("userr").value;
            var b = document.getElementById("pwd").value;

            console.log(a);
            if(a == "admin" && b == "admin")
            {
              window.location.href = "navbar2.html";
              alert("Welcome "+ a +"!");
            }
            else if(a == "user" && b == "user")
            {
              window.location.href = "navbar.html";
              alert("Welcome "+ a +"!");
            }
            else
            {
              alert("Enter correct username or password");
            }
          }
        </script>


        <form method="POST" action="" class="input-groups" enctype="multipart/form-data" id="signup">
          <input
            type="text"
            class="input-field"
            placeholder="Username"
            id="user_username" 
            name="user_username" 
            autocomplete="off"
            required
          />
          <input
            type="email"
            class="input-field"
            placeholder="Email Id"
            id="user_email"
            name="user_email"
            required
          />
          <input
            type="file"
            class="input-field"
            name="user_image"
            id="user_image"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Enter Password"
            id="user_password"
            name="user_password"
            autocomplete="off"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="Confirm Password"
            id="conf_password"
            name="conf_password"
            autocomplete="off"
            required
          />
          <input
            type="text"
            class="input-field"
            placeholder="Address"
            id="user_address"
            name="user_address"
            autocomplete="off"
            required
          />
          <input
            type="tel"
            class="input-field"
            placeholder="Contact No."
            name="user_contact"
            id="user_contact"
            required
          />
          <button type="submit" class="submit-btn" name="user_register">Sign Up</button>
          <p style="position:relative; top:50px; text-align:center" class="small fw-bold">Already have an account? <button class="btn-acc text-danger" onclick="login()">Login</button></p>
        </form> 
      </div>
    </div>
    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("signup");
      var z = document.getElementById("btn");

      function signup() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "125px";
      }

      function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
      }

      login();
    </script>

    <?php
      if(isset($_POST['user_register'])){
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $conf_password = $_POST['conf_password'];
        $user_address = $_POST['user_address'];
        $user_contact = $_POST['user_contact'];
        $user_username = $_POST['user_username']; 
        $user_image = $_FILES['user_image']['name']; 
        $user_image_temp = $_FILES['user_image']['tmp_name']; 
        $user_ip = getIPAddress();

        //insert query
        move_uploaded_file($user_image_temp,"./user_images/$user_image");

        $insert_query = "insert into usertable (username,user_email,user_password,user_image,user_ip,user_address,user_mobile)
        values('$user_username','$user_email','$user_password','$user_image','$user_ip','$user_address','$user_contact')";

        $sql = mysqli_query($conn,$insert_query);

        if($sql){
          echo "<script>alert('Data Inserted Successfully')</script>";
        }
        else{
          die(mysqli_error($conn));
        }
      }
    ?>

    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>
