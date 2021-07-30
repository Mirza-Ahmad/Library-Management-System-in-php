<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/links.php'); ?>
    <title>Library Management website</title>
    <style>
body
{
    background-image: url("images/pic.png");
    width: 100%;
}
nav
{
float: right;
word-spacing: 40px;
padding: 30px;
}
nav li
{
display: inline-block;
line-height: 40px;
}
nav li:hover
{
    background: #333;
    transform: scale(1.1);
    width: 100px;
    text-align: center;
}
.timing:hover
{
    background: #333;
    opacity: .5;
    transform: scale(1.2);
}
    </style>
</head>
<body>
    <!-- <div id="wrap"> -->
        <header>
            <!-- <div class="logo">
                <img src="images/images-removebg-preview.png">
                <h5 class="hcolor">ONLINE LIBRARY MANAGEMENT SYSTEM</h5>
            </div> -->
            <!-- <nav>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="student_login.html">Student_login</a></li>
                    <li><a href="">Books</a></li>
                    <li><a href="registration.html">Registration</a></li>
                    <li><a href="">Feedback</a></li>
                </ul>
            </nav> -->
            <?php
             if(isset($_SESSION['login_user']))
             {
            ?>
                <nav class="navbar navbar-inverse navbar-left" style="width: 100%; height: 100px; background-color: rgb(79, 83, 72)" id="ok">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand active" style="word-spacing: -1px; font-size: 14px; margin-top: 25px;">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
                    <div class="logo">
                        <img src="images/images-removebg-preview.png">
                    </div>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                        <li><a href="books.php">Books</a></li>
                        <!-- <li><a href="registration.html">Registration</a></li> -->
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                    </div>
                    </nav>
                <?php
             }
             else
             {
             ?>
                <nav class="navbar navbar-inverse navbar-left" style="width: 100%; height: 100px; background-color: rgb(79, 83, 72)" id="ok">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand active" style="word-spacing: -1px; font-size: 14px; margin-top: 25px;">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
                    <div class="logo">
                        <img src="images/images-removebg-preview.png">
                    </div>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="admin.php">Login</a></li>
                        <li><a href="books.php">Books</a></li>
                        <!-- <li><a href="registration.html">Registration</a></li> -->
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                    </div>
                    </nav>
              <?php
             }
            ?> 
        </header>
        <section>
            <!-- <div class="section_img"> -->
                <br><br><br><br>
                <div class="timing">
                    <br><br><br>
                    <h2>Welcome to Library</h2>
                    <h4>Open at 8:00 am</h4>
                    <h4>Close at 17:00 pm</h4>
                <!-- </div> -->
            </div>
        </section>
        <!-- <footer class="homef">
            <br><br>
            <h5 class="fdes">Designed By Mirza Ahmad</h5>
            <p class="wdes">&copy;Copyright 2021 </p>
        </footer> -->
        <!-- <footer class="container-fluid" id="wq" style="background-color: rgb(79, 83, 72); margin-top: 4px;">
            <br><br>
            <h5 class="fdes" style="font-size: 15px;">Designed By Mirza Ahmad</h5>
            <p class="wdes" style="font-size: 17px;">&copy;Copyright 2021 Library Management</p>
        </footer> -->
    <!-- </div> -->
    <?php
    include "footer.php";
    ?>
</body>
</html>