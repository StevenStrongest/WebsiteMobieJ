<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<h2>Xin Chào <?=$_SESSION['ten_kh']?></h2>
		<h3>Cảm ơn bạn đã đặt mua sản phẩm tại của hàng chúng tôi</h3>
		<p>Thông tin đơn hàng</p>
		<table border="1" cellpadding="5" style="border-collapse: collapse;">
			<tr>
				<th>Sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
				<th>test</th>
			</tr>
			<?php 
				foreach ($_SESSION['cart_sum'] as $id => $val) {
					$ad[] = explode('.', $val['anh_sp']);
			?>
				<tr>
					<td valign="center">
					<img style="width: 50px" src="images/<?=$val['anh_sp']?>">
					</td>
					<td><?=$val['ten_dt']?></td>
					<td><?=number_format($val['gia'],0,',','.')?>đ</td>
					<td><?=$val['sl']?></td>
					<td><?=number_format($val['gia'] * $val['sl'],0,',','.')?>đ</td>
					<td><?=$ad?></td>
				</tr>
			<?php 
			}
			?>
			<tr>
				<td align="right" colspan="6"><b>Phí vận chuyển: 40.000đ</b></td>
			</tr>
			<tr>
				<td align="right" colspan="6"><b>Tổng chi phí: <?=number_format($_SESSION['sum']+40000,0,',','.')?>đ</b></td>
			</tr>
		</table>
		<?php 
			echo "<pre>";
			print_r($ad);
		?>
</body>
</html>