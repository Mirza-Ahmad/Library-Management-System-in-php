<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('includes/links.php')?>
       <title>PROFILE</title>
        <style>
         body
         {
             background-image: url("images/pro.png");
         }
         .wrap
         {
             width: 360px;
             height: 590px;
             margin : 0px auto;
             color: white;
         }
         table tr:hover{
           color: black;
           background: white;
         }
         table
         {
           background-color: black;
           margin-left: 20px;
           opacity: 0.7;
         }
       </style>
  </head>
<body>
       <?php include ("navbar.php");?>
        <div class="container">
             <form action="" method="post">
                 <button name="submit" class="btn btn-primary" style="float : 
                       right; width: 70px;">Edit</button>
             </form>
       <div class="wrap">
          <?php
            $Query="SELECT * FROM student WHERE username='".$_SESSION[login_user]."'";
            $res=mysqli_query($conn, $Query);
          ?>
          <h2 style="color : white; text-align: center;">My Profile </h2>
          <?php
             $ObjectRow=mysqli_fetch_object($res);
                echo "<div style='text-align: center;'>
                      <img class='img-circle profile_img' src='images/".$_SESSION['pic']."' 
                              height=100 width=100></div>";
              ?>
              <div style="text-align: center; padding: 10px;"><b>Welcome</b>
              <h4>
                 <?php
                 echo $_SESSION['login_user'];
                ?>

             </h4>
        </div>
        <?php
        echo "<b>";
       echo "<table class='table table-bordered'>";
             echo "<tr>
           <td><b>First Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
           <td>$ObjectRow->firstname</td>
             </tr>";

           echo "<tr>
           <td><b>Last Name:</b></td>
           <td>$ObjectRow->lastname</td>        
                </tr>";

          echo "<tr>
          <td><b>User Name:</b></td>
          <td>$ObjectRow->username</td>
                </tr>";

          echo "<tr>
          <td><b>Password:</b></td>
          <td>$ObjectRow->pass</td>        
                </tr>";

         echo "<tr>
         <td><b>Email:</b></td>
         <td>$ObjectRow->email</td>
               </tr>";

         echo "<tr>
         <td><b>Roll:</b></td>
         <td>$ObjectRow->roll</td>    
               </tr>";
       echo "</table>";
           echo "</b>"
        ?>
        </div>
            </div>
</body>
</html>