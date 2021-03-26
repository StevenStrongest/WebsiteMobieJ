<?php 
session_start();
	if(isset($_POST['id']) && isset($_POST['sl'])){
		$cart = $_SESSION['cart'];
		echo "<pre>";
		$num = $_POST['sl'];
		$id = $_POST['id'];
		if(array_key_exists($id, $cart)){
			if(is_numeric($num)){
				if($num > 0){
				$cart[$id] = array(
					'ten_dt' => $cart[$id]['ten_dt'],
					'anh_sp' => $cart[$id]['anh_sp'],
					'gia'    => $cart[$id]['gia'],
					'sl'     => $num,
					'ma_dt'  =>$id
				);

				}else{
					unset($cart[$id]);
				}
			}else{
				echo "Cảnh báo";
			}
			$_SESSION['sum_sp'] = 0;

				$_SESSION['cart'] = $cart;
				foreach ($cart as $id => $value) {
					$_SESSION['sum_sp'] += $cart[$id]['gia'] * $cart[$id]['sl'];
				}

		}
	}
?>