<?php 
	session_start();
	if(isset($_POST['request'])){
		$ma_xac_nhan = $_POST['ma_xac_nhan'];
		if($ma_xac_nhan == $_SESSION['ma_xac_nhan']){
			header('location: matkhaumoi.php');
			$_SESSION['xac_thuc_tt'] = "success";
		}else{
			$_SESSION['sai_ma'] = "sai ma";
			header('location: maxacnhan.php');
		}
	}
?>