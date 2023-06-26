<?php

session_start();

if ($_SESSION == null) 
{
    header('location:../autentication.php');
}

if ($_SESSION['id'] == '')
{
    header('location(../autentication.php)');
}

?>
