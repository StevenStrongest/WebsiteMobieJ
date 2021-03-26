<?php 
	if(!isset($_GET['id'])){
		header('location: index.php');
	}
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
	<link rel="stylesheet" type="text/css" href="tatcasanpham.css">
	<link rel="stylesheet" type="text/css" href="banthudaodien.css">

	<!-- Link icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- Link font chữ -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Condensed:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

	<!-----Link jqery rateit------>
	<link href="rateit.js-master/src/rateit.css" rel="stylesheet" type="text/css">
	<script src="rateit.js-master/src/jquery.rateit.js" type="text/javascript"></script>
	
	<!------Jquery UI------------->
	<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery-ui//jquery-ui.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#myTabs').tabs();
		});
	</script>

	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
	<?php include('top-header.php') ?>

	<?php 
		include('connect.php');
		$id = $_GET['id'];
		$ht = "select * from phu_kien where ma_phu_kien = $id";
		$recordset = mysqli_query($con,$ht);
		$ct = mysqli_fetch_assoc($recordset);
		$_SESSION['ma_pk'] = $ct['ma_phu_kien'];
		$ma_pk = $ct['ma_phu_kien'];
	?>

		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2><?=$ct['ten_phu_kien']?></h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text"><?=$ct['ten_phu_kien']?></span>
		</div>

	<!--------------------------------------------------------------------------------------->
	
	<!-------Chi tiết sản phẩm---------->
