<?php 
session_start();
  if(!isset($_SESSION['user']) || !isset($_SESSION['password'])){
       header('location: dangnhap.php');
  }

  if($_SESSION['level'] > 1){
         header('location: back.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>