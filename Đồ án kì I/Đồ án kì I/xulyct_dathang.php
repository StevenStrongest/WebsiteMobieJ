<?php 
	session_start();
	include('connect.php');
	$dlhd = "select * from don_hang";
	$sql = mysqli_query($con,$dlhd);
	while ($r = mysqli_fetch_assoc($sql)) {
		$ma[] = $r['ma_dh'];
	}
	$ma_dh = array_pop($ma);
	echo $ma_dh;
	foreach ($_SESSION['cart'] as $id => $tt) {
		$ten_sp = $tt['ten_dt'];
		$gia_ban = $tt['gia'];
		$sl_dat = $tt['sl'];
		$ma_dt = $tt['ma_dt'];
		$them = "insert into ct_don_hang(ma_dh,ten_sp,gia_ban,sl_dat)
				 values($ma_dh,'$ten_sp',$gia_ban,$sl_dat)";
		mysqli_query($con,$them);
		$get = "select * from thong_tin_dien_thoai where ma_dt = $ma_dt";
		$dl_sl = mysqli_query($con,$get);
		while ($row = mysqli_fetch_assoc($dl_sl)) {
			$sl_con = $row['sl_trong_kho'];
				$sl_con = $sl_con - $sl_dat;
				$update = "update thong_tin_dien_thoai set sl_trong_kho = $sl_con where ma_dt = $ma_dt";
				mysqli_query($con,$update);		
		}

	}
	foreach ($_SESSION['cart_pk'] as $id => $tt) {
		$ten_sp = $tt['ten_dt'];
		$gia_ban = $tt['gia'];
		$sl_dat = $tt['sl'];
		$ma_pk = $tt['ma_pk'];
		$them = "insert into ct_don_hang(ma_dh,ten_sp,gia_ban,sl_dat)
				 values($ma_dh,'$ten_sp',$gia_ban,$sl_dat)";
		mysqli_query($con,$them);
		$get = "select * from phu_kien where ma_phu_kien = $ma_pk";
		$dl_sl = mysqli_query($con,$get);
		while ($row = mysqli_fetch_assoc($dl_sl)) {
			$sl_con = $row['sl_trong_kho_pk'];
				$sl_con = $sl_con - $sl_dat;
				$update = "update phu_kien set sl_trong_kho_pk = $sl_con where ma_phu_kien = $ma_pk";
				mysqli_query($con,$update);		
		}

	}

	header('location: hoadon.php');


?>