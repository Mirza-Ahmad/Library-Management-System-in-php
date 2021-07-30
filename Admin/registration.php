    
<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/links.php');?>
    <title>Admin SIGNUP page</title>
    <style>
        section{
        margin-top: -20px;
    }
        input:hover{
        transform: scale(1.2);
        width : 200px; 
        }
        #mv:hover{
            transform: scale(1.2);
            width : 70px;
        }
    </style>
</head>
<body>
    <?php include ("navbar.php");?>
    <section>
        <div class="reg_img">
            <br><br><br>
         <div class="container-xl">
            <div class="box1">
                <h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Library Management <br>
                    System</h1>
                <h1 style="text-align: center; font-size: 25px; font-family: Lucida Console; padding: 20px;">User
                    Registration
                    Form</h1>
                <form name="Registration" action="process.php" method="post">
                    <div class="loginin">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="" id="er"><br>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="" id="er"><br>
                        <input type="text" class="form-control" name="username" placeholder="Username" required="" id="er"><br>
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="" id="er"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email" required="" id="er"><br>
                        <input type="text" class="form-control" name="contact" placeholder="Phone" required="" id="er"><br>
                        <input class="form-control" type="checkbox" name="checkbox" required="" style="margin-left:103px; height: 27px; width: 20px;"> <h5 style="margin-top: -19px; margin-left: -59px;">Remember me</h5><br>
                        <input type="submit" class="btn btn-light" name="submit" value="submit" style="color: black;" id="mv">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <footer class="container-fluid" id="wq" style="background-color: rgb(17, 16, 27); margin-top : 120px;">
        <br><br>
        <h5 class="fdes" style="font-size: 15px;">Designed By Mirza Ahmad</h5>
        <p class="wdes" style="font-size: 17px;">&copy;Copyright 2021 Library Management</p>
    </footer>
</body>
</html>