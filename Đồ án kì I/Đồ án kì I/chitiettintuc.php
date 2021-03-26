<?php session_start(); ?>
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
if(isset($_GET['id'])){
$id = $_GET['id'];
$select = "select * FROM tin_tuc inner join tai_khoan_quan_tri on tin_tuc.id = tai_khoan_quan_tri.id where id_tin_tuc = $id";
$sql = mysqli_query($con,$select);
$row = mysqli_fetch_assoc($sql);
$se = "select * from tin_tuc";
$sql_tt = mysqli_query($con,$se);
}
?>

	<!--------------------------------------Tất cả tin tức--------------------------------->
		<div class="container">
			<div style="margin: 10px 0px;" class="row">
				<div class="col-mg-3 col-lg-3">
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
							while ($tt = mysqli_fetch_assoc($sql_tt)) {
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
				<div class="col-md-9 col-lg-9">
					<?php 
						if($row['anh_tieu_de'] != ""){
					?>
						<div style="background-image: url(images/<?=$row['anh_tieu_de']?>);margin-bottom: 50px;" class="tieude">
						<div class="header-tt">
							<h3><?=$row['tieu_de']?></h3>
						</div>
					</div>
					<?php 
					}else{
					?>
						<div style="background-image: url(https://dankogroup.com.vn/pic/icon/no_image.gif);margin-bottom: 50px;" class="tieude">
						<div class="header-tt">
							<h3><?=$row['tieu_de']?></h3>
						</div>
					</div>
					<?php 
					}
					?>
					<div style="width: 100%;" class="nd_ct">
							<?=$row['noi_dung_chi_tiet']?>
							<div style="width: 100%;text-align: right;padding: 40px 50px" class="dangtin">
								<p style="color: #a09999;font-size: 15px">Được đăng bởi</p>
								<img style="width: 30px;height: 30px;margin: 0px!important;" src="https://i.ya-webdesign.com/images/business-person-icon-png-1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle">
								<span><?=$row['user']?></span>
							</div>	
						</div>
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
						<div style="width: 100%;height: 1px;background: #ebebeb;margin: 20px 0px"></div>
						<div class="comment">
							<div class="fb-comments" data-href="http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitiettintuc.php" data-numposts="15" data-width="100%"></div>
						</div>
				</div>
			</div>
		</div>
	<!--------------------------------------------------------------------------------------->


	

	<!---------------------------Footer thông tin cơ sở----------------------------------------->
		<?php include('footer.php') ?>

		
</body>
</html>