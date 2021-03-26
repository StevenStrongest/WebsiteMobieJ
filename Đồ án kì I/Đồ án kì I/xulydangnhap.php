<?php 
session_start();
include('connect.php');
$ten_dn = $_POST['ten_dn'];
$mk = $_POST['mk'];
$mk = md5($mk);
$re = "select * from khach_hang where ten_dn = '$ten_dn' and mat_khau = '$mk'";
$sql = mysqli_query($con,$re);
$ktra = mysqli_num_rows($sql);
if($ktra > 0){
	$row = mysqli_fetch_assoc($sql);
	$_SESSION['ma_kh'] = $row['ma_kh'];
	$_SESSION['ten_dn'] = $row['ten_dn'];
	$_SESSION['ten_kh'] = $row['ten_kh'];
	$_SESSION['mk'] = $row['mat_khau'];
	$_SESSION['email'] = $row['email'];
	header('location: khachhang.php');
}else{
	$_SESSION['tb'] = "dn that bai";
	header('location: tai_khoan_client.php?action=dangnhap');
}
?>