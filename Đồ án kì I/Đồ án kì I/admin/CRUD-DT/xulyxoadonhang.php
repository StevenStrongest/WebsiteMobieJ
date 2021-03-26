<?php 
session_start();
include('../../connect.php');
	if(isset($_GET['id'])){
		$ma_dh = $_GET['id'];
		$tranghientai = $_GET['tranghientai'];
		$delete_ct_dh = "delete from ct_don_hang where ma_dh = $ma_dh";
		$delete_dh = "delete from don_hang where ma_dh = $ma_dh";
		mysqli_query($con,$delete_ct_dh);
		mysqli_query($con,$delete_dh);
		$_SESSION['xoa_dh'] = "xoa tc";
		header("location: ../danhsachdonhang.php?tranghientai=$tranghientai");
	}
?>