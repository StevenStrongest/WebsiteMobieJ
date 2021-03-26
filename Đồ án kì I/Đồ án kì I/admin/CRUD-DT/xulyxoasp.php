<?php 
session_start();
include('../../connect.php');
if(isset($_GET['ma_dt'])){
	$ma_dt = $_GET['ma_dt'];
	$tranghientai = $_GET['tranghientai'];
	$delete = "delete from thong_tin_dien_thoai where ma_dt = $ma_dt";
	mysqli_query($con,$delete);
	$_SESSION['xoa_tc'] = "xóa thành công";
	header("location: ../danhsachsanpham.php?tranghientai=$tranghientai");
}
?>