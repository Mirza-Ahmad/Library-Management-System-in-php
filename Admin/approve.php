<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/links.php');?>
    <title>approve</title>
    <style>
     .srch{
       padding-left: 860px;
     }
     .form-control{
       margin-top: 13px;
       background-color: black;
       color: white;
       width: 340px;
     }
     .approve{
        margin-left: 35%;
     }
     #qw{
      width: 170px;
      height: 35px;
      transition: width 2s;
     }
     #qw:hover
     {
     width: 250px;
     text-align: center;
     }
     body 
     {
  background-image: url("images/po.jpeg");
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
     }
.sidenav 
{
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(60, 65, 53);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.container{
  height: 500px;
  background-color: black;
  opacity: 0.9;
  color: white;
}
#main 
{
  transition: margin-left .5s;
  padding: 16px;
}
@media screen and (max-height: 450px) 
{
  .sidenav {
            padding-top: 15px;
           }
  .sidenav a {
      font-size: 18px;
      }
}
    </style>
</head>
<body>
<?php include ("navbar.php");?>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div style="color: white; margin-left: 90px;">
<?php
if(isset($_SESSION['login_user']))
{
echo "<img class='img-circle profile_img'  src='images/".$_SESSION['pic']."' height=90 width=90>";
echo "<br><br> " .$_SESSION['login_user'];
}
?>
</div>
<a href="add.php">Add Books</a>
<a href="request.php">Book request</a>
<a href="issue_information">Issue information</a>
</div>
<div id="main">
  <span style="font-size:30px; cursor:pointer; color: white;" onclick="openNav()">&#9776; Menu</span>
<script>
function openNav() 
{
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "#8a734d";
}
function closeNav() 
{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
</div>
  <div class="container"><br>
    <h3 style="text-align: center; color: white;">Approve Request</h3><br>
  <form class="approve" method="post" action="approvepage.php">
     <input type="text" class="form-control" name="approve" placeholder="Approve or not" required=""><br>
     <input type="text" class="form-control" name="issue" placeholder="Issue Date yyyy-mm-dd" required=""><br>     
      <input type="text" class="form-control" name="Returns" placeholder="Return Date yyyy-mm-dd" required=""><br>  
      <button class="btn btn-default" type="submit" name="submit" style="margin-left: 123px;">Approve</button>
  </form>  
</div>                  
</body>
</html>