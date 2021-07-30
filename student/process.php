<?php
include "connection.php";
      if(isset($_POST['submit']))
      {	 
           $sql = "SELECT username FROM `student` WHERE username = '".$_POST['username']."' ";
           $res=mysqli_query($conn, $sql);
           if(mysqli_num_rows($res) <= 0)
           {
              $Query = "INSERT INTO `student` (firstname, lastname, username, pass, email, contact, roll, pic) 
                  VALUES('".$_POST['firstname']."' , '".$_POST['lastname']."', '".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['contact']."', '".$_POST['roll']."', 'n1.png')";
              if (mysqli_query($conn, $Query)) 
              {
                echo '<script>alert("Registration are successfull")</script>';
                header( "refresh:0; url= student_login.php" );
              }
          }
          else
          {
            echo '<script>alert("Reapeation in username is not allowed")</script>';
            header( "refresh:0; url= registration.php" );
          }
      }
           mysqli_close($conn);
      ?>
      