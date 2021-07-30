  
  <?php
  include "connection.php";
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/links.php'); ?>
    <title>student INFORMATION</title>
    <style>
     .srch
     {
       padding-left: 890px;
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
.hcol a:hover{
color: white;
width: 300px;
background-color: #00544c;
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
<div class="hcol">
<a href="request.php">Book request</a>
<a href="issue_info.php">Issue information</a>
<a href="Expired_info.php">Expired information</a>
</div>
</div>
<div id="main">
  <span style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<script>
function openNav() 
{
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "gray";
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
<form class="navbar-form" method="post" name="form1" action="search.php">
<input type="text" class="form-control" name="search" required="" placeholder="Student username..."  id="qw">
<button style="background-color: #6db6b9e6;" type="submit" name="submit" required="" class="form-control">
<span class="glyphicon glyphicon-search"></span>
</button>
</form>
</div>
    <?php
    $res=mysqli_query($conn, "SELECT * FROM student;");
    echo "<h2 style='text-align: center; background: rgb(17, 16, 27); color: white; height: 40px; margin: auto 0px; margin-top: 20px;'>List of students </h2>";
    echo "<table class='table table-bordered  table-striped' >";
      echo "<tr style='background-color: #6db6b9e6'>";
      echo "<th>"; echo"firstname"; echo"</th>";
      echo "<th>"; echo"lastname"; echo"</th>";
      echo "<th>"; echo"username"; echo"</th>";
      echo "<th>"; echo"pass"; echo"</th>";
      echo "<th>"; echo"email"; echo"</th>";
      echo "<th>"; echo"contact"; echo"</th>";
      echo "<th>"; echo"roll"; echo"</th>";
    while($row=mysqli_fetch_assoc($res))
    {
       echo "<tr>";
       echo "<td><a class = 'eventi' href = '#' style='text-decoration: none; color: black;'>" . $row['firstname']. "</a></td>";
       echo "<td><a class = 'eventi' href = '#' style='text-decoration: none; color: black;'>" . $row['lastname']. "</a></td>";
       echo "<td><a class = 'eventi' href = '#' style='text-decoration: none; color: black;'>" . $row['username']. "</td>";
       echo "<td><a class = 'eventi' href = '#' style='text-decoration: none; color: black;'>" . $row['pass']. "</td>";
       echo "<td><a class = 'eventi' href = '#'style='text-decoration: none; color: black;'>" . $row['email']. "</td>";
       echo "<td><a class = 'eventi' href = '#'style='text-decoration: none; color: black;'>" . $row['contact']. "</td>";
       echo "<td><a class = 'eventi' href = '#'style='text-decoration: none; color: black;'>" . $row['roll']. "</td>";
       echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
</body>
</html>