<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/links.php'); ?>
    <title>Document</title>
    <style>
    section{
        margin-top: -20px;
    }
    input:hover
    {
        transform: scale(1.2);
        width : 280px; 
    }
        #mv:hover
        {
            transform: scale(1.2);
            width : 70px;
        }
    </style>
</head>
<body>
   <?php include ("navbar.php");?>
    <section>
        <div class="login_img">
            <br><br><br>
     <div class="container-xl">
            <div class="box">
                <h1 style="text-align: center; font-size: 35px; font-family: Lucida Console; padding: 5px;">Library Management <br>
                    System</h1>
                <h1 style="text-align: center; font-size: 25px; font-family: Lucida Console; padding: 10px;">User Login
                    Form</h1>
                <form name="login" action="admin_process.php" method="post">
                    <div class="loginin">
                        <input class="form-control" type="text" name="username" placeholder="Username" required="" id="er"><br>
                        <input class="form-control" type="password" name="pass" placeholder="Password" required="" id="er"><br>
                        <input class="form-control" type="checkbox" name="checkbox" required="" style="margin-left:112px; height: 27px; width: 20px;"> <h5 style="margin-top: -19px; margin-left: -79px;">Remember me</h5><br>
                        <input type="submit" class="btn btn-default" name="submit" value="submit" style="height: 30px; width: 70px;" id="mv">
                    </div>
                </form>
                <br>
                <p class="forchange">
                    <a href="update_password.php" style="text-decoration: none; color: white;">Forgot password?</a><br>
                    New to this website?<a href="registration.php" style="text-decoration: none; color: white;">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    </section>
    <!-- <footer class="re">
        <br><br>
        <h5 class="fdes">Designed By Mirza Ahmad</h5>
        <p class="wdes">&copy;Copyright 2021 Library Management</p>
    </footer> -->
    <!-- <div class="jumbotron">
        <h4 class="fdes">Designed By Mirza Ahmad</h5>
        <h5 style="text-align: center; color: white; margin: auto -1px;">&copy;Copyright 2021 Library Management</h6>
    </div> -->
    <footer class="container-fluid" id="wq" style="background-color: rgb(60, 65, 53);">
        <br><br>
        <h5 class="fdes" style="font-size: 15px;">Designed By Mirza Ahmad</h5>
        <p class="wdes" style="font-size: 17px;">&copy;Copyright 2021 Library Management</p>
    </footer>
</body>
</html>