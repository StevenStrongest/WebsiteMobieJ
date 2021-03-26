<?php 
	session_start();
	if(!isset($_SESSION['ten_dn']) && !isset($_SESSION['mk'])){
		header('location: giohang.php');
	}

	if(!isset($_SESSION['cart_sp'])){
		$_SESSION['cart_sp'] = array();
	}	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt hàng</title>
	<!----Bootstrap 4------->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-----LINK CSS-------->
	<link rel="stylesheet" type="text/css" href="dathang-style.css">
	<!----Link icon----------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript">
    function ktra(){
    	var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	    var mobile = $('#sdt').val();
	    if(mobile !==''){
	        if (vnf_regex.test(mobile) == false) 
	        {
	            alert('Số điện thoại của bạn không đúng định dạng!');
	            return false;
	        }else{
	            return true;
	        }
	    }else{
	        alert('Bạn chưa điền số điện thoại!');
	            return false;
	    }
    }
</script>
</head>
<body>
	<form method="post" action="xulydathang.php">
	<div class="container">
		<div class="main-left">
			<div class="container">
				<div class="header-text">
					<h3>MobiJ</h3>
				</div>
				<div class="don_hang">
					<h5>Thông tin đơn hàng</h5>
						<div style="margin: 10px" class="tb">
							<?php 
								if(isset($_SESSION['tb'])){
							 ?>
								<span style="color: red"><?=$_SESSION['tb'];?></span>
								<?php unset($_SESSION['tb']); ?>
							 <?php 
							 }
							 ?>
						</div>
						<div class="form-group dat_hang">
						    <input type="email" class="form-control" required="true" name="email" placeholder="Email" id="email">
						 </div>
						 <div class="form-group dat_hang">
						    <input type="text" class="form-control" required="true" name="ten" placeholder="Họ và tên" id="ten">
						 </div>
						 <div class="form-group dat_hang">
						    <input type="text" class="form-control" required="true" name="sdt" placeholder="Số điện thoại" id="sdt">
						    <p id="ktra"></p>
						 </div>
						 <div class="form-group dat_hang">
						    <input type="text" class="form-control" required="true" name="dia_chi" placeholder="Địa chỉ" id="dia_chi">
						 </div>

						<div class="form-group dat_hang">
						 <select required="true" name="gt" class="custom-select">
						 	<option value="">Chọn giới tính</option>
						    <option value="1">Nam</option>
						    <option value="0">Nữ</option>
						  </select>
						</div>
				</div>
			</div>
		</div>
		<div class="main-right">
			<div class="ct">
				<div class="text">
					<?php 
						if(!isset($_SESSION['cart'])){
					?>
						<h5>Đơn hàng (<?php echo count($_SESSION['cart_pk'])?> sản phẩm)</h5>
					<?php 
					}if(!isset($_SESSION['cart_pk'])){
					?>
						<h5>Đơn hàng (<?php echo count($_SESSION['cart'])?> sản phẩm)</h5>
					<?php 
					}else{
					?>
						<h5>Đơn hàng (<?php echo count($_SESSION['cart']) +  count($_SESSION['cart_pk'])?> sản phẩm)</h5>
					<?php 
					}
					?>
				</div>
				<div style="width: 100%;height: 1px;background: #dbd9d9"></div>
				<div class="ct_sp">
					<?php
						if(isset($_SESSION['cart'])){
					 ?>
						<?php 
						foreach ($_SESSION['cart'] as $id => $tt) {
					?>
						<div class="img">
							<img src="images/<?=$tt['anh_sp']?>">
							<span class="badge badge-pill badge-primary"><?=$tt['sl']?></span>
						</div>

						<div class="tt">
							<h5><span><?=$tt['ten_dt']?></span></h5>
							<span><?=number_format($tt['gia'],0,',','.')?><sup>đ</sup></span>
						</div>
					<?php 
					}
					?>
					 <?php 
					 }
					 ?>

					 <?php
						if(isset($_SESSION['cart_pk'])){
					 ?>
						<?php 
						foreach ($_SESSION['cart_pk'] as $id => $tt) {
					?>
						<div class="img">
							<img src="images/<?=$tt['anh_sp']?>">
							<span class="badge badge-pill badge-primary"><?=$tt['sl']?></span>
						</div>

						<div class="tt">
							<h5><span><?=$tt['ten_dt']?></span></h5>
							<span><?=number_format($tt['gia'],0,',','.')?><sup>đ</sup></span>
						</div>
					<?php 
					}
					?>
					 <?php 
					 }
					 ?>
				</div>
				<div style="width: 100%;height: 1px;background: #dbd9d9"></div>
				<div class="thanh_toan">
					<span>Tạm tính:</span>
					<span style="float: right;"><?=number_format($_SESSION['sum'],0,',','.')?><sup>đ</sup></span>
					<br>
					<span>Phí vận chuyển:</span>
					<span style="float: right;">40.000<sup>đ</sup></span>
				</div>
				<div style="width: 100%;height: 1px;background: #e3e3e3"></div>
				<div style="padding: 20px 20px" class="tong">
					<?php $sum = $_SESSION['sum'] + 40000?>
					<span>Tổng cộng: </span>
					<span style="float: right;"><?=number_format($sum,0,',','.')?><sup>đ</sup></span><br>
					<div class="gui_don">
						<a href="gio_hang.php"><i class="fas fa-chevron-left"></i>Quay về giỏ hàng</a>
						<button style="float: right;" name="submit" onclick="return ktra()" type="submit">ĐẶT HÀNG</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>
<?php 
	if(!isset($_SESSION['cart_pk'])){
		$_SESSION['cart_sum'] = $_SESSION['cart'];
	}

	if(!isset($_SESSION['cart'])){
		$_SESSION['cart_sum'] = $_SESSION['cart_pk'];
	}
	
	if(isset($_SESSION['cart']) && isset($_SESSION['cart_pk'])){
		$_SESSION['cart_sum'] = array_merge($_SESSION['cart'],$_SESSION['cart_pk']);
	}
?>

<!---Kiểm tra số điện thoại ajax---->
<script type="text/javascript">
	$(document).ready(function(){
		$('#sdt').keyup(function(){
			var sdt =  $('#sdt').val();
			$.post("kiemtrasdtajax.php",{sdt: sdt},function(data){
				$('#ktra').html(data);
			});
		});
	});
</script>