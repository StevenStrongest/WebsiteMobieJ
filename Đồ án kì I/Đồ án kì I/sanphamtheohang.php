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
	<script type="text/javascript">
		 $(document).ready(function(){
		 	$('.r').checkboxradio();
		 });
  </script>
</head>
<body>
	<!--Phần top -->
	<?php include('top-header.php') ?>
	<!----Phan trang------->
	<?php 
	include('connect.php');
	$hang = "";
	if(isset($_GET['hang'])){
	    $hang = $_GET['hang'];
	}
    $tong = "select count(*) as tong from thong_tin_dien_thoai where hang = $hang";
    $sql = mysqli_query($con,$tong);
    $doc_ban_ghi = mysqli_fetch_assoc($sql);
    $tong_ban_ghi = $doc_ban_ghi['tong'];
    $kichthuoctrang = 9;
    $tongsotrang = 0;
    if($tong_ban_ghi % $kichthuoctrang == 0){
      $tongsotrang = $tong_ban_ghi/$kichthuoctrang;
    }else{
      $tongsotrang = (int)($tong_ban_ghi/$kichthuoctrang) + 1;
    }

    if(!isset($_GET['tranghientai']) || $_GET['tranghientai'] == 1){
      $tranghientai = 1;
      $dongbatdau = 0;
    }else{
      $tranghientai = $_GET['tranghientai'];
      $dongbatdau = ($tranghientai -1) * $kichthuoctrang;
    }

  ?>


	<?php 
		$select = "select * from thong_tin_dien_thoai where hang = $hang limit $dongbatdau,$kichthuoctrang";
		$recordset = mysqli_query($con,$select);

	?>

		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>TẤT CẢ SẢN PHẨM</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="banthudaodien.php">Trang chủ</a>
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
					<?php 
						if($tong_ban_ghi == 0){
					?>
						<h3 style="font-weight: bold;padding: 50px 100px">Hiện tại chưa có sản phẩm hãng này</h3>
					<?php 
					}
					?>
					<div class="sp_all">
							<div class="row">
								<div id="data" class="col-lg-12 col-md-12 col-sm-12">
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
								    		<span><a onclick="add(<?=$row['ma_dt']?>)" title="Chọn sản phẩm" href="javascript:0">MUA NGAY</a></span>
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
									<!---danh sach phan trang----->
									<ul id="phantrang">
										<?php 
											for ($i=1; $i<=$tongsotrang ; $i++) { 
										?>
											<?php 
												if($tranghientai != $i){
											?>
											<li id="none_list"><a style="color: black" href="tatcasanpham.php?tranghientai=<?=$i?>"><?=$i?></a></li>
											<?php 
											}else{
											?>
												<li style="cursor: not-allowed;"><a style="cursor: not-allowed;" href="javascript:0"><?=$i?></a></li>
											<?php 
											}
											?>
										<?php 
										}
										?>
									</ul>
								</div>
							</div>
						</div>


				</div>
			</div>
		</div>
	<!--------------------------------------------------------------------------------------->

	

	<!--------------------------------------Modal các sản phẩm-------------------------------------->

	<?php include('modal-sp.php'); ?>

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
					$('#data').html(data);
				}
			});
		}
	</script>
<!------------------------------------------------------------------------------>
</body>
</html>