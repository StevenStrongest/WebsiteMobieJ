<?php 
	session_start();
	include('connect.php');
	foreach ($_SESSION['cart'] as $id => $tt) {
		$ten_sp = $tt['ten_dt'];
		$gia_ban = $tt['gia'];
		$sl_dat = $tt['sl'];
		$ma_dt = $tt['ma_dt'];
		$get = "select * from thong_tin_dien_thoai where ma_dt = $ma_dt";
		$dl_sl = mysqli_query($con,$get);
		while ($row = mysqli_fetch_assoc($dl_sl)) {
			$sl_con = $row['sl_trong_kho'];
			if($sl_dat > $sl_con){
				$_SESSION['dh_tb'] = "dat hang that bai";
				header('location: gio_hang.php');
				die();
				
			}else{
				header('location: dathang.php');
			}
			
		}

	}

	echo "<pre>";
	print_r($_SESSION['cart_pk']);

	foreach ($_SESSION['cart_pk'] as $id => $tt) {
		$ten_sp = $tt['ten_dt'];
		$gia_ban = $tt['gia'];
		$sl_dat = $tt['sl'];
		$ma_phu_kien = $tt['ma_pk'];
		$get = "select * from phu_kien where ma_phu_kien = $ma_phu_kien";
		$dl_sl_pk = mysqli_query($con,$get);
		while ($row = mysqli_fetch_assoc($dl_sl_pk)) {
			$sl_con = $row['sl_trong_kho_pk'];
			if($sl_dat > $sl_con){
				$_SESSION['dh_tb'] = "dat hang that bai";
				header('location: gio_hang.php');
				die();
				
			}else{
				header('location: dathang.php');
			}
			
		}

	}

?>