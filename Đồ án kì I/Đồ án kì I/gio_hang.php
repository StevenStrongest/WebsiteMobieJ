<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đồ án kì I</title>
	<!--Link OWL Carousel -->
	<link rel="stylesheet" href="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\assets\owl.carousel.min.css">
	<link rel="stylesheet" href="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	

	<!-- Css Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Link css -->
	<link rel="stylesheet" type="text/css" href="banthudaodien.css">
	<link rel="stylesheet" type="text/css" href="tatcasanpham.css">

	<!-- Link icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- Link font chữ -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Condensed:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	

	<!------Jquery UI------------->
	<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery-ui//jquery-ui.css">

	<!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
	<!--Phần top -->
	<?php include('top-header.php') ?>
		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>GIỎ HÀNG</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Giỏ hàng--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Giỏ hàng</span>
		</div>

	<!--------------------------------------------------------------------------------------->

	<!-----------Sản phẩm giỏ hàng----------->
	<?php 
	include('connect.php');
		if(isset($_SESSION['cart']) && count($_SESSION['cart']) != 0 || isset($_SESSION['cart_pk']) && count($_SESSION['cart_pk']) != 0){
	?>
		<div id="_update" class="container">
		<div id="gio-hang">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xs-12">
					<div class="card-body-sp">
						<div class="card-text">
							<div style="width: 43%" class="text-left">
								<span>Sản phẩm</span>
							</div>
							<div style="width: 19%" class="a-center">
								<span>Giá</span>
							</div>
							<div style="width: 13%" class="a-center">
								<span>Số lượng</span>
							</div>
							<div style="width: 23%" class="a-center">
								<span>Thành tiền</span>
							</div>
						</div>
						<?php 
							if(isset($_SESSION['cart'])){
						?>
						<?php 
							foreach($_SESSION['cart'] as $id => $sp){
						?>
							<div style="width: 100%;display: inline-block;" class="card-item">
							<div style="width: 14.5%" class="card-sp">
								<a href="#">
									<img src="images/<?=$sp['anh_sp']?>">
								</a>
							</div>
							<div style="width: 26.5%" class="sp-text">
								<h3><a class="text-sp" href="#"><?=$sp['ten_dt']?></a></h3>
								<a href="javascript:void(0)" onclick="_delete(<?=$id?>)" class="delete" title="Xóa sản phẩm"><i style="margin-right: 7px;font-size: 11px;" class="fa fa-times-circle delete-icon"></i>Xóa sản phẩm</a>
							</div>
							<?php
							 $get = "select * from thong_tin_dien_thoai where ma_dt = $id";
							 $sql = mysqli_query($con,$get);
							 $sl = mysqli_fetch_assoc($sql);

							 ?>
							<div style="width: 22%" class="card-cost a-center">
								<span><?=number_format($sp['gia'] ,0,',','.')?><sup>₫</sup></span>
								<p style="font-size: 11px;padding: 5px 0px">Số lượng trong kho: <?=$sl['sl_trong_kho']?></p>
							</div>

							<div style="width: 13%" class="card-number a-center">
								<input type="number" min="1" max="10" onchange="updatecart(<?=$id?>);" id="qty_<?=$id?>" value="<?=$sp['sl']?>" class="number" name="">
							</div>

							<div style="width: 18%" class="card-cost a-center">
								<span><?=number_format(($sp['gia'] * $sp['sl']),0,',','.')?><sup>₫</sup></span>
							</div>
						</div>
						<?php 
						}
						?>

						<?php 
						}
						?>
						<!---Phu kien------>
						<?php 
							if(isset($_SESSION['cart_pk'])){
						?>
						<?php 
							foreach($_SESSION['cart_pk'] as $id => $sp){
						?>
							<div style="width: 100%;display: inline-block;" class="card-item">
							<div style="width: 14.5%" class="card-sp">
								<a href="#">
									<img src="images/<?=$sp['anh_sp']?>">
								</a>
							</div>
							<div style="width: 28.5%" class="sp-text">
								<h3><a class="text-sp" href="#"><?=$sp['ten_dt']?></a></h3>
								<a href="javascript:void(0)" onclick="_delete_pk(<?=$id?>)" class="delete" title="Xóa sản phẩm"><i style="margin-right: 7px;font-size: 11px;" class="fa fa-times-circle delete-icon"></i>Xóa sản phẩm</a>
							</div>
							<?php
							 $get = "select * from phu_kien where ma_phu_kien = $id";
							 $sql_pk = mysqli_query($con,$get);
							 $sl = mysqli_fetch_assoc($sql_pk);

							 ?>
							<div style="width: 19%" class="card-cost a-center">
								<span><?=number_format($sp['gia'] ,0,',','.')?><sup>₫</sup></span>
								<p style="font-size: 11px;padding: 5px 0px">Số lượng trong kho: <?=$sl['sl_trong_kho_pk']?></p>
							</div>

							<div style="width: 13%" class="card-number a-center">
								<input type="number" min="1"  max="10" onchange="updatecart_pk(<?=$id?>);" id="qty_pk_<?=$id?>" value="<?=$sp['sl']?>" class="number" name="">
							</div>

							<div style="width: 19%" class="card-cost a-center">
								<span><?=number_format(($sp['gia'] * $sp['sl']),0,',','.')?><sup>₫</sup></span>
							</div>
						</div>
						<?php 
						}
						?>
						<?php 
						}
						?>
					</div>
				</div>
				<!--------Thanh toán--------->
				<?php
					if(!isset($_SESSION['sum_sp'])){
						$_SESSION['sum_sp'] = 0;
					}

					if(!isset($_SESSION['sum_pk'])){
						$_SESSION['sum_pk'] = 0;
					}
				 ?>
				<?php $_SESSION['sum'] = $_SESSION['sum_sp'] + $_SESSION['sum_pk']; ?>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div style="width: 100%;border: 1px solid #ebebeb;padding: 0px 40px;border-radius: 10px" class="card-body-sp">
						<div class="card-text">
							<div style="width: 100%" class="a-center">
								<span>TỔNG TIỀN</span>
							</div>
						</div>
						<div style="color: #ff4300;font-size: 21px;font-weight: bold; " class="card-cost a-center">
							<span><?=number_format($_SESSION['sum'],0,',','.')?><sup>₫</sup></span>
						</div>
						<div class="btn_tt a-center">
							<?php 
								if(isset($_SESSION['ten_dn']) && isset($_SESSION['mk'])){
							?>
								<span>
									<a href="kiemtradathang.php">TIẾN HÀNH THANH TOÁN</a>
								</span>
							<?php 
							}else{
							?>
								<span>
									<a onclick="tb();" href="#">TIẾN HÀNH THANH TOÁN</a>
								</span>
							<?php 
							}
							?>
						</div>

						<div class="btn_bt a-center">
							<span>
								<a href="tatcasanpham.php">TIẾP TỤC MUA HÀNG</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}else{
	?>	
		<div style="margin: 50px 0px;" class="tb">
			<h3 style="text-align: center;font-weight: bold;">KHÔNG CÓ SẢN PHẨM TỒN TẠI TRONG GIỎ HÀNG</h3>
		</div>
	<?php 
	}
	?>

	
	<!-----------------------------------Footer thông tin cơ sở-------------------------------------->
	<?php include('footer.php') ?>
		<!--------Modal-thông báo------>

		<div id="myModal" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 style="font-weight: bold;" class="modal-title">Bạn chưa có tài khoản</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p style="font-size: 15px;">Bạn cần đăng ký thành viên để thanh toán</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		        <a href="tai_khoan_client.php?action=dangnhap"><button type="button" class="btn btn-primary">Chuyển đến trang đăng nhập</button></a>
		      </div>
		    </div>
		  </div>
		</div>
