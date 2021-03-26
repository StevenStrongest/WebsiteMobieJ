<?php 
	session_start();
	if(!isset($_SESSION['ten_dn']) && !isset($_SESSION['mk'])){
		header('location: index.php');
	}else{
		
	}
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
</head>
<body>
	<!--Phần top -->
	<?php include('top-header.php') ?>
	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>TRANG KHÁCH HÀNG</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Trang khách hàng</span>
		</div>

	<!--------------------------------------------------------------------------------------->
	<?php 
		include('connect.php');
		$ma_kh =  $_SESSION['ma_kh'];
		$dl = "select * from don_hang where ma_kh = $ma_kh";
		$recordset = mysqli_query($con,$dl);
	?>

	<!------Trang khách hàng --------->
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-lg-9">
				<div class="khach_hang">
					<div class="header">
						<h3>TRANG KHÁCH HÀNG</h3>
					</div>
					<div class="user">
						<b>Xin chào, </b><span style="color: #ff4300;font-weight: bold;"><?=$_SESSION['ten_kh']?> !</span>
					</div>

					<div class="don_hang">
						<table border="1" style="width: 100%">
							<tr align="center">
								<th>Đơn hàng</th>
								<th>Ngày</th>
								<th>Địa chỉ</th>
								<th>Giá trị đơn hàng</th>
								<th>Tình trạng thanh toán</th>
								<th>Tình trạng vận chuyển</th>
							</tr>
							<?php 
								while ($row = mysqli_fetch_assoc($recordset)) {
									$tinh_trang_dh = $row['tinh_trang_dh'];
				                        if($tinh_trang_dh == 1){
				                          $background = 'background: red';
				                          $trang_thai = "Đang vận chuyển";
				                        }else if($tinh_trang_dh == 2){
				                           $background = 'background: green';
				                           $trang_thai = "Xác Nhận đơn hàng";
				                        }else if($tinh_trang_dh == 3){
				                          $background = 'background: #e35d0f';
				                          $trang_thai = "Hủy đơn hàng";
				                        }else if($tinh_trang_dh == 4){
				                          $background = 'background: #2d7a87';
				                          $trang_thai = "Đã giao hàng";
				                        }else if($tinh_trang_dh == ""){
				                          $background = "background: black";
				                          $trang_thai = "Chưa cập nhật";
				                        }
											?>
								<tr align="center">
									<td><?=$row['ma_dh']?></td>
									<td><?=$row['ngay_dat']?></td>
									<td><?=$row['dia_chi']?></td>
									<td><?=number_format($row['tong_gia'],0,',','.')?>đ</td>
									<td>Chưa thanh toán</td>
									<td><?=$trang_thai?></td>
								</tr>
							<?php 
							}
							?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="tai_khoan">
					<div class="header">
						<h3>Tài khoản của tôi</h3>
					</div>
					<div class="tt_acc">
						<label><i class="fas fa-user"></i> Tên tài khoản: </lable><span style="font-weight: bold;"><?=$_SESSION['ten_dn']?></span><BR>
						<label><i class="fas fa-envelope"></i> Email: </lable><span style="font-weight: bold;"><?=$_SESSION['email']?></span>
					</div>
					<div class="dang_xuat">
						<a href="xulydangxuat.php"><i style="margin-right: 5px;" class="fas fa-sign-out-alt"></i>Đăng xuất</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!---------------------------Footer thông tin cơ sở----------------------------------------->
	<?php include('footer.php') ?>
</body>
</html>