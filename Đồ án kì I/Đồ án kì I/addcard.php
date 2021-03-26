<?php 
session_start();
	if(isset($_POST['id']) && isset($_POST['sl']) && $_POST['sl'] != "" && $_POST['sl'] != 0){
		$id = $_POST['id'];
		$sl = $_POST['sl'];
		include('connect.php');
		$data  = "select * from thong_tin_dien_thoai where ma_dt = $id";
		$tt = mysqli_query($con,$data);
		$card = mysqli_fetch_assoc($tt);
		if(!isset($_SESSION['cart'])){
			$cart = array();
			$cart[$id] = array(
				'ten_dt' => $card['ten_dt'],
				'anh_sp' => $card['anh_sp'],
				'gia'    => $card['gia_khuyen_mai'],
				'sl'     => $sl,
				'ma_dt'  => $id
			);
		}else{
			$cart = $_SESSION['cart'];
			if(array_key_exists($id, $cart)){
				$cart[$id] = array(
					'ten_dt' => $card['ten_dt'],
					'anh_sp' => $card['anh_sp'],
					'gia'    => $card['gia_khuyen_mai'],
					'sl'     => (int)$cart[$id]['sl'] + $sl,
					'ma_dt'  => $id
				);
			}else{
				$cart[$id] = array(
					'ten_dt' => $card['ten_dt'],
					'anh_sp' => $card['anh_sp'],
					'gia'    => $card['gia_khuyen_mai'],
					'sl'     => $sl,
					'ma_dt'  => $id
				);
			}
		}
			$_SESSION['cart'] = $cart;
			$_SESSION['sum_sp'] = 0;
			foreach ($cart as $id => $value) {
				$_SESSION['sum_sp'] += $cart[$id]['gia'] * $cart[$id]['sl'];
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