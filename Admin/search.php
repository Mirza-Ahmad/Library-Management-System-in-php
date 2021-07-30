<?php
include "connection.php";
     if(isset($_POST['submit']))
     {
       $q=mysqli_query($conn, "SELECT firstname, lastname, username, pass, email, contact, roll FROM student where username='$_POST[search]'");
       if(mysqli_num_rows($q)==0)
       {
        echo '<script>alert("Sorry! No student found with that username. Try to searching again")</script>';
        header("refresh:0 url(student.php)");
       }
       else 
       {
        echo "<table class='table table-bordered table-striped' >";
        echo "<tr style='background-color: #6db6b9e6'>";
          echo "<th>"; echo"firstname"; echo"</th>";
          echo "<th>"; echo"lastname"; echo"</th>";
          echo "<th>"; echo"username"; echo"</th>";
          echo "<th>"; echo"pass"; echo"</th>";
          echo "<th>"; echo"email"; echo"</th>";
          echo "<th>"; echo"contact"; echo"</th>";
          echo "<th>"; echo "roll"; echo"</th>";
        echo "</tr>";
      while($row = mysqli_fetch_assoc($q))
      {   
         echo " <td>"; echo $row['firstname']; echo "</td>";
         echo " <td>"; echo $row['lastname']; echo "</td>";
         echo " <td>"; echo $row['username']; echo "</td>";
         echo " <td>"; echo $row['pass']; echo "</td>";
         echo " <td>"; echo $row['email']; echo "</td>";
         echo " <td>"; echo $row['contact']; echo "</td>";
         echo " <td>"; echo $row['roll']; echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
       }
      }
?>