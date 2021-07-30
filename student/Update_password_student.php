<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/links.php')?>
    <title>Update_password_student</title>
    <style>
       body
       {
           width: 100%;
           height:650px;
           background-image: url("images/stup.png");
       }
       .wrap
       {
           width: 400px;
           height: 400px;
           margin: 100px auto;
           background-color: black;
           opacity: 0.8;
           padding : 5px;
           color: white;
       }
       #er{
           width: 250px;
           height: 30px;
           margin: 0px auto;
       }
   </style>
</head>
<body>
<?php include ("navbar.php");?>
<div class="wrap">
          <div style="text-align: center; ">
                  <h2>CHANGE STUDENT<br>PASSWORD</h2>
          </div>
          <br>
            <form action="" method="post">
             <input type="text" placeholder="username" class="form-control" required="" name="username" id="er"><br>
                    <input type="text" placeholder="email" class="form-control" required="" name="email" id="er"><br>
                       <input type="text" name="pass" class="form-control" placeholder="New password" id="er"><br>
                           <button class="btn btn-danger" style="margin-left: 150px;" name="submit" type="submit">Update</button>
                </form>
     </div>
             <?php
                
                if(isset($_POST['submit']))
                {
                    $Query = "SELECT firstname FROM `student` WHERE username = '".$_POST['username']."' AND email = '".$_POST['email']."' ";
                    $rstRow = mysqli_query($conn, $Query);
                    if(mysqli_num_rows($rstRow) > 0)
                    {
                        $Query = "UPDATE `student` SET pass='".$_POST['pass']."' WHERE username='".$_POST['username']."' AND email='".$_POST['email']."' ";
                        if(mysqli_query($conn, $Query))
                        {
                            echo '<script>alert("Record updated successfully")</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error updating record: ") </script>'. $conn->error;
                        }
                    }
                    else
                    {
                        echo '<script>alert("No record found like this email:")</script>' . $conn->error;
                    }
                }
               ?>
</body>
</html>