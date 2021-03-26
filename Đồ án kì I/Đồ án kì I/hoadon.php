<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hóa đơn</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!----Link icon ----->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
		<!-----LINK CSS-------->
	<link rel="stylesheet" type="text/css" href="instyle.css"> 
	<link rel="stylesheet" type="text/css" href="dathang-style.css">
</head>
<body>
	<?php 
		if($_SESSION['hd_gioi_tinh'] == 1){
			$gioi_tinh = "Nam";
		}else{
			$gioi_tinh = "Nữ";
		}
	?>	
	<div class="hoadon">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="tb_dh">
						 <i class="far fa-check-square"></i>
						 <span>Cảm ơn bạn đã đặt hàng</span>
						 <p>Một email xác nhận đã được gửi tới ducmanhdv@gmail.com. Xin vui lòng kiểm tra email của bạn</p>
					</div>
					<div class="thong_tin">
						<div class="tt_nhan">
							<h3>Thông tin nhận hàng</h3>
							<ul>
								<li><?=$_SESSION['hd_email']?></li>
								<li><?=$_SESSION['hd_ten']?></li>
								<li><?=$_SESSION['hd_sdt']?></li>
								<li><?=$_SESSION['hd_dia_chi']?></li>
								<li><?=$gioi_tinh?></li>
							</ul>
						</div>
						<div class="tt_tra">
							<h3>Thông tin thanh toán</h3>
							<ul>
								<li><?=$_SESSION['hd_email']?></li>
								<li><?=$_SESSION['hd_ten']?></li>
								<li><?=$_SESSION['hd_sdt']?></li>
								<li><?=$_SESSION['hd_dia_chi']?></li>
								<li><?=$gioi_tinh?></li>
							</ul>
						</div>
					</div>
					<div class="in_dh">
						<a id="ctn" href="tatcasanpham.php">Tiếp tục mua hàng</a>
						<a id="in" href="javascript:void(0)" onclick="In_Content('Content_ID')"><i class="fa fa-print icon-print" aria-hidden="true"></i> IN</a>
					</div>	
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="ct sum">
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

							<div class="tt mh">
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
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

	<!---In hóa đơn---->
<article class="content" id="Content_ID">
<!----Link nhan in ---->
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!----Link icon ----->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<!-----LINK CSS-------->
	<link rel="stylesheet" type="text/css" href="instyle.css"> 

	<div style="border: 1px solid silver;" class="container none">
			<div style="border: 0px" style="text-align: center;width: 500px;" class="thong_tin">
				<div class="tt_nhan">
					<h3>Thông tin nhận hàng</h3>
					<ul>
						<li><?=$_SESSION['hd_email']?></li>
						<li><?=$_SESSION['hd_ten']?></li>
						<li><?=$_SESSION['hd_sdt']?></li>
						<li><?=$_SESSION['hd_dia_chi']?></li>
						<li><?=$gioi_tinh?></li>
					</ul>
				</div>
			</div>

			<div style="border: 0px" style="width: 500px" class="ct sum">
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
					<div style="overflow: hidden;min-height: 200px" class="ct_in">
						<?php  
							if(isset($_SESSION['cart'])){
						?>
							<?php 
							foreach ($_SESSION['cart'] as $id => $tt) {
						?>
							<div style="width: 11%" class="img">
								<img src="images/<?=$tt['anh_sp']?>">
								<span class="badge badge-pill badge-primary"><?=$tt['sl']?></span>
							</div>

							<div style="width: 79%" class="tt mh">
								<h5 style="font-size: 13px;padding: 0px;"><span><?=$tt['ten_dt']?></span></h5>
								<span style="font-size: 13px;"><?=number_format($tt['gia'],0,',','.')?><sup>đ</sup></span>
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
							<div style="width: 11%" class="img">
								<img src="images/<?=$tt['anh_sp']?>">
								<span class="badge badge-pill badge-primary"><?=$tt['sl']?></span>
							</div>

							<div style="width: 79%" class="tt mh">
								<h5 style="font-size: 13px;padding: 0px;"><span><?=$tt['ten_dt']?></span></h5>
								<span style="font-size: 13px;"><?=number_format($tt['gia'],0,',','.')?><sup>đ</sup></span>
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
					</div>
				</div>
	</div>
		</div>

</article>




<script>
function In_Content(strid){   
    var prtContent = document.getElementById(strid);
    var WinPrint = window.open('','','letf=0,top=0,width=800,height=800');
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
}
</script>