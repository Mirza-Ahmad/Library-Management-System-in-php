<?php
include "connection.php";
session_start();
if(isset($_POST['submit']))
    {
      $_SESSION['username']=$_POST['username'];
      $_SESSION['bid']=$_POST['bid'];
      header('Refresh: 0; url=approve.php');
    }
?>