<?php 
session_start();
include('connect.php');
$ten = $_POST['ten'];
$ten_dn = $_POST['ten_dn'];
$mk = $_POST['mk'];
$mk = md5($mk);
$email = $_POST['email'];
$re = "select * from khach_hang where ten_dn = '$ten_dn' or mat_khau = '$mk'";
$sql = mysqli_query($con,$re);
$ktra = mysqli_num_rows($sql);
if($ktra == 0){
	if(strlen($ten_dn) > 3){
		$insert = "insert into khach_hang(ten_kh,email,ten_dn,mat_khau)
				values('$ten','$email','$ten_dn','$mk')";
		mysqli_query($con,$insert);
		header('location: tai_khoan_client.php?action=dangnhap');
		$_SESSION['dang_ky'] = "dang ky thanh cong";
	}else{
		header('location: tai_khoan_client.php?action=dangky&#tb');
	}
}else{
	$_SESSION['tb'] = "dk that bai";
	header('location: tai_khoan_client.php?action=dangky&#tb');
}
?>