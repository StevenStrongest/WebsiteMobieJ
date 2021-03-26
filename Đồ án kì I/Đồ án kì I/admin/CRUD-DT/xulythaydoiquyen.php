<?php 
session_start();
include('../../connect.php');
	if(isset($_POST['gui'])){
		$level = $_POST['cars'];
		$id = $_POST['id_tk'];
		$update = "update tai_khoan_quan_tri set level = $level where id= $id";
		mysqli_query($con,$update);
		$_SESSION['thaydoi'] = "thay doi thanh cong";
		header('location: ../danhsachtaikhoan.php');
	}
?>