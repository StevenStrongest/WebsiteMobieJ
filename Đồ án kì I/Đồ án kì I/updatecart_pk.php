<?php 
session_start();
	if(isset($_POST['id']) && isset($_POST['sl'])){
		$cart_pk = $_SESSION['cart_pk'];
		echo "<pre>";
		$num = $_POST['sl'];
		$id = $_POST['id'];
		if(array_key_exists($id, $cart_pk)){
			if(is_numeric($num)){
				if($num > 0){
				$cart_pk[$id] = array(
					'ten_dt' => $cart_pk[$id]['ten_dt'],
					'anh_sp' => $cart_pk[$id]['anh_sp'],
					'gia'    => $cart_pk[$id]['gia'],
					'sl'     => $num,
					'ma_pk'  => $id
				);

				}else{
					unset($cart_pk[$id]);
				}
			}
			$_SESSION['sum_pk'] = 0;
				$_SESSION['cart_pk'] = $cart_pk;
				foreach ($cart_pk as $id => $value) {
					$_SESSION['sum_pk'] += $cart_pk[$id]['gia'] * $cart_pk[$id]['sl'];
				}

		}
	}
?>