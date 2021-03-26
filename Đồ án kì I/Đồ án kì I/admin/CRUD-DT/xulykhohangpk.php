<?php 
session_start();
include('../../connect.php');
if(isset($_POST['sl']) && isset( $_POST['ma_phu_kien'])){
	if($_POST['sl'] != "" && $_POST['ma_phu_kien'] != ""){
		if($_POST['sl'] >= 0){
			$sl_moi = $_POST['sl'];
			$ma_pk = $_POST['ma_phu_kien'];
			$update = "update phu_kien set sl_trong_kho_pk = $sl_moi where ma_phu_kien = $ma_pk";
			mysqli_query($con,$update);
			header('location: ../khohangpk.php');
			$_SESSION['success_sua'] = "sua thanh cong";
		}else{
			$_SESSION['number_tb'] = "cap nhat that bai";
			header('location: ../khohangpk.php');
		}
	}else{
		$_SESSION['val'] = "cap nhat that bai";
		header('location: ../khohangpk.php');
	}
}else{

}

?>