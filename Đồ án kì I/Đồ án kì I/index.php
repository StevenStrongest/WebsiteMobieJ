<?php 
	session_start();
?>
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

		<!-----------------------------Slider----------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

		<!-----------------------Quảng cáo--------------->
		<script>
			$(document).ready(function(){
  $('#qc').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
 	autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});
		</script>



		<div style="width: 100%;margin-top: 12px;" class="picture">
			 <div id="qc" class="owl-carousel owl-theme">
			    <div class="item"><img width="100%" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/slider_1.jpg?1564057446919"></div>
			    <div class="item"><img width="100%" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/slider_2.jpg?1564057446919"></div>
			</div>
		</div>
		<!---------------------------------------------------------------------------->
    
<!-----------------------------Slider-2------------------------------------------>
   <div style="width: 100%" class="slider_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
    				<div style="width: 100%" class="nd-slider">
			    <div class="item-d ">
			    	<div class="">
			    		<div class="row">
			    			<div class="col-md-2 col-sm-2 icon">
			    				<a class="icon-slider2" href=""><img style="display: inline-block;position: relative;top: 23px;width: 28px" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon1.png?1564057446919"></a>
			    			</div>
			    			<div class="col-md-10 col-sm-10">
			    			<span class="title">GIAO HÀNG MIỄN PHÍ</span><br>
			    			<span class="nd">Áp dụng cho đơn hàng trên 500.000đ tại Hà Nội và TP. HCM</span>
			    		</div>
			    		</div>
			    	</div>
			    </div>

			    <div class="item-d ">
			    	<div class="">
			    		<div class="row">
			    			<div class="col-md-2 col-sm-2 icon">
			    				<a class="icon-slider2" href=""><img style="display: inline-block;position: relative;top: 23px;width: 28px" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon2.png?1564057446919"></a>
			    			</div>
			    			<div class="col-md-10 col-sm-10">
			    			<span style="text-transform: uppercase;" class="title">Tri ân khách hàng</span><br>
			    			<span class="nd">Ưu đãi cực lớn, giảm thêm 10% cho khách hàng thân thiết</span>
			    		</div>
			    		</div>
			    	</div>
			    </div>

			    <div class="item-d ">
			    	<div class="">
			    		<div class="row">
			    			<div class="col-md-2 col-sm-2 icon">
			    				<a class="icon-slider2" href=""><img style="display: inline-block;position: relative;top: 23px;width: 28px" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon3.png?1564057446919"></a>
			    			</div>
			    			<div class="col-md-10 col-sm-10">
			    			<span style="text-transform: uppercase;" class="title">Đổi trả trong 30 ngày</span><br>
			    			<span class="nd">Dịch vụ đổi trả, hoàn tiền nhanh chóng với tất cả sản phẩm</span>
			    		</div>
			    		</div>
			    	</div>
			    </div>
			</div>    
    	</div>
    </div>
 </div> 
</div> 

    <!--------------------------------------------------------------------------------->


    <!----------------------------------Banner------------------------------------------>
    <div class="banner">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
    				<a href="#">
    					<img style="width: 100%" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/_banner_1.jpg?1564057446919">
    				</a>
    			</div>
    		</div>
    	</div>
    </div>
    <!--------------------------------------------------------------------------------->

    <!----------------------------Menu Điện Thoại-------------------------------------------->
     <div class="section">
    	<div class="container">
    			<div class="title_mobie">
    				<h2 class="text-dien-thoai">
    					<a href="">ĐIỆN THOẠI</a>
    				</h2>
    			</div>

    			<div class="dt_menu">
    				<ul class="nav">
						  <li class="nav-item">
						    <a class="nav-link" href="index.php">TRANG CHỦ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						    
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="gioithieu.php">GIỚI THIỆU
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="tatcasanpham.php">SẢN PHẨM
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						    
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="tintuc.php">TIN TỨC
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						   <li class="nav-item">
						    <a class="nav-link" href="lienhe.php">LIÊN HỆ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						   <li class="nav-item">
						    <a class="nav-link" href="tatcasanpham.php">XEM TẤT CẢ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a> 
						  </li>
					</ul>
    			</div>

    		</div>
    	</div>

     <!--------------------------------------------------------------------------------->

     <!-------------------------------Sản phẩm mobie----------------------------------------->