<!----------------------------------------------------------------------------------------------------------------->


<!-----Kích hoạt thông báo----->
<script type="text/javascript">
	function tb(){
		$('#myModal').modal('show');
	}
</script>


<!-----Cập nhật giỏ hàng------->
<script type="text/javascript">
	function updatecart(id){
		number = $('#qty_'+id).val();
		$.post("updatecart.php",{'id': id,'sl':number}, function(data){
				//after update cart
				$("#_update").load("gio_hang.php #_update");
 			 });
	}
</script>

<!------Xóa giỏ hàng-------->
<script type="text/javascript">
	function _delete(id){
		$.post("updatecart.php",{'id': id,'sl':0}, function(data){
				//after update cart
				$("#_update").load("gio_hang.php #_update");
 			 });
	}
</script>


<!-----Cập nhật giỏ hàng pk------->
<script type="text/javascript">
	function updatecart_pk(id){
		number = $('#qty_pk_'+id).val();
		$.post("updatecart_pk.php",{'id': id,'sl':number}, function(data){
				//after update cart
				$("#_update").load("gio_hang.php #_update");
 			 });
	}
</script>

<!------Xóa giỏ hàng pk-------->
<script type="text/javascript">
	function _delete_pk(id){
		$.post("updatecart_pk.php",{'id': id,'sl':0}, function(data){
				//after update cart
				$("#_update").load("gio_hang.php #_update");
 			 });
	}
</script>

<?php include('thongbaolienhe.php'); ?>

</body>
</html>