<div class="container">
	<div class="all">
		<div class="row">
			<?php
				if(isset($ct)){
					if($ct['hinh_anh_lien_quan_pk'] != ""){
						$chuoi = $ct['hinh_anh_lien_quan_pk'];
						$hinh_anh_lien_quan = explode(',',$chuoi);
					}else{
						$hinh_anh_lien_quan = "";
					}
					$tinh_trang = $ct['sl_trong_kho_pk'];
					if($tinh_trang == 1){
						$tinh_trang = "Còn hàng";
					}else{
						$tinh_trang = "Hết hàng";
					}
			?>
				 <div class="col-lg-4 col-md-5 col-xs-12">
					        	<div style="border: 0px;height: 330px;width: 100%" class="dt">
					        	<figure id="zoom" class="zoom" style="background:url('images/<?=$ct['anh_pk']?>')" onmousemove="zoom(event)" ontouchmove="zoom(event)">
								  <img class="img-fluid anh_goc" id="anh_goc_pk<?=$ct['ma_phu_kien']?>" src="images/<?=$ct['anh_pk']?>" />
								</figure>
					        	</div>
					        	<div style="margin-left: 32px;" class="color_dt">
					        		<div class="container">
					        			<div id="color-dt-2" class="releted-dt owl-carousel owl-theme">
						        			<?php 
						        				if($hinh_anh_lien_quan != ""){
						        			?>
												<?php 
						        				foreach ($hinh_anh_lien_quan as $key => $img) {
							        			?>
											    <div class="item"><a href="javascript:change(<?=crc32($img)?>)"><img class="img_<?=crc32($key.$ct['ma_phu_kien'])?>" id="img_<?=crc32($img)?>" src="images/<?=$img?>"></a></div>
							        			<?php 
							        			}
							        			?>
						        			<?php 
						        			}
						        			?>
										</div>
					        	 	</div>
					        	</div>
					        </div>

					         <?php 
					        	$star = 0; 
					        	$bien = 0;
					        	$ss = "select * from danh_gia_pk where ma_phu_kien = $ma_pk";
					        	$sql = mysqli_query($con,$ss);
					        	while ($dg = mysqli_fetch_assoc($sql)) {
					        		$star += $dg['so_sao'];
					        		$bien++;
					        	}

					        	if($star != 0){
					        		$star = (int)($star / $bien);
					        	}
					        ?>

					        <div class="col-md-4 col-lg-4 ">
					        	<div class="thong_tin">
					        		<h3><a href="#"><?=$ct['ten_phu_kien']?></a></h3>

					        		<div class="star">
					        			<?php 
					        				if($star != 0){
					        			?>
											<?php 
					        					for($i=0;$i<$star;$i++){
					        				?>
												<i style="color: #f8b802" class="fas fa-star"></i>
											<?php
						        			}
						        			?>

						        			<?php 
					        					for($i=0;$i<5-$star;$i++){
					        				?>
												<i class="fas fa-star"></i>
											<?php
						        			}
						        			?>
					        			<?php 
					        			}else{
					        			?>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span style="font-weight: bold;">(0 lượt đánh giá)</span>
					        			<?php 
					        			}
					        			?>
							    		<br>
							    		<p class="cost-main"><?=number_format($ct['gia_khuyen_mai_pk'],0,',','.')?><sup>đ</sup></p>
							    		<p class="cost"><?=number_format($ct['gia_goc_pk'],0,',','.')?><sup>đ</sup></p>
							    	</div>
							    	<p class="text-tb">Tình trạng:</p><span class="tinh_trang"><?=$tinh_trang?></span>

							    	<div style="width: 100%;height: 1px;background: #ddd;margin-bottom: 20px;"></div>

							    	<div class="tt_chi_tiet">
							    		<?=$ct['mo_ta']?>
							    	</div>

							    	<?php 
							    		if($ct['mo_ta'] != ""){
							    	?>
									<div style="width: 100%;height: 1px;background: #ddd;margin: 20px;"></div>

							    	<?php 
							    	}
							    	?>
							    	

							    	<?php 
							    			if($ct['sl_trong_kho_pk'] > 0){
							    	?>							   
									
									<div style="display: inline-block;" class="text-sl">
										<span class="text">SỐ LƯỢNG</span>
									</div>
							    	<div style="border: 0px;margin: 20px 20px;width: 150px;" class="so_luong">
							    			<input style="width: 100%;border: 1px solid silver;border-radius: 50px;padding: 0px 10px" type="number" id="number_pk_<?=$ct['ma_phu_kien']?>" value="1" name="number" min="1" max="10" class="number">
							    			<input style="display: none;" id="cost_pk_<?=$ct['ma_phu_kien']?>" type="number" readonly="true" value="<?=$ct['gia_khuyen_mai_pk']?>" name="id">
							    		</div>

							    	<div style="width: 100%" class="cart">	
											<button onclick="addcard_pk(<?=$ct['ma_phu_kien']?>)" style="width: 100%"><span>CHO VÀO GIỎ HÀNG</span></button>
										</div>
						        	</div>
							    		<?php 
							    		}else{
							    		?>

								    	<div style="width: 100%;margin: 20px 0px;" class="cart">	
												<button style="width: 100%;" disabled="true" style="width: 100%"><span>HẾT HÀNG</span></button>
											</div>
							        	</div>
											
							    		<?php 
							    		}
							    		?>
							    	

					        </div>
	
			<?php 
			}
			?>
			<div class="col-lg-4 col-md-4">
				<div class="container">
					<div style="border-top: 2px solid #ff4300" id="qc" class="row">				        		
					        <div class="col-md-2 col-lg-2 col-sm-4 icon">
							    <img style="display: inline-block;position: relative;top: 23px;width: 28px" src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon1.png?1564057446919">
							</div>
							<div class="col-md-12 col-lg-10">
							    <span class="title">GIAO HÀNG MIỄN PHÍ</span><br>
							    <span class="nd">Áp dụng cho đơn hàng trên 500.000đ tại Hà Nội và TP. HCM</span>
							</div>
							    	</div>
							 <div id="qc" class="row">				        		
						        <div class="col-md-2 col-lg-2 col-sm-4 icon">
								    <img style="display: inline-block;position: relative;top: 23px;width: 28px" src="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon2.png?1564057446919">
								</div>
								<div class="col-md-12 col-lg-10">
								    <span class="title">TRI ÂN KHÁCH HÀNG</span><br>
								    <span class="nd">Ưu đãi cực lớn, giảm thêm 10% cho khách hàng thân thiết</span>
								</div>
							</div>
							<div id="qc" class="row">				        		
						        <div class="col-md-2 col-lg-2 col-sm-4 icon">
								    <img style="display: inline-block;position: relative;top: 23px;width: 28px" src="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon3.png?1564057446919">
								</div>
								<div class="col-md-12 col-lg-10">
								    <span class="title">ĐỔI TRẢ TRONG 30 NGÀY</span><br>
								    <span class="nd">Dịch vụ đổi trả, hoàn tiền nhanh chóng với tất cả sản phẩm</span>
								</div>
							</div>

							<div class="danhmuc">
							    <i class="fas fa-caret-right"></i>
							    <h2 class="title">DANH MỤC SẢN PHẨM</h2>
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
					    </div>
					</div>

				</div>
			</div>
		</div>

