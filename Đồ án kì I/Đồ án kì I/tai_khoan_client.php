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
	<?php include('top-header.php'); ?>
<!--------------------------------------------------------------------------->
<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

<?php 
	if(isset($_GET['action'])){
?>

<?php 
	if($_GET['action'] == "dangnhap"){
?>
	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Đăng nhập tài khoản</span>
		</div>

	<!--------------------------------------------------------------------------------------->

	<!-------Đăng nhập------->
	<div class="container">
		<div class="dnhap">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div style="width: 100%;height: 100%;" class="bacground-form">
						<img style="width: 100%;height: 100%" src="https://topthuthuat.com/wp/wp-content/uploads/2017/12/powerpoint-chen-anh.jpg">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="tb">
						<h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
						<p>Nếu bạn đã có tài khoản tại đây</p>
					</div>
					<div id="tb" style="width: 100%;margin-bottom: 10px;" class="tb">
							<?php 
								if(isset($_SESSION['tb'])){
							?>
								<span style="color: red;">Tên đăng nhập hoặc mật khẩu không chính xác</span>
							<?php 
							}
							?>

							<?php unset($_SESSION['tb']); ?>
						</div>
					<form method="post" action="xulydangnhap.php">
						<div class="form-group">
							<label for="ten">Tên đăng nhập(*)</label>
		    				<input type="text" class="form-control" required="true" placeholder="Vui lòng nhập tên đăng nhập" name="ten_dn" id="ten_dn">
		    				<p id="error_dn"></p>
						</div>
						<div class="form-group">
							<label for="mk">Mật khẩu (*)</label>
		    				<input type="password" class="form-control" required="true" placeholder="Vui lòng nhập mật khẩu" name="mk" id="mk_dn">
		    				<p id="error_mk"></p>
						</div>
						<div id="dn">
							<input type="submit" value="Đăng nhập" name="dn">
							<a href="tai_khoan_client.php?action=dangky">Trở về trang đăng ký <i class="fas fa-arrow-alt-circle-right"></i></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php 
}else if($_GET['action'] == "dangky"){
?>
	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>ĐĂNG KÝ TÀI KHOẢN</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Đăng ký tài khoản</span>
		</div>

	<!--------------------------------------------------------------------------------------->

	<!----Đăng ký--------------->
	<div class="container">
		<div class="dnhap">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div style="width: 100%;height: 100%" class="background-form">
						<img style="width: 100%;height: 100%" src="https://topthuthuat.com/wp/wp-content/uploads/2017/09/powerpoint-dep.jpg">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="tb">
						<h3>ĐĂNG KÝ TÀI KHOẢN</h3>
						<p>Nếu bạn chưa có tài khoản vui lòng đăng ký tại đây</p>
					</div>
					<div id="tb" style="width: 100%;margin-bottom: 10px;" class="tb">
							<?php 
								if(isset($_SESSION['tb'])){
							?>
								<span style="color: red;">Tên đăng nhập hoặc mật khẩu đã tồn tại</span>
							<?php 
							}
							?>

							<?php unset($_SESSION['tb']); ?>
						</div>
						<form method="post" action="xulydangky.php">
							<div class="form-group">
								<label for="ten">Tên(*)</label>
			    				<input type="text" class="form-control" required="true" placeholder="Vui lòng nhập tên của bạn" name="ten" id="ten">
							</div>
							<div class="form-group">
								<label for="ten_dn">Tên đăng nhập(*)</label>
			    				<input type="text" class="form-control" required="true" minlength="4" placeholder="Vui lòng nhập tên đăng nhập" name="ten_dn" id="ten_dk">
			    				<p id="ktra"></p>
							</div>
							<div class="form-group">
								<label for="mk">Mật khẩu (*)</label>
			    				<input type="password" class="form-control" required="true" minlength="6" placeholder="Vui lòng nhập mật khẩu" name="mk" id="mk_dk">
			    				<p id="ktra_mk"></p>
							</div>
							<div class="form-group">
								<label for="email">Email (*)</label>
			    				<input type="email" class="form-control" required="true" placeholder="Vui lòng nhập email" name="email" id="email_dk">
							</div>
							<div id="dn">
								<input type="submit" value="Đăng Ký" name="dk">
								<a href="tai_khoan_client.php?action=dangnhap">Trở về trang đăng nhập <i class="fas fa-arrow-alt-circle-right"></i></a>
							</div>
						</form>
					</div>
				</div>
			</div>
	</div>
<?php 
}
?>
	
<?php 
}else{
?>

<div class="text-header">
	<h2>BẠN CHƯA ĐĂNG NHẬP</h2>
</div>
<div class="back">
	<a href="index.php">Trang chủ</a>
	<span class="space">/</span>
	<span class="text"><a href="tai_khoan_client.php?action=dangnhap">Đăng nhập</a></span>
</div>
<?php 
}
?>

	<!-------------------Xử lý tìm kiếm------------------------>
	<?php 
		include('connect.php');

		if(isset($_GET['submit'])){
			if(isset($_GET['search'])){
				$search = $_GET['search'];
				$tk = "select * from thong_tin_dien_thoai where ten_dt like '$search%' ";
				$rs = mysqli_query($con,$tk);
				echo "<h5 style='text-align: center;margin-top: 30px;'><b>Có ".mysqli_num_rows($rs)." kết quả tìm kiếm phù hợp</b></h5>";
			}

			if(mysqli_num_rows($rs) == 0){
				echo "<h5 style='text-align: center;margin-top: 30px;'><b>KHÔNG TÌM THẤY BẤT KỲ KẾT QUẢ NÀO VỚI TỪ KHÓA TRÊN.</b></h5>";
			}else{

			}



		}

	?>



	<!----------------------Footer thông tin cơ sở----------------------------------->
		<?php include('footer.php'); ?>

	<!---Xử lý đăng ký bằng ajax---->
		<script type="text/javascript">
			$(document).ready(function(){
				 $('#ten_dk').keyup(function(){
					var ten_dk = $(this).val();
					$.post("xulydangkyajax.php",{tdk: ten_dk},function(data){
						$('#ktra').html(data);
					});
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#mk_dk').keyup(function(){
					var mk = $(this).val();
					$.post("xulydangkyajax.php",{mk_dk: mk},function(dl){
						$('#ktra_mk').html(dl);
					});
				});
			});
		</script>

		<!---Xử lý đăng nhập bằng ajax---->
		<script type="text/javascript">
			$(document).ready(function(){
				 $('#ten_dn').keyup(function(){
					var ten_dn = $(this).val();
					$.post("xulydangkyajax.php",{tdn: ten_dn},function(data){
						$('#error_dn').html(data);
					});
				});
			});

			$(document).ready(function(){
				 $('#ten_dn').blur(function(){
					$('#error_dn').html('');				
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				var mk_dn = $('#mk_dn').keyup(function(){
					var mk = $(this).val();
					$.post("xulydangkyajax.php",{mk_dn: mk_dn},function(dl){
						$('#error_mk').html(dl);
					});
				});
			});
		</script>
	<?php include('thongbaolienhe.php'); ?>
</body>
</html>