<?php
include "connection.php";
session_start();
if(isset($_POST['submit1']))
{
    if(isset($_SESSION['login_user']))
     {
        $Query="INSERT INTO `issue_book` (username, bid, approve, issue, Returns) VALUES(
          '".$_SESSION['login_user']."' , '".$_POST['bid']."', '', '', '')";
            if(mysqli_query($conn, $Query))
              {
                echo '<script>alert("Book Request successfull")</script>';
                header("Refresh:0; url=request.php");
              }
            else
              {
                echo '<script>alert("Book Request not successfull")</script>';
                header("Refresh:0; url=books.php");
              }
     }
     else
       {
         echo '<script>alert("You must login to first")</script>';
         header("Refresh:0; url=books.php");
       }
}
?>