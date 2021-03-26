<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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

		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>TIN TỨC</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Tin tức</span>
		</div>

	<!--------------------------------------------------------------------------------------->

<?php 
 include('connect.php');
 $select = "select * from tin_tuc";
 $sql = mysqli_query($con,$select);
 $sql_nb = mysqli_query($con,$select);
?>
	<!--------------------------------------Tất cả sản phẩm--------------------------------->
		<div class="container">
			<div style="margin: 10px 0px;" class="row">
				<div class="col-mg-3 col-lg-3 col-sm-3">
					<div class="danhmuc">
						<i class="fas fa-caret-right"></i>
						 <h2 style="font-size: 15px;" class="title">DANH MỤC SẢN PHẨM</h2>
					</div>
					<div class="danhsach">
						<ul>
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Sản phẩm</a></li>
							<li><a href="#">Tin tức</a></li>
							<li><a href="#">Liên hệ</a></li>
						</ul>
					</div>
					<div class="danhmuc">
						<i class="fas fa-caret-right"></i>
						 <h2 style="font-size: 15px;" class="title">TIN TỨC NỔI BẬT</h2>
					</div>
					<div class="tintuc_hot">
						<?php 
							while ($tt = mysqli_fetch_assoc($sql_nb)) {
						?>
							<div class="muc_tt">
							<div class="title_img">
							<?php 
								if($tt['anh_tieu_de'] != ""){
							?>
								<img src="images/<?=$tt['anh_tieu_de']?>">
							<?php 
							}else{
							?>
								<img src="https://dankogroup.com.vn/pic/icon/no_image.gif">
							<?php 
							}
							?>
							</div>
							<div class="title_nd">
								<span><a href="chitiettintuc.php?id=<?=$tt['id_tin_tuc']?>"><?=$tt['tieu_de']?></a></span>
							</div>
							<div style="width: 100%;height: 1px;background: #ebebeb;margin-top: 15px;"></div>
						</div>
						<?php 
						}
						?>
					</div>
				</div>
				<div class="col-md-9 col-lg-9 col-sm-9">
					<div class="tintuc_all">
						
						<?php 
						while ($tt = mysqli_fetch_assoc($sql)) {
						?>
							<div class="tintuc">
							<div class="vien_tt">
								<div class="img_tt">
								<?php 
									if($tt['anh_tieu_de'] != ""){
								?>
									<img src="images/<?=$tt['anh_tieu_de']?>">
								<?php 
								}else{
								?>
									<img src="https://dankogroup.com.vn/pic/icon/no_image.gif">
								<?php 
								}
								?>
								</div>
								<div class="text">
									<div class="title">
									<a href="chitiettintuc.php?id=<?=$tt['id_tin_tuc']?>"><p><?=$tt['tieu_de']?></p></a>
									</div>
									<div class="nd">
										<p><?=$tt['mo_ta_ngan'];?></p>
									</div>
									<div class="time">
										<span><?=$tt['ngay_dang']?></span>
									</div>
									<div class="read">
										<a href="chitiettintuc.php?id=<?=$tt['id_tin_tuc']?>"><p>Đọc tiếp <i class="fas fa-chevron-right"></i></p></a>	
									</div>
								</div>
							</div>
						</div>
						<?php 
						}
						?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--------------------------------------------------------------------------------------->


	

	<!---------------------------Footer thông tin cơ sở----------------------------------------->
		<?php include('footer.php') ?>

		
</body>
</html>