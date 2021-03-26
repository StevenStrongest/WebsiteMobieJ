<?php 
session_start();
include('../../connect.php');
if(isset($_GET['ma'])){
	$ma_pk = $_GET['ma'];
	$delete = "delete from phu_kien where ma_phu_kien = $ma_pk";
	mysqli_query($con,$delete);
	$_SESSION['xoa_tc'] = "xóa thành công";
	header('location: ../danhsachphukien.php');
}
?>