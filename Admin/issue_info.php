<?php
  include "connection.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/links.php');?>
        <title>issue information</title>
    <style>
     .srch{
       padding-left: 860px;
     }
     .form-control{
       margin-top: 13px;
       background-color: black;
       color: white;
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
  background-image: url("images/mx.jpeg");
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
.scroll
{
  width: 100%;
  overflow: auto;
  height: 500px;
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
<a href="Expired_info.php">Expired information</a>
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
<h3 style="text-align: center;">Information of lend books</h3>
<?php
if(isset($_SESSION['login_user']))
{
  $Query="SELECT student.username, roll, books.bid, name, authors, 
      edition, issue, issue_book.Returns FROM student INNER JOIN issue_book ON 
        student.username=issue_book.username INNER JOIN books ON issue_book.bid=books.bid WHERE issue_book.approve='YES' 
          ORDER BY issue_book.Returns ASC";
      $res=mysqli_query($conn, $Query);
      echo '<div class="scroll">';
      echo "<table class='table table-bordered  table-striped' >";
      echo "<tr style='background-color: #6db6b9e6'>";
      echo "<th>"; echo"Student user_name"; echo"</th>";
      echo "<th>"; echo"Roll no"; echo"</th>";
      echo "<th>"; echo"Book id"; echo"</th>";
      echo "<th>"; echo"Book name"; echo"</th>";
      echo "<th>"; echo"Author name"; echo"</th>";
      echo "<th>"; echo"edition"; echo"</th>";
      echo "<th>"; echo "issue_date"; echo"</th>";
      echo "<th>"; echo "Return_date"; echo"</th>";
      echo "</tr>";
      $c=0;
        while($row=mysqli_fetch_assoc($res))
        {
          $d=date("Y-m-d");
          if($d>$row['Returns'])
          {
            $c++;
            $var='<p style="color: white; background-color: olive;">Expired</p>';
            $Q="UPDATE `issue_book` SET approve='$var' WHERE Returns='".$row['Returns']."' AND approve='yes' limit $c";
            mysqli_query($conn, $Q);
          }
          echo "<tr style='color: white; background-color: black;'>";
          echo " <td>"; echo $row['username']; echo "</td>";
          echo " <td>"; echo $row['roll']; echo "</td>";
          echo " <td>"; echo $row['bid']; echo "</td>";
          echo " <td>"; echo $row['name']; echo "</td>";
          echo " <td>"; echo $row['authors']; echo "</td>";
          echo " <td>"; echo $row['edition']; echo "</td>";
          echo " <td>"; echo $row['issue']; echo "</td>";
          echo " <td>"; echo $row['Returns']; echo "</td>";
         echo "</tr>";
        }
       echo "</table>";
       echo '</div>';
}
else
{
  echo "<h2 style='text-align: center;'><b>";
  echo "You need to login first to see the lend information";
  echo "</h2></b>";
}
?>
</div>
</div>
</body>
</html>