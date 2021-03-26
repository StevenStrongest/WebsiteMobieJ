
<?php session_start(); ?>
<?php
include('connect.php');
if(isset($_POST['submit'])){
if(isset($_POST['number'])){
	$ma_kh = $_SESSION['ma_kh'];
	$ma_pk = $_POST['ma_pk'];
	$number = $_POST['number'];
	$insert = "insert into danh_gia_pk(ma_phu_kien,ma_kh,so_sao)
				values($ma_pk,$ma_kh,$number)";

	$_SESSION['success_danhgia'] = "danh gia thanh cong";
	mysqli_query($con,$insert);
	header("location: chitietpk.php?id=$ma_pk");
}
}

if(isset($_POST['huy'])){
	$ma_kh = $_SESSION['ma_kh'];
	$ma_pk = $_POST['ma_pk'];
	$delete = "delete from danh_gia_pk where ma_kh = $ma_kh and ma_phu_kien = $ma_pk";
	mysqli_query($con,$delete);
	$_SESSION['huy_danhgia'] = "Huy danh gia";
	header("location: chitietpk.php?id=$ma_pk");

}
?>