</div>

<!-------Mô tả - Banner Quảng cáo-------->
<div style="margin-bottom: 50px;" class="mota">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div id="myTabs">
					<ul> 
						<li><a href="#tab_1"><span>MÔ TẢ SẢN PHẨM</span></a></li>
						<li><a href="#tab_2">BÌNH LUẬN</a></li>
						<li><a href="#tab_3">ĐÁNH GIÁ</a></li>
					</ul>

					<?php 
						if($ct['mo_ta_ct'] != ""){
					?>
						<div id="tab_1"><?=$ct['mo_ta_ct']?></div>
					<?php 
					}else{
					?>
						<div id="tab_1">Thông tin sản phẩm đang được cập nhật</div>
					<?php 
					}
					?>

					<?php 
					$tong = "select * from danh_gia_pk where ma_phu_kien = $ma_pk";
					$sql_sum = mysqli_query($con,$tong);
					$sum_danhgia = mysqli_num_rows($sql_sum);
					?>

					<div id="tab_2">
						<div id="fb-root"></div>
						<div class="fb-comments" data-href="http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitietpk.php" data-numposts="15" data-width="auto"></div>
							
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
					</div>
					<div id="tab_3">
						<form method="post" action="xulydanhgiapk.php">
							<h5>Đánh giá sản phẩm của chúng tôi</h5>
							<div class="danh_gia">
								<div class="row">
									<div class="col-md-3 col-lg-3">
										<div class="da_danh_gia">
											<span><?=$star?></span>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="sl_danh_gia">
											<p>1 <i class="fas fa-star"></i></p>
											<p>2 <i class="fas fa-star"></i></p>
											<p>3 <i class="fas fa-star"></i></p>
											<p>4 <i class="fas fa-star"></i></p>
											<p>5 <i class="fas fa-star"></i></p>
										</div>

										<div class="tt_danhgia">
											<?php 
											for($i=1;$i<=5;$i++){
												$sl_dg = "select * from danh_gia_pk where so_sao = $i and ma_phu_kien = $ma_pk";
												$sl_sao = mysqli_query($con,$sl_dg);
												$so_sao = mysqli_num_rows($sl_sao);
												if($so_sao == 0){
													$dl_sao = 0;
												}else{
												$dl_sao = ($so_sao / $sum_danhgia)*100;
												}
										?>
											<div class="progress">
											  <div class="progress-bar" style="width:<?=$dl_sao?>%"></div>
											</div>
										<?php 
										}
										?>
										
										</div>
	
										<?php 
											for($i=1;$i<=5;$i++){

											}
										?>
										<div class="luot_danhgia">
											<?php 
											for($j=1;$j<=5;$j++){
												$sl_dg = "select * from danh_gia_pk where so_sao = $j and ma_phu_kien = $ma_pk";
												$sl_sao = mysqli_query($con,$sl_dg);
												$so_sao = mysqli_num_rows($sl_sao);
										?>
											<p>(<?=$so_sao?> đánh giá)</p>
										<?php 
										}
										?>
										</div>
									</div>
									<?php 
											$ma_pk= $id;
											if(isset($_SESSION['ten_dn']) && isset($_SESSION['mk'])){
												$ma_kh = $_SESSION['ma_kh'];
												$rr = "select count(*) as ktra from danh_gia_pk where ma_kh = $ma_kh and ma_phu_kien = $ma_pk";
												$tt_sql = mysqli_query($con,$rr);
												$ktra = mysqli_fetch_assoc($tt_sql);
												$kiemtra = $ktra['ktra']; 
											}else{
												$kiemtra = "";
											}
									?>
									<div class="col-md-3 col-lg-3">
										<div class="gui_danhgia">
											<?php 
												if($kiemtra == 0){
											?>
												<button onclick="danhgia()" id="dg" type="button">Đánh giá</button>
											<?php 
											}else if($kiemtra == 1){
											?>
												<button style="font-size: 11px" name="huy" type="submit">Hủy đánh giá</button>
											<?php 
											}
											?>
										</div>
									</div>
								</div>
							</div>

							<div class="chon_danh_gia">
									<label>Chọn đánh giá của bạn:</label>
									<div id="rateit_star1"  data-productid="123"></div>
									<input style="display: none;" type="number" id="star" name="number">
									<input style="display: none;" value="<?=$_SESSION['ma_pk']?>" type="number" value="" name="ma_pk">
									<?php ?>
							</div>
							
							<div class="nhan_xet">
								<?php 
								if(isset($_SESSION['ten_dn']) && isset($_SESSION['mk'])){
								?>
								<button style="display: none;" id="guidanhgia" type="submit" name="submit">Gửi đánh giá</button>
								<?php 
								}else{
								?>
								<button style="display: none;" id="guidanhgia" onclick="tb_danhgia();" type="button">Gửi đánh giá</button>
								<?php 
								}
								?>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="container">
					<div id="banner-qc">
						<img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/banner_as.jpg?1564057446919">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--------Modal thông báo đánh giá----------->
