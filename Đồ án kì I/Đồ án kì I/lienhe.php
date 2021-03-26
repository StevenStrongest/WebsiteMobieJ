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
				<h2>LIÊN HỆ</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Liên hệ</span>
		</div>

	<!--------------------------------------Liên hệ-------------------------------->
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-7">
				<div class="form_lh">
					<h2 style="font-weight: bold;margin-bottom: 50px;">Liên hệ với chúng tôi</h2>
					<form method="post" action="xulylienhe.php">
						<input type="text" required="true" placeholder="Nhập tên" class="tt_lh" name="ten">
						<input type="email" required="true" placeholder="Email của bạn" class="tt_lh" name="email"><br>
						<textarea  required placeholder="Nhập tin nhắn" class="tin_nhan" name="tin_nhan"></textarea>
						<button type="submit" name="submit">GỬI PHẢN HỒI</button>
					</form>
				</div>
			</div>
			<div class="col-md-5 col-lg-5">
				<div class="tt_ad">
					<div class="sdt">
						<h5>TỔNG ĐÀI HỖ TRỢ KHÁCH HÀNG</h5>
						<p><a href="tel:0971439061">0971439061</a></p>
						<h5>TỔNG ĐÀI TƯ VẤN DỊCH VỤ</h5>
						<p><a href="tel:0971439061">0971439061</a></p>
					</div>
					<div class="dc_lh">
						<h5>HỆ THỐNG CỬA HÀNG</h5>
						<p class="text-cl">TRỤ SỞ</p>
						<p>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</p>
						<p class="text-cl">HÀ NỘI</p>
						<p>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</p>
						<p class="text-cl">TP.HỒ CHÍ MINH</p>
						<p>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div style="margin: 30px 0px" class="googlemap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7444.035041718734!2d105.43741087456364!3d21.111867643813564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sso%20nha%201%20ngo%20257%20xuan%20khanh%20son%20tay%20ha%20noi!5e0!3m2!1svi!2s!4v1588927537625!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--------------------------------------------------------------------------------------->


	

	<!---------------------------Footer thông tin cơ sở----------------------------------------->
		<?php include('footer.php') ?>
		<?php include('thongbaolienhe.php'); ?>

		
</body>
</html>