<?php include('hienthisp.php') ?>

<!--------------------------------------------------------------------------------->

	<?php include('modal-sp.php') ?>




 <!--------------------------Xử lý carousel xu hướng----------------------->
		<script type="text/javascript">
	$(document).ready(function(){
  $('#xu_huong').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
});
	</script>

<!---------------------Xử lý carousel nhãn hàng---------------->

	<script type="text/javascript">
		$(document).ready(function(){
  $('#nhan_hang').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
})
});
	</script>


<!-----------------------Xử lý carousel phản hồi------------------------------------>
<script type="text/javascript">
	$(document).ready(function(){
  $('#phan_hoi').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});
</script>

		
<!-------------------Xử lý sản phẩm chính hàng 2 --------------------->

		<script>
			$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        800:{
        	items:2
        },
        1000:{
            items:4
        }
    }
})
});
		</script>

     	
	
<!--------------------------------------->

</div>

  

     
<!-------------------Banner Quảng cáo---------------------->
<div class="banner-qc">
	<div class="container">
		<div class="row">
			<div style="padding: 0px" class="col-md-5 col-lg-5 col-xs-5 col-sm-12">
				<div class="banner-img">
					<a href=""><img style="width: 100%" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/_banner_2.jpg?1564057446919"></a>
				</div>
			</div>

			<div style="padding: 0px" class="col-md-7 col-lg-7 col-xs-7 col-sm-12">
				<div class="banner-img">
					<a href=""><img  style="width: 100%;height: 100%" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/_banner_3.jpg?1564057446919"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!------------------------------------------------>

<!----------------------------Menu PHỤ KIỆN-------------------------------------------->
     <div class="section">
    	<div class="container">
    			<div class="title_mobie">
    				<h2 class="text-dien-thoai">
    					<a href="">PHỤ KIỆN</a>
    				</h2>
    			</div>

    			<div class="dt_menu">
    				<ul class="nav">
						  <li class="nav-item">
						    <a class="nav-link" href="#">TRANG CHỦ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						    
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="gioithieu.php">GIỚI THIỆU
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="tatca_phukien.php">SẢN PHẨM
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						    
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="tintuc.php">TIN TỨC
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						   <li class="nav-item">
						    <a class="nav-link" href="lienhe.php">LIÊN HỆ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a>
						  </li>
						   <li class="nav-item">
						    <a class="nav-link" href="tatca_phukien.php">XEM TẤT CẢ
						    	<div style="width: 40%;height: 3px;background: #ff4300;" class="bo"></div>
						    </a> 
						  </li>
					</ul>
    			</div>

    		</div>
    	</div>


     <!--------------------------------------------------------------------------------->


     <!-----------------------------------------Hàng 3------------------------------>
     <!--------------------------------Phu kien---------------------------------------->

<?php include('hienthi_phu_kien.php') ?>


    <!----------------------------------------------Modal Phu kien------------------------------>
	<?php include('modal_phu_kien.php') ?>

     <!--------------------------------------------------------------------------------->


			<!------------Xử lý modal----------->
	<script type="text/javascript">
		$('.releted-dt').owlCarousel({
			 loop:false,
			 margin:10,
			nav:true,
			responsive:{
				 0:{
						items:1
					},
					600:{
						items:2
					},
					1000:{
						items:3
						}
					}
				})
	</script>	
	
	
<!--------------------------------------->

     <!--------------------------------------------------------------------------------->

	</div>


<!-------------------Banner Quảng cáo 2---------------------->
<div class="banner-qc">
	<div class="container">
		<div class="row">
			<div style="padding: 0px" class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
				<div class="banner-img">
					<a href=""><img style="width: 100%" src="https://bizweb.dktcdn.net/thumb/grande/100/341/423/themes/700222/assets/_banner_4.jpg?1564057446919"></a>
				</div>
			</div>

			<div style="padding: 0px" class="col-md-6 col-lg-6 col-xs-6 col-sm-12">
				<div class="banner-img">
					<a href=""><img  style="width: 100%;height: 100%" src="https://bizweb.dktcdn.net/thumb/grande/100/341/423/themes/700222/assets/_banner_5.jpg?1564057446919"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!------------------------------------------------>