<div id="tb_danhgia" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 style="font-weight: bold;" class="modal-title">Bạn chưa đăng nhập</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <h6 style="font-weight: bold;">Bạn cần đăng nhập để thực hiện chức năng này</h6>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		        <a href="tai_khoan_client.php?action=dangnhap"><button type="button" class="btn btn-primary">Chuyển đến trang đăng nhập</button></a>
		      </div>
		    </div>
		  </div>
		</div>
<!----------------------------------------------------------------------------------------------------------------->

	<!----------------------------Footer thông tin cơ sở--------------------------->
	<?php include('footer.php') ?>
<!-------Modal thông báo giỏ hàng------->
<div style="width: 1242px;" class="modal fade" tabindex="-1" id="tb_pk" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 750px;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h5 class="modal-title"style="text-align: center;margin-bottom: 15px;">Thêm vào giỏ hàng thành công</h5>
        <div class="row">
          <div style="padding: 0px" id="modal-cart-left" class="col-md-6">
          	<div style="padding: 20px;border-bottom: 1px solid #eaebf3;border-right: 1px solid #eaebf3;border-top: 1px solid #eaebf3" class="text">
          		<i style="font-size: 20px;margin-right: 10px" class="far fa-calendar-check"></i><span style="font-weight: bold;font-size: 12px;color: #ff4300">Sản phẩm vừa được thêm</span>
          	</div>
          	<div style="border-right: 1px solid #eaebf3" class="sp">
          		<img style="width: 115px;margin: 20px" id="xxx_pk" src="">
          		<div style="width: 40%;display: inline-block;" class="sp_txt">
          			<span style="font-size: 12px;font-weight: bold;color: " id="ten_pk"></span><br>
          			<span style="font-size: 13px;font-weight: bold;color:#ff4300;margin-top: 10px; " id="gia_pk"></span>
          		</div>
          	</div>
          </div>
          <div style="padding: 0px" class="col-md-6">
          	<div style="padding: 20px;border-bottom: 1px solid #eaebf3;border-right: 1px solid #eaebf3;border-top: 1px solid #eaebf3" class="txt">
          		<i style="font-size: 20px;" class="fas fa-cart-plus"></i>
         		<span>GIỎ HÀNG</span>
          	</div>
          	<div style="padding: 45px 20px" class="tt">
          		<span><b>Số lượng: </b></span><span style="font-weight: bold;" id="sl_pk"></span><br>
          		<span><b>Tổng tiền: </b></span><span style="font-weight: bold;color: #ff4300" id="gia_sum_pk"></span><sup style="font-weight: bold;color: #ff4300">₫</sup>
          	</div>
          </div>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		<!-------------------------------------------------------------------->

		<!------------Xử lý modal----------->
	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
		    loop:false,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:3
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		});
	</script>	

	<script>
  function zoom(e) {
    var zoomer = e.currentTarget;
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
    x = (offsetX / zoomer.offsetWidth) * 100
    y = (offsetY / zoomer.offsetHeight) * 100
    zoomer.style.backgroundPosition = x + "% " + y + "%";
  }
