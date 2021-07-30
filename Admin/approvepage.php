<?php
include "connection.php";
session_start();
if(isset($_POST['submit']))
{
   $Query="UPDATE `issue_book` SET approve='".$_POST['approve']."' , issue='".$_POST['issue']."' , Returns='".$_POST['Returns']."'
       WHERE username='".$_SESSION['username']."' AND  bid='".$_SESSION['bid']."'";
          mysqli_query($conn, $Query);
            mysqli_query($conn, "UPDATE `books` SET quantity=quantity+1 WHERE bid='".$_SESSION['bid']."'");
              $query="SELECT quantity FROM `books` WHERE bid='".$_SESSION['bid']."'";
                  $RES=mysqli_query($conn, $query);
                    while($row=mysqli_fetch_assoc($RES))
                      {
                       if($row['quantity']==0)
                         {
                           mysqli_query($conn, "UPDATE `books` SET status='Not available' WHERE bid='".$_SESSION['bid']."'");
                         }
                      }
                 echo '<script>alert("Updated is successfully")</script>';
                    header('Refresh: 0; url=request.php');
}
    else
    {
        echo '<script>alert("Not updated")</script>';
    }
?>