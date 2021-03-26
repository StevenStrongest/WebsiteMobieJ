<?php 
	session_start();
	include('../connect.php');
	$id = $_SESSION['id'];
	$de = "delete tai_khoan_quan_tri,thong_tin_tai_khoan from tai_khoan_quan_tri inner join thong_tin_tai_khoan
			on thong_tin_tai_khoan.id = tai_khoan_quan_tri.id where  tai_khoan_quan_tri.id = $id";
	mysqli_query($con,$de);
	header('location: thongtintaikhoan.php');
?>