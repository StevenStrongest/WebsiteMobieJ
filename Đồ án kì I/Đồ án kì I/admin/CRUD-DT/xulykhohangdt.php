<?php 
session_start();
include('../../connect.php');
if(isset($_POST['sl']) && isset( $_POST['ma_dt'])){
	$trang = $_POST['tranghientai'];
	if($_POST['sl'] != "" && $_POST['ma_dt'] != ""){
		if($_POST['sl'] >= 0){
			$sl_moi = $_POST['sl'];
			$ma_dt = $_POST['ma_dt'];
			$update = "update thong_tin_dien_thoai set sl_trong_kho = $sl_moi where ma_dt = $ma_dt";
			mysqli_query($con,$update);
			header("location: ../khohang.php?tranghientai=$trang");
			$_SESSION['success_sua'] = "sua thanh cong";
		}else{
			$_SESSION['number_tb'] = "cap nhat that bai";
			header("location: ../khohang.php?tranghientai=$trang");
		}
	}else{
		$_SESSION['val'] = "cap nhat that bai";
		header("location: ../khohang.php?tranghientai=$trang");
	}
}else{

}

?>