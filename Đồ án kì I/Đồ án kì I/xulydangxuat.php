<?php 
session_start();
unset($_SESSION['ten_dn']);
unset($_SESSION['mk']);
header('location: index.php');
?>