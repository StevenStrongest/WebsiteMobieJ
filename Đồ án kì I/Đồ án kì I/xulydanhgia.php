
<?php session_start(); ?>
<?php
include('connect.php');
if(isset($_POST['submit'])){
if(isset($_POST['number'])){
	$ma_kh = $_SESSION['ma_kh'];
	$ma_dt = $_POST['ma_dt'];
	$number = $_POST['number'];
	$insert = "insert into danh_gia_sp(ma_dt,ma_kh,so_sao)
				values($ma_dt,$ma_kh,$number)";

	$_SESSION['success_danhgia'] = "danh gia thanh cong";
	mysqli_query($con,$insert);
	header("location: chitietsp.php?id=$ma_dt");
}
}

if(isset($_POST['huy'])){
	$ma_kh = $_SESSION['ma_kh'];
	$ma_dt = $_POST['ma_dt'];
	$delete = "delete from danh_gia_sp where ma_kh = $ma_kh and ma_dt = $ma_dt";
	mysqli_query($con,$delete);
	$_SESSION['huy_danhgia'] = "Huy danh gia";
	header("location: chitietsp.php?id=$ma_dt");

}
?>