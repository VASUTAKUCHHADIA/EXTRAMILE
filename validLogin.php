<?php 
session_start();
if(!isset($_SESSION['userid']))
{
    $_SESSION['userid'] = $_GET['userid']; 
}
header('location: index.php');
?> 

