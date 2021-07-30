<?php
include "connection.php";
session_start();
if(isset($_SESSION['login_user']))
{
unset($_SESSION['login_user']);
}
header( "refresh:0; url=home.php" );
?>