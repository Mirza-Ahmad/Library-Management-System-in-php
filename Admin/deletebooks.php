<?php
include "connection.php";
if(isset($_POST['submit1']))
     {
            $Query="SELECT bid FROM `books`";
            $res=mysqli_query($conn, $Query);
            if(mysqli_num_rows($res)==$_POST['bid'])
            {
            if(isset($_SESSION['login_user']))
                  {
                   $query="DELETE FROM `books` WHERE bid='".$_POST[bid]."'";
                   if(mysqli_query($conn, $query))
                       {
                         echo '<script>alert("Your books record is deleted successfully")</script>';
                         header('refresh: 0 ');
                       }
                  else
                       {
                         echo '<script>alert("Sorry! Your books record is not deleted try again';
                       }

                   }

                  else
                        {
                         echo '<script>alert("You need to login first")</script>';
                        }
            } 
  else
       {

        echo '<script>alert("This type of book id is not exits")</script>';

        }
      }
?>