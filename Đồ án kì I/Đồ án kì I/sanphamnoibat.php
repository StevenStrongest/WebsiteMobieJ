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
	<script type="text/javascript">
		 $(document).ready(function(){
		 	$('.r').checkboxradio();
		 });
  </script>
</head>
<body>
	<?php 
		include('connect.php');
		$select = "select * from thong_tin_dien_thoai where ma_danh_muc = 1";
		$recordset = mysqli_query($con,$select);;

	?>
	<!--Phần top -->
	<?php include('top-header.php') ?>

		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>TẤT CẢ SẢN PHẨM</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Tất cả sản phẩm</span>
		</div>

	<!--------------------------------------------------------------------------------------->


	<!--------------------------------------Tất cả sản phẩm--------------------------------->
		<div class="container">
			<div class="row">
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
						 <h2 style="font-size: 15px;" class="title">MỨC GIÁ</h2>
					</div>
					<div class="search_cost">
						<div class="widget">
							<fieldset>
							    <label for="radio-1">Giá dưới 1.000.000đ</label>
							    <input value="0 and 1000000" class="r" onclick="tk();" class="check" type="radio" name="radio-1" id="radio-1"><br>
							    <label for="radio-2">1.000.000đ - 2.000.000đ</label>
							    <input value="1000000 and 2000000" class="r" type="radio" class="check" onclick="tk();" name="radio-1" id="radio-2"><br>
							    <label for="radio-3">2.000.000đ - 5.000.000đ</label>
							    <input value="2000000 and 5000000" class="r" type="radio" class="check" onclick="tk();" name="radio-1" id="radio-3"><br>
							    <label for="radio-4">5.000.000đ - 10.000.000đ</label>
							    <input value="5000000 and 10000000" class="r" type="radio" class="check" onclick="tk();" name="radio-1" id="radio-4"><br>
							    <label for="radio-5">10.000.000đ - 20.000.000đ</label>
							    <input value="10000000 and 20000000" class="r" type="radio" class="check" onclick="tk();" name="radio-1" id="radio-5"><br>
							    <label for="radio-6">Trên 20.000.000đ</label>
							    <input value="20000000 and 2000000000" class="r" type="radio" class="check" onclick="tk();" name="radio-1" id="radio-6"><br>
						  </fieldset>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-lg-9">
					<div class="sp_all">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<?php 
										while($row = mysqli_fetch_assoc($recordset)){
											$gia_goc = $row['gia_goc'];
			 								$gia_khuyen_mai = $row['gia_khuyen_mai'];
			 								
					 						if(!isset($row['sale'])){
					 							$row['sale'] = 0;
					 						}

									?>
									<div class="item">
										<a href="chitietsp.php?id=<?=$row['ma_dt']?>"><img id="images_<?=$row['ma_dt']?>" src="images/<?=$row['anh_sp']?>"></a>
										<?php 
											$ma_dt = $row['ma_dt'];
											$star = 0;
			    							$bien = 0;
											$danhgia = "select * from danh_gia_sp where ma_dt = $ma_dt";
											$sql_dg = mysqli_query($con,$danhgia);			    			
								    			while ($dg = mysqli_fetch_assoc($sql_dg)) {
								    				$star += $dg['so_sao'];
								    				$bien++;
								    			}

								    			if($star != 0){
									    			$star = (int)($star / $bien);
									    		}
											?>
										<div class="star">
							    		<?php 
								    			if($star != 0){
								    		?>
												<?php 
								    			for($j=0;$j<$star;$j++){
									    		?>
													<i style="color: #f8b802" class="fas fa-star"></i>
									    		<?php 
									    		}
									    		?>
									    		<?php 
								    			for($j=0;$j<5-$star;$j++){
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
								    		<?php 
								    		}
								    		?>
							    		<p class="text-sp"><b><?=$row['ten_dt']?></b></p>
							    		<p class="cost"><?=number_format($gia_goc,0,';','.')?><sup>đ</sup></p>
							    		<p class="cost-main"><?=number_format($gia_khuyen_mai,0,';','.')?><sup>đ</sup></p>
								    	</div>
								    	<div class="sale">
								    		<span style="" class="">-<?=$row['sale']?>%</span>
								    	</div>
								    	<div class="option">
								    		<span><a title="Chọn sản phẩm" href="">MUA NGAY</a></span>
								    	</div>

								    	<!-------------Xem nhanh--------->
								    	<a href="javascript:cl(<?=$row['ma_dt']?>)">
									    	<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_<?=$row['ma_dt']?>">
											<i class="fas fa-eye"></i>
											</button>
									      </a>								    	
									      <!--------------------------->
									</div>
									<?php 
									}
									?>

									<?php 
										$spm = "select * from phu_kien where ma_danh_muc = 1";
										$sql_spm = mysqli_query($con,$spm);
									?>

									<?php 
							while($spm_pk = mysqli_fetch_assoc($sql_spm)){
 								$sao = $spm_pk['chat_luong_pk'];
 								
		 						if(!isset($spm_pk['sale'])){
		 							$spm_pk['sale'] = 0;
		 						}

							?>
							<div class="item item_pk">
								<img id="images_pk_<?=$spm_pk['ma_phu_kien']?>" src="images/<?=$spm_pk['anh_pk']?>">
								<?php 
					    		$ma_pk = $spm_pk['ma_phu_kien'];
					    			$star = 0;
					    			$bien = 0;
					    			$select = "select * from danh_gia_pk where ma_phu_kien = $ma_pk";
					    			$sql = mysqli_query($con,$select);			    			
					    			while ($dg = mysqli_fetch_assoc($sql)) {
					    				$star += $dg['so_sao'];
					    				$bien++;
					    			}

					    			if($star != 0){
					    				$star = (int)($star / $bien);
					    			}
					    		?>

								<div class="star">
					    		<?php 
				    			if($star != 0){
				    			?>
								<?php 
				    			for($j=0;$j<$star;$j++){
					    		?>
									<i style="color: #f8b802" class="fas fa-star"></i>
					    		<?php 
					    		}
					    		?>
					    		<?php 
				    			for($j=0;$j<5-$star;$j++){
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
					    		<?php 
					    		}
					    		?>
					    		<p class="text-sp"><b><?=$spm_pk['ten_phu_kien']?></b></p>
					    		<p class="cost"><?=number_format($spm_pk['gia_goc_pk'],0,';','.')?><sup>đ</sup></p>
					    		<p class="cost-main"><?=number_format($spm_pk['gia_khuyen_mai_pk'],0,';','.')?><sup>đ</sup></p>
						    	</div>
						    	<div class="sale">
						    		<span style="" class="">-<?=$spm_pk['sale_pk']?>%</span>
						    	</div>
						    	<div class="option">
						    		<span><a title="Chọn sản phẩm" href="">MUA NGAY</a></span>
						    	</div>

						    	<!-------------Xem nhanh--------->
						    	<a href="javascript:cl_pk(<?=$spm_pk['ma_phu_kien']?>)">
									<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_pk_<?=$spm_pk['ma_phu_kien']?>">
										<i class="fas fa-eye"></i>
									</button>
							    </a>	
						    	<!--------------------------->
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


	<!--------------------------------------Modal các sản phẩm-------------------------------------->

	<?php include('modal-sp.php'); ?>
	<?php include('modal_phu_kien.php');?>

	<!---------------------------------------------------------------------------------------------->



	<!---------------------------Footer thông tin cơ sở----------------------------------------->
		<?php include('footer.php') ?>

		<!------------Xử lý modal----------->
	<script type="text/javascript">
		$('.releted-dt').owlCarousel({
			 loop:false,
			 margin:15,
			nav:true,
			responsive:{
				 0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:3
						}
					}
				})
	</script>	

	<script type="text/javascript">
		function tk(){
			var val = $('[name="radio-1"]:radio:checked').val();
			$.ajax({
				type: 'POST',
				dataType: 'text',
				url: 'timkiemtheogia.php',
				data: {
					'gia': val
				},
				success: function(data){
					$('.sp_all').html(data);
				}
			});
		}
	</script>
<!------------------------------------------------------------------------------>
</body>
</html>