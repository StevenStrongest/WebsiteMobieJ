<?php 
session_start();
	if(isset($_POST['request'])){
		$matkhau = $_POST['passnew'];
		$id = $_SESSION['id'];
		$matkhau = md5($matkhau);
		include('../connect.php');
		$sql = "update tai_khoan_quan_tri set password = '$matkhau', repassword = '$matkhau' where id = $id";
		mysqli_query($con,$sql);
		$_SESSION['password'] = $matkhau;
		$_SESSION['success_sua'] = "cap nhat thanh cong";
		header('location: index.php');
	}
?>