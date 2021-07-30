<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/links.php')?>   
    <title>Feedback</title>
    <style>
     body
     {
         background-image: url("images/yt.png");
         background-repeat: no-repeat;
         background-size: 1294px 700px;
     }
     .wrapper
     {
         padding: 10px;
         margin: -20px auto;
         width: 900px;
         height: 600px;
         background-color: rgb(60, 65, 53);
         /* opacity: .8; */
         color: white;
     }
     .form-control
     {
        height: 70px;
        width: 59%;
     }
     #trl
     {
        width: 80px; 
        height:40px; 
        color: white; 
        background-color: darkolivegreen;
        border-radius: 5px;
     }
     .scroll
     {
      width: 100%;
      height: 400px;
      overflow: auto;
     }
     .wrapper:hover{
         opacity: 0.9;
     }
    </style>
</head>
<body>
 <?php include ('navbar.php');?>
  <div class="wrapper">
  <h4>If you have any questions or suggestions please comment below.</h4>
  <form  action="" method="post">
  <input type="text" class="form-control" required="" name="comment" placeholder="Write something..."><br>
  <input type="submit" class="form-contol" name="submit" value="comment" id="trl">
</form>
<br>
<div class="scroll">
<?php
if(isset($_POST['submit']))
{
if(isset($_SESSION['login_user']))
{
$sql="INSERT INTO `comments` (username, comment) VALUES('".$_SESSION['login_user']."' , '".$_POST['comment']."')";
if(mysqli_query($conn, $sql))
{
$q="SELECT * FROM `comments` ORDER BY id DESC;";
$res=mysqli_query($conn, $q);
echo "<table class='table table-bordered'>";
while($row=mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>"; echo $row['username']; echo "<td>";
echo "<td>"; echo $row['comment']; echo "</td>"; 
echo "</tr>";
}
echo "</table>";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
else
{
  echo "<h2 style='text-align: center;'><b>";
  echo "You need to login first then you can give the comment";
  echo "</h2></b>";
}
}
?>
</div>
</div>
</div>
</body>
</html>