</script>

<script type="text/javascript">
		function cl(z){
			var c = $('#images_'+z).attr('src');
			$('.anh_goc').attr('src',c);
		}
     </script>

	<script type="text/javascript">
		function change(n){
			var img = $('#img_'+n).attr('src');
				$('.anh_goc').attr('src',img);
				$('#zoom').css('background','url('+ img +')');
		}

		function color(v){
			var b = $('.img_'+v).attr('src');
			$('.anh_goc').attr('src',b);

			$('.border_c').removeClass('vien');
			$('#color1_'+v).addClass('vien');
			$('#zoom').css('background','url('+ b +')');
		}
	
	</script>
<!------Định dạng tiền tệ----->
	<script type="text/javascript">
		function formatNumber(nStr, decSeperate, groupSeperate) {
            nStr += '';
            x = nStr.split(decSeperate);
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
            }
            return x1 + x2;
        }
	</script>


	<!-------Thêm giỏ hàng--------->

	<script type="text/javascript">
		function addcard_pk(id){
		    number = $('#number_pk_'+id).val();
			$.post("addcard_pk.php",{'id_pk': id,'sl_pk':number}, function(data){
				img = $('#anh_goc_pk'+id).attr('src');
				$('#ten_pk').text($('#ten_pk_'+id).text());
				$('#gia_pk').text($('#gia_pk_'+id).text());
				var gia = $('#cost_pk_'+id).val();
				$('#sl_pk').text(number);
				$('#xxx_pk').attr('src',img);
				sum = number * gia;
				$('#gia_sum_pk').text(formatNumber(sum, ',', '.'));
				$('#numbercart').text(data);
				$('#tb_pk').modal();
 			 });
		}
	</script>

<!----------------------------------------------------->

<!-----Danh gia san pham------->
<script type="text/javascript">
   $(function () {
       $('#rateit_star1').rateit({min: 0, max: 5, step: 1});
       $('#rateit_star1').bind('rated', function (e) {
         var ri = $(this);
         var value = ri.rateit('value');
         var productID = ri.data('productid');
         $('#star').val(value);
         $('#guidanhgia').show();
         $('#rateit-reset-2').click(function(){
		 $('#guidanhgia').hide();
		});
     });
   });
</script>


<script type="text/javascript">
	function danhgia(){
		$('.chon_danh_gia').toggle(200);
	}
</script>

<!-----Thông báo chưa đăng nhập--------->
<script type="text/javascript">
	function tb_danhgia(){
		$('#tb_danhgia').modal('show');
	}
</script>
<?php include('thongbaolienhe.php'); ?>
</body>
</html>