
<?php
 include "connection.php";
  if(isset($_POST['submit']))
  {
     $Q="SELECT bid FROM `books` ORDER BY bid ASC";
     $res=mysqli_query($conn, $Q);
     $check=mysqli_fetch_array($res);
    if($check['bid']!=$_POST['bid'])
    {
     if(isset($_SESSION['login_user']))
     { 
      $query="INSERT INTO `books` (bid, name, authors, edition, status, quantity, department) 
      VALUES('".$_POST['bid']."', '".$_POST['name']."', '".$_POST['authors']."', '".$_POST['edition']."', 
      '".$_POST['status']."', '".$_POST['quantity']."', '".$_POST['department']."')";
       if(mysqli_query($conn, $query))
       {
        echo '<script>alert("Books information added sucessfully")</script>';
       }
       else
       {
       echo '<script>alert("Sorry! Books information is not added into database")</script>';
       }
    }
      else
        {
            echo '<script>alert("You need to login login first")</script>';
        }
    }
        else
         {
             echo '<script>alert("Repeatation is not allowed in book id")</script>';
         }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/links.php');?>
    <title>student INFORMATION</title>
    <style>
     .srch
     {
       padding-left: 1000px;
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
  background-color: #DEB887;
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
background-color: #D2B48C;
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
.book{
    width: 270px;
    margin: 0px auto;
    height: 30px;
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
<a href="add.php">Add books</a>
<a href="books.php">Delete books</a>
<a href="request.php">Book request</a>
<a href="issue_info.php">Issue information</a>
</div>
</div>
<div id="main">
  <span style="font-size:30px; cursor:pointer; color: white;" onclick="openNav()">&#9776; Menu</span>
  <div class="container" style="background-color: black; height: 540px; width: 400px; padding: 34px; margin-top: -78px;">
     <h2 style="color: white; font-family: Lucida Console; text-align: center; margin-top: -10px;">ADD NEW BOOKS</h2><br>
     <form action="" method="post" class="book">
          <input type="text" name="bid" class="form-control" required="" placeholder="Book id"><br>
          <input type="text" name="name" class="form-control" required="" placeholder="Book name"><br>
          <input type="text" name="authors" class="form-control" required="" placeholder="Author name"><br>
          <input type="text" name="edition" class="form-control" required="" placeholder="Edition"><br>
          <input type="text" name="status" class="form-control" required="" placeholder="Status"><br>
          <input type="text" name="quantity" class="form-control" required="" placeholder="Quantity"><br>
          <input type="text" name="department" class="form-control" required="" placeholder="Department"><br>
          <button type="submit" class="btn btn-info" name="submit" style="margin-left: 70px ;">ADD BOOKS</button>
       </form>
  </div>
<script>
function openNav() 
{
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "#D2B48C";
}
function closeNav() 
{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#DEB887";
}
</script>
</div>
</body>
</html>