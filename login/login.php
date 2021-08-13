<?php
    if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "shahed" && $password == "1122"){
        echo "Logged in successfully";
    }else{
        header("Location: https://memegenerator.net/img/instances/82462409.jpg");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login to Gray Hate Hacker's Community</title>
</head>
<body class="overflow-hidden">
        <!-- =========== Login Part ========= -->
        <section id="Login" class="d-flex align-items-center justify-content-center">
            <div class="color position-absolute"></div>
            <div class="color position-absolute"></div>
            <div class="color position-absolute"></div>
            <div class="box position-relative">
                <div class="square position-absolute" style="--i:0;"></div>
                <div class="square position-absolute" style="--i:1;"></div>
                <div class="square position-absolute" style="--i:2;"></div>
                <div class="square position-absolute" style="--i:3;"></div>
                <div class="square position-absolute" style="--i:4;"></div>
                <div class="container position-relative d-flex justify-content-center align-items-center">
                    <form action="login.php" method="POST" class="form position-relative w-100 h-100">
                        <h2 class="position-relative text-white ">Login</h2>
                        <div class="inputBox w-100 mt-20px">
                            <span id="unameResponse"></span>
                            <input class="border-0 outline-none w-100" type="text" name="username" id="uname" placeholder="Username" onkeyup="findUname()">
                        </div>
                        <div class="inputBox w-100 mt-20px">
                            <input class="border-0 outline-none w-100" type="password" name="password" id="pass" placeholder="Password">
                        </div>
                        <div class="inputBox w-100 mt-20px">
                            <input class="bg-white mb-20px border-0 outline-none w-100" type="submit" name="login" id="" value="Login">
                        </div>
                        <p class="forget text-white">Forget Password? <a class="text-white" href="#">click here</a></p>
                        <p class="forget text-white">Do not have an acccount? <a class="text-white" href="#" class="btn signUpBtn">Sign Up</a></p>

                    </form>
                </div>
            </div>
        </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>