<?php
include "connection.php";
session_start();
if(isset($_POST['submit']))
{
    $Query = "SELECT * FROM `admin` 
            WHERE username = '".$_POST[username]."' AND pass = '".$_POST[pass]."' ";
    $rstRow = mysqli_query($conn, $Query);
    $objRow = mysqli_fetch_object($rstRow);
    if($objRow->username == $_POST['username'] && $objRow->pass == $_POST['pass'])
    {
        $_SESSION['login_user']=$_POST['username'];
        $_SESSION['pic']=$objRow->pic;
        echo '<script>alert("Login are successfull")</script>';
        header("refresh:0; url=home.php");
        exit();
    }
    else
    {
        echo '<script>alert("please try again! Sorry incorrect details")</script>';
        header("refresh:0; url=admin.php");
        exit();
    }
}
?>