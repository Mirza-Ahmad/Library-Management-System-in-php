<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/links.php');?>
    <title>Book request</title>
    <style>
     .srch{
       padding-left: 920px;
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
<a href="books.php">Books</a>
<a href="request.php">Book request</a>
<a href="issue_info.php">Issue information</a>
</div>
<div id="main">
  <span style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; Menu</span>
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
<?php
if(isset($_SESSION['login_user']))
     {
       $q="SELECT * FROM `issue_book` where username='".$_SESSION['login_user']."'";
       $res=mysqli_query($conn, $q);
       if(mysqli_num_rows($res)==0)
       {
        echo '<script>alert("There is no pending request")</script>';
       }
       else
       {
        echo "<table class='table table-bordered  table-striped' >";
        echo "<tr style='background-color: #6db6b9e6'>";
          echo "<th>"; echo"Bood-id"; echo"</th>";
          echo "<th>"; echo"Approve status"; echo"</th>";
          echo "<th>"; echo"Issue Date"; echo"</th>";
          echo "<th>"; echo"Return Date"; echo"</th>";
        echo "</tr>";
      while($row = mysqli_fetch_assoc($res))
      {   
         echo " <td>"; echo $row['bid']; echo "</td>";
         echo " <td>"; echo $row['approve']; echo "</td>";
         echo " <td>"; echo $row['issue']; echo "</td>";
         echo " <td>"; echo $row['Returns']; echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
       }
     }
     else
     {
         echo '<div class="alert alert-info alert-dismissible" style="width: 540px; margin-left: 320px;" >
         <a href="#" class="close" data-dismiss="alert" aria-lable="close">&times;</a>
         <strong>PLEASE LOGIN FIRST THEN YOU SEE THE REQUEST INFORMATION</strong>
         </div>
         ';
     }
    ?>
</body>
</html>