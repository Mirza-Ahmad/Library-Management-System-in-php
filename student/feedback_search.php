<?php
include "connection.php";
     if(isset($_POST['submit']))
     {
       $q=mysqli_query($conn, "SELECT * FROM books where name like '%$_POST[search]%'");
       if(mysqli_num_row($q)==0)
       {
        echo '<script>alert("Sorry! No books found try to searching again")</script>';
       }
       else
       {
        echo "<table class='table table-bordered  table-striped' >";
        echo "<tr style='background-color: #6db6b9e6'>";
          echo "<th>"; echo"id"; echo"</th>";
          echo "<th>"; echo"name"; echo"</th>";
          echo "<th>"; echo"authors"; echo"</th>";
          echo "<th>"; echo"edition"; echo"</th>";
          echo "<th>"; echo"status"; echo"</th>";
          echo "<th>"; echo"quantity"; echo"</th>";
          echo "<th>"; echo"department"; echo"</th>";
        echo "</tr>";
      while($row = mysqli_fetch_assoc($q))
      {
         echo "<tr>";
         echo " <td>"; echo $row['bid']; echo "</td>";
         echo " <td>"; echo $row['name']; echo "</td>";
         echo " <td>"; echo $row['authors']; echo "</td>";
         echo " <td>"; echo $row['edition']; echo "</td>";
         echo " <td>"; echo $row['status']; echo "</td>";
         echo " <td>"; echo $row['quantity']; echo "</td>";
         echo " <td>"; echo $row['department']; echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
       }
     }
?>