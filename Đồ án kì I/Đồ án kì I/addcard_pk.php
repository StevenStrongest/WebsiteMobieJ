<?php 
session_start();
	if(isset($_POST['id_pk']) && isset($_POST['sl_pk']) && $_POST['sl_pk'] != "" && $_POST['sl_pk'] != 0){
		$id = $_POST['id_pk'];
		$sl = $_POST['sl_pk'];
		include('connect.php');
		$data  = "select * from phu_kien where ma_phu_kien = $id";
		$tt = mysqli_query($con,$data);
		$card_pk = mysqli_fetch_assoc($tt);
		if(!isset($_SESSION['cart_pk'])){
			$cart_pk = array();
			$cart_pk[$id] = array(
				'ten_dt' => $card_pk['ten_phu_kien'],
				'anh_sp' => $card_pk['anh_pk'],
				'gia'    => $card_pk['gia_khuyen_mai_pk'],
				'sl'     => $sl,
				'ma_pk'  =>$id
			);
		}else{
			$cart_pk = $_SESSION['cart_pk'];
			if(array_key_exists($id, $cart_pk)){
				$cart_pk[$id] = array(
					'ten_dt' => $card_pk['ten_phu_kien'],
					'anh_sp' => $card_pk['anh_pk'],
					'gia'    => $card_pk['gia_khuyen_mai_pk'],
					'sl'     => (int)$cart_pk[$id]['sl'] + $sl,
					'ma_pk'  =>$id
				);
			}else{
				$cart_pk[$id] = array(
					'ten_dt' => $card_pk['ten_phu_kien'],
					'anh_sp' => $card_pk['anh_pk'],
					'gia'    => $card_pk['gia_khuyen_mai_pk'],
					'sl'     => $sl,
					'ma_pk'  =>$id
 				);
			}
		}
			$_SESSION['cart_pk'] = $cart_pk;
			$_SESSION['sum_pk'] = 0;
			foreach ($cart_pk as $id => $value) {
				$_SESSION['sum_pk'] += $cart_pk[$id]['gia'] * $cart_pk[$id]['sl'];
			}

		$numbercart = 0;
		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $key => $value) {
				$numbercart++;
			}
		}

		if(isset($_SESSION['cart_pk'])){
			foreach ($_SESSION['cart_pk'] as $key => $value) {
				$numbercart++;
			}
		}
			echo $numbercart;
	}
?>