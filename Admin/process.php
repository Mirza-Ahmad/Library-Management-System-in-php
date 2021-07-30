<?php
include "connection.php";
session_start();
      if(isset($_POST['submit']))
      {	 
           $count=0;
           $sql="SELECT username FROM `admin`";
           $res=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_assoc($res))
           {
               if($row['username']==$_POST['username'])
               {
               $count=$count+1;    
               }
           }
           if($count==0)
           {
              mysqli_query($conn, "INSERT INTO `admin`(firstname, lastname, username, pass, email, contact, pic)
              VALUES('".$_POST['firstname']."' , '".$_POST['lastname']."', '".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."', '".$_POST['contact']."', 'n1.png')");
            $email=$_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)===false)
            {
             echo '<script>alert("Please enter validate email address")</script>';
             header( "refresh:0; url= registration.php" );
            }
            else
            {
            echo '<script>alert("Registration are succesfull")</script>';
            header( "refresh:0; url= admin.php" );
            }
          }
           else
           {
            echo '<script>alert("Sorry!This username is already")</script>';
            header( "refresh:0; url=registration.php" );
           }
      }
      ?>