<!-------------------------Sản phẩm bán chạy-------------------->


<div class="sp_ban_chay">
	<div style="padding: 0px" class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12">
				<p class="text"><a href="">SẢN PHẨM BÁN CHẠY</a></p>
				<div class="mobie_ban_chay">
					<div class="container">
						<div id="ban_chay" class="owl-carousel owl-theme">
							<?php include('sanphambanchay.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-------------------------------------------------------------->

<!-----------Xử lí js sản phẩm bán chay-------------------------->

<script>
			
  $('#ban_chay').owlCarousel({
    loop:false,
    margin:30,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        800:{
        	items:1
        },
        1000:{
            items:3
        }
    }
})

		</script>

<?php 
	include('connect.php');
 $select = "select * from tin_tuc";
 $sql = mysqli_query($con,$select);
?>

<!--------------------------------Xu hướng----------------------->

<div class="xu_huong">
	<div class="container">
		<div class="text-theme">
			<h3><a href="">XU HƯỚNG MỚI</a></h3>
		</div>

		<div class="nd_xu_huong">
			<div id="xu_huong" class="owl-carousel owl-theme">
<!----------------------------------------Xu hướng --------------------------------------------->
			    
			    <?php 
			    	while ($tt = mysqli_fetch_assoc($sql)) {
			    ?>

			    <div class="item">
			    	<div class="img_xu_huong">
			    		<?php 
			    			if($tt['anh_tieu_de'] != ""){
			    		?>
							<a href="tintuc.php?id=<?=$tt['id_tin_tuc']?>"><img style="height: 176px;" src="images/<?=$tt['anh_tieu_de']?>"></a>
			    		<?php 
			    		}else{
			    		?>
							<a href="tintuc.php?id=<?=$tt['id_tin_tuc']?>"><img style="height: 176px;" src="https://lh3.googleusercontent.com/proxy/bPRO8-JZLaUrfelWuolw3SaZ89BGnkMGCCXoPqWeR8iJB1ORZjvDV-XyhrCHZMB-t7tvOVwLU9crtkfLejPtw7hLcGo"></a>
			    		<?php 
			    		}
			    		?>
			    	</div>

			    	<div class="nd_img">
			    		<h4 style="height: 58px;"><a href="chitiettintuc.php?id=<?=$tt['id_tin_tuc']?>"><?=$tt['tieu_de']?></a></h4>
			    	</div>

			    	<div class="nd_theme">
			    		<p style="height:77px;overflow: hidden;"><?=$tt['mo_ta_ngan']?></p>
			    	</div>

			    	<div class="time_theme">
			    		<div class="time">
			    			<span><?=$tt['ngay_dang']?></span>
			    		</div>

			    		<div class="read_more">
			    			<a href="chitiettintuc.php?id=<?=$tt['id_tin_tuc']?>">
			    				<p>Đọc tiếp</p>
			    				<i class="fas fa-chevron-right"></i>
			    			</a>
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
<!-------------------------------------------------------------->
	
<!--------------------------------------Nhãn hàng---------------------------------------------------->
	<div class="nhan_hang">
		<div class="container">
			<div id="nhan_hang" class="owl-carousel owl-theme">
			<!------------------------------------------Apple---------------------------------------->	
			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=1">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand1.png?1564057446919">
			    		</a>
			    	</span>
			    </div>
			
			<!------------------------------------------Samsung---------------------------------------->	
			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=2">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand2.png?1564057446919">
			    		</a>
			    	</span>
			    </div>
			
			<!------------------------------------------Microsoft---------------------------------------->	

			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=5">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand3.png?1564057446919">
			    		</a>
			    	</span>
			    </div>
			
			<!------------------------------------------Oppo---------------------------------------->	

			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=3">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand4.png?1564057446919">
			    		</a>
			    	</span>
			    </div>

			<!------------------------------------------Sonny---------------------------------------->	

			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=4">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand5.png?1564057446919">
			    		</a>
			    	</span>
			    </div>
			
			<!------------------------------------------Nokia---------------------------------------->	

			    <div class="item">
			    	<span>
			    		<a href="sanphamtheohang.php?hang=12">
			    			<img src="https://bizweb.dktcdn.net/thumb/compact/100/341/423/themes/700222/assets/brand6.png?1564057446919">
			    		</a>
			    	</span>
			    </div>

			</div>
		</div>
	</div>

<!--------------------------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------Phản hồi của khách hàng------------------------------------------>

	<div class="phan_hoi">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="title_phan_hoi">
						 <h2><span>PHẢN HỒI CỦA KHÁCH HÀNG</span></h2>
					</div>

					<div class="comment_main">
						<div id="phan_hoi" class="owl-carousel owl-theme">
				<!-------------------------Khách hàng 1---------------------------------->
						    <div class="item">
						    	<div class="img_khach_hang">
						    		<a href="#"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/anh_1.png?1564057446919"></a>
						    	</div>

						    	<div class="comment_khach_hang">
						    		<span class="name">Đặng Trần Quang</span>
						    		<span>|</span>
						    		<span class="job">Kiến trúc sư</span>

						    		<p class="comment">Mình rất hay mua hàng tại đây vì tin tưởng chất lượng.  Thái độ phục vụ của nhân viên rất tốt, luôn tận tình, chu đáo.</p>
						    	</div>
						    </div>

				<!-------------------------Khách hàng 2---------------------------------->
						    <div class="item">
						    	<div class="img_khach_hang">
						    		<a href="#"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/anh_2.png?1564057446919"></a>
						    	</div>

						    	<div class="comment_khach_hang">
						    		<span class="name">Trương Hà Tùng</span>
						    		<span>|</span>
						    		<span class="job">Dược sĩ</span>

						    		<p class="comment">Mình lựa chọn MobiJ vì tại đây có những sản phẩm giá cả phải chăng, dịch vụ và bảo hành chu đáo.,</p>
						    	</div>
						    </div>

				<!-------------------------Khách hàng 3---------------------------------->	
						    <div class="item">
						    	<div class="img_khach_hang">
						    		<a href="#"><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/anh_3.png?1564057446919"></a>
						    	</div>

						    	<div class="comment_khach_hang">
						    		<span class="name">Mai Thu Thảo</span>
						    		<span>|</span>
						    		<span class="job">Kinh doanh</span>

						    		<p class="comment">Mình may mắn tìm được sản phẩm yêu thích tại MobiJ. Mong MobiJ tiếp tục phát triển về dịch vụ khách hàng và bảo hành sản phẩm.</p>
						    	</div>
						    </div>
						    

						</div>
					</div>
				</div>
				
				<!---------------------Gửi ý kiến khách hàng--------------------------->
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<div class="submit_comment">
						<div class="title_phan_hoi">
						 <h2><span>GỬI Ý KIẾN PHẢN HỒI</span></h2>
						</div>
					
						<div class="form_submit">
							<form >
								<table style="width: 100%;padding: 20px 0px">
									<tr>
										<td>
											<input style="margin-right: 25px" size="" type="text" placeholder="Nhập tên" name="">
											<input type="text" placeholder="Email của bạn" name="">
										</td>
									</tr>

									<tr>
										<td colspan="2">
											<textarea placeholder="Nhập tin nhắn"></textarea>
										</td>
									</tr>

									<tr>
										<td colspan="2" align="left"><input type="submit" value="Gủi ý kiến" name=""></td>
									</tr>
								</table>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->

<!-----Facebook chat by https://apps.elfsight.com ------->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-7796aef7-3091-44e7-ac05-4d78dde0f8a7"></div>

<!-------------------------------Footer thông tin cơ sở--------------------------------------------->
	<?php include('footer.php') ?>
<!---------------------------------------------------------------------------------------------->



</body>
</html>