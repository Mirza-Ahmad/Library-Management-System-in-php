<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/links.php'); ?>
    <title>Book request</title>
    <style>
     .srch
     {
       padding-left: 860px;
     }
     .form-control
     {
       margin-top: 13px;
       background-color: black;
       color: white;
     }
     #qw
     {
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
.sidenav a 
{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover 
{
  color: #f1f1f1;
}
.sidenav .closebtn 
{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.container
{
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
<a href="issue_info.php">Issue information</a>
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
<div class="container">
<div class="srch">
<form method="post" action="approve_process.php"><br>
<input type="text" class="form-control" name="username" placeholder="User name" required="">
<input type="text" class="form-control" name="bid" placeholder="Book id" required=""><br>
<button type="submit" name="submit" class="btn btn-default" style=" background-color: black;">Submit</button><br>
</form>
</div>
<h3 style="text-align: center;">Request of Book</h3>
<?php
if(isset($_SESSION['login_user']))
{
  $query="SELECT student.username, roll, books.bid, name, authors, edition,
  status FROM student INNER JOIN issue_book ON student.username=issue_book.username INNER JOIN books ON issue_book.bid=books.bid WHERE issue_book.approve=''";
  $res=mysqli_query($conn, $query);
  if(mysqli_num_rows($res)==0)
  {
   echo "<h2 style='text-align: center;'><b>";
   echo "There is no pending request";
   echo "</h2></b>";
  }
  else
  {
      echo "<table class='table table-bordered  table-striped' >";
      echo "<tr style='background-color: #6db6b9e6'>";
      echo "<th>"; echo"Student user_name"; echo"</th>";
      echo "<th>"; echo"Roll no"; echo"</th>";
      echo "<th>"; echo"Book id"; echo"</th>";
      echo "<th>"; echo"Book name"; echo"</th>";
      echo "<th>"; echo"Author name"; echo"</th>";
      echo "<th>"; echo"edition"; echo"</th>";
      echo "<th>"; echo"status"; echo"</th>";
    echo "</tr>";
  while($row = mysqli_fetch_assoc($res))
  {   
     echo " <td>"; echo $row['username']; echo "</td>";
     echo " <td>"; echo $row['roll']; echo "</td>";
     echo " <td>"; echo $row['bid']; echo "</td>";
     echo " <td>"; echo $row['name']; echo "</td>";
     echo " <td>"; echo $row['authors']; echo "</td>";
     echo " <td>"; echo $row['edition']; echo "</td>";
     echo " <td>"; echo $row['status']; echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  }
}
else
{
  echo "<h2 style='text-align: center;'><b>";
  echo "You need to login first to see the student request";
  echo "</h2></b>";
}
     ?>
    </div>
</body>
</html>