
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<span>
						<i class="fa fa-phone"></i>
						Hotline: 
						<a href="">0971439061</a>
					</span>

					<span>
						<i style="padding-right: 5px;font-size: 14px" class="fa fa-envelope"></i>
						Email: 
						<a href="">ducmanhdv@gmail.com</a>
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Header và menu-->
	<div class="header">
		<div class="mid-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<div class="logo">
							<a href="index.php"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/logo.png?1564057446919"></a>
						</div>
					</div>


					<div class="col-lg-8 col-md-4 col-sm-4 col-xs-4">
						<div class="header-left">
							<nav class="navbar">
								<button style="display: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-bars"></i></button>
								<ul class="nav collapse navbar-collapse" id="collapsibleNavbar">
									<li class="nav-item active">
										<a class="menu-main" href="index.php">Trang chủ</a>
									</li>

									<li class="nav-item">
										<a class="menu-main" href="gioithieu.php">Giới thiệu</a>
									</li>

									<li class="nav-item">
										<a class="menu-main" href="tatcasanpham.php">Sản phẩm</a>
									</li>

									<li style="position: relative;" class="nav-item">
										<a class="menu-main" href="tintuc.php">Tin tức</a>
										<i style="position: relative;right: 37px;font-size: 16px" class="fa fa-angle-down"></i>
										<ul class="menu">
											<li style="border-top: 3px solid #ff4300"><a class="item" href="">Tin mới</a></li>
											<li><a class="item" href="#">Thủ thuật</a></li>
											<li><a class="item" href="#">Xu hướng</a></li>
										</ul>
									</li>

									<li class="nav-item">
										<a class="menu-main" href="lienhe.php">Liên hệ</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
						<div id="header-right" class="header-right">
							<div style="float: left" class="gio-hang">
								<a style="line-height: 80px;margin-right: 10px;" href=""><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/cart-icon.png?1564057446919"></a>
							</div>
							<?php 
							$numbercart = 0;
								if(isset($_SESSION['cart'])){
									foreach ($_SESSION['cart'] as $key => $value) {
										$numbercart++;
									}
								}

								if(isset($_SESSION['cart_pk'])){
									foreach ($_SESSION['cart_pk'] as $key => $value) {
										$numbercart++;
									}
								}
							?>
							<div class="text-gio-hang">
								<span style="line-height: 86px"><a class="text" href="gio_hang.php">GIỎ HÀNG</a></span>
								<span name="so" id="numbercart" class="badge badge-danger"><?=$numbercart?></span>
							</div>

							<div class="gio-hang icon-people">
								<?php 
									if(!isset($_SESSION['ten_dn']) && !isset($_SESSION['mk'])){
								?>
									<a style="" class="icon" href="tai_khoan_client.php?action=dangnhap"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/user.png?1564057443810"></a>
								<?php 
								}else{
								?>
									<a style="" class="icon" href="khachhang.php"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/user.png?1564057443810"></a>
								<?php 
								}
								?>

								<?php 
									if(!isset($_SESSION['ten_dn']) && !isset($_SESSION['mk'])){
								?>
									<div class="dieuhuong">
										<div class="dn">
											<a href="tai_khoan_client.php?action=dangnhap"><span>Đăng nhập</span></a>
										</div>
										<div class="dk">
											<a href="tai_khoan_client.php?action=dangky"><span>Đăng ký</span></a>
										</div>
									</div>	
								<?php 
								}else{
								?>
									<div class="dieuhuong">
										<div class="dn">
											<a href="khachhang.php"><span><?=$_SESSION['ten_dn']?></span></a>
										</div>
										<div class="dk">
											<a href="xulydangxuat.php"><span>Đăng xuất</span></a>
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
	</div>	
		<!-- Menu chính  -->
		<div class="menu-main">
			<div class="container">
				<div class="row">
					<div style="padding: 0px;border-right: 1px solid #e8dddd;border-bottom: 1px solid #e8dddd" class="col-lg-9 col-md-8 hidden">
						<ul class="nav">
							<li style="position: relative;" class="nav-item">
								<a class="nav-link" href="">ĐIỆN THOẠI
									<i class="fa fa-angle-down nav-link"></i>
								</a>
								<ul>
									<li style="border-top: 3px solid #ff4300">
										<a style="position: relative;" href=""> Apple </a>
										<i class="fa fa-angle-right"></i>
										<ul class="up" style="position: absolute;top: 1px;left: 209px;box-shadow: 1px 1px 1px 1px silver">
											<li><a href="sanphamoi.php">Sản phẩm mới</a></li>
											<li><a href="sanphamnoibat.php">Sản phẩm nổi bật</a></li>
										</ul>
									</li>
									<li><a href=""> Samsung </a></li>
									<li>
										<a style="position: relative;" href=""> Xiaomi </a>
										<i class="fa fa-angle-right"></i>
										<ul class="up" style="position: absolute;top: 110px;left: 209px;box-shadow: 1px 1px 1px 1px silver">
											<li><a href="sanphamoi.php">Sản phẩm mới</a></li>
										</ul>
									</li>
									<li>
										<a style="position: relative;" href=""> Sony </a>
										<i class="fa fa-angle-right"></i>
										<ul class="up" style="position: absolute;top: 165px;left: 209px;box-shadow: 1px 1px 1px 1px silver">
											<li><a href="sanphamoi.php">Sản phẩm mới</a></li>
											<li><a href="sanphamnoibat.php">Sản phẩm nổi bật</a></li>
										</ul>
									</li>
									<li><a href=""> Nokia </a></li>
									<li><a href=""> Oppo </a></li>
									<li><a href=""> Tất cả </a></li>
								</ul>
								
							</li>

							<li class="nav-item">
								<a class="nav-link" href="">MÁY TÍNH BẢNG
									<span><i class="fa fa-angle-down nav-link"></i></span>
								</a>
								<ul style="position: absolute;left: 167px;">
									<li style="border-top: 3px solid #ff4300">
										<a style="position: relative;" href=""> iPad </a>									
									</li>
									<li>
										<a style="position: relative;" href="">Samsung Galaxy Tab</a>
										<i class="fa fa-angle-right"></i>
										<ul class="up" style="position: absolute;top: 55px;left: 209px;box-shadow: 1px 1px 1px 1px silver">
											<li>Sản phẩm mới</li>
										</ul>										
									</li>
									<li>
										<a style="position: relative;" href=""> Amazon Kindle  </a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="">PHỤ KIỆN
									<i class="fa fa-angle-down nav-link"></i>
								</a>
								<ul style="position: absolute; left: 345px">
									<li style="border-top: 3px solid #ff4300">
										<a style="position: relative;" href=""> Ốp lưng </a>
									</li>
									<li>
										<a href=""> Tai nghe </a>
										<i class="fa fa-angle-right"></i>
										<ul class="up" style="position: absolute;top: 55px;left: 209px;box-shadow: 1px 1px 1px 1px grey">
											<li><a href="sanphamoi.php">Sản phẩm mới</a></li>
											<li><a href="sanphamnoibat.php">Sản phẩm nổi bật</a></li>
										</ul>
									</li>

									<li>
										<a style="position: relative;" href=""> Xạc cáp </a>
									</li>
									<li>
										<a style="position: relative;" href=""> Kính VR </a>
									</li>
									<li><a href=""> Pin dự phòng </a></li>
									<li><a href=""> Tất cả </a></li>
								</ul>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="">BÁN CHẠY</a>
							</li>

							<li style="margin-left: 12px" class="nav-item">
								<a style="" class="nav-link" href="">KHUYẾN MÃI</a>
							</li>
						</ul>
					</div>

					<div style="border-bottom: 1px solid #e8dddd;border-right: 1px solid #e8dddd" class="col-lg-3 col-md-12 search">
						<form method="get" action="timkiem.php">
							<button style="background: #fff;border: 0px;outline: none;" type="submit" name="submit"><i class="fa fa-search"></i></button>
							<input type="text" id="tags" placeholder="Tìm kiếm..." name="search">
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-------------------------------------------------------------------------->

		<!---Scoll-top------>
		<p id="back-to-top">
			<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</p>
		<script type="text/javascript">

	if ($(window).scrollTop() > 200) {
            	$('#back-to-top').fadeIn();
        } else {
            	$('#back-to-top').fadeOut();
        }
	$(window).scroll(function () {
	        if ($(this).scrollTop() > 200) {
			$('#back-to-top').fadeIn();
	        } else {
	            	$('#back-to-top').fadeOut();
	        }
	});
	$('#back-to-top').click(function () {
	        $("html, body").animate({
	            	scrollTop: 0
	        }, 600);
	        return false;
	});
</script>
