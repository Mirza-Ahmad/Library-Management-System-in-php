<?php
include "connection.php";
session_start();
  if(isset($_POST['submit']))
  {
    $Q="SELECT * FROM student WHERE username='".$_POST[username]."' 
          AND pass='".$_POST[pass]."'";
    $R=mysqli_query($conn, $Q);
    $Objrow=mysqli_fetch_object($R);
  if(($Objrow->username == $_POST['username']) && ($Objrow->pass == $_POST['pass']))
   {
    $_SESSION['login_user']=$_POST['username'];
    $_SESSION['pic']=$Objrow->pic;
    echo '<script>alert("Login are successfull")</script>';
    header("refresh:0; url=home.php" );
    exit();
   }
  else
   {
    echo '<script>alert("please try again! Sorry incorrect details")</script>';
    header( "refresh:0; url=student_login.php" ); 
   }
 }
?>