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
	<?php include('top-header.php'); ?>

		<!--------------------------------------------------------------------------->
		<script src="..\File dowload OWL Carousel\OwlCarousel2-2.3.4\OwlCarousel2-2.3.4\dist\owl.carousel.min.js"></script>

	<!---------------------------------------Text header------------------------------>
			<div class="text-header">
				<h2>TRANG TÌM KIẾM</h2>
			</div>
	<!------------------------------------------------------------------------------------>

	<!-------------------------------------Trang chu/Tat ca san pham--------------------------->
		<div class="back">
			<a href="index.php">Trang chủ</a>
			<span class="space">/</span>
			<span class="text">Tìm kiếm</span>
		</div>

	<!--------------------------------------------------------------------------------------->

	<!-------------------Xử lý tìm kiếm------------------------>
	<?php 
		include('connect.php');

		if(isset($_GET['submit'])){
			if(isset($_GET['search'])){
				$search = $_GET['search'];
				if($search == ""){
					$search = 'NULL';
				}
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


	<!--------------------------------------Tất cả sản phẩm--------------------------------->
		<div class="sp_all">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php 
							if(isset($_GET['submit']) && $_GET['search'] != ""){
								while($row = mysqli_fetch_assoc($rs)){
								$gia_goc = $row['gia_goc'];
 								$gia_khuyen_mai = $row['gia_khuyen_mai'];
 								$sao = 5;
 								
		 						if(!isset($row['sale'])){
		 							$row['sale'] = 0;
		 						}

						?>
						<div class="item">
							<a href="chitietsp.php?id=<?=$row['ma_dt']?>"><img id="images_<?=$row['ma_dt']?>" src="images/<?=$row['anh_sp']?>"></a>
							<div class="star">
				    		<?php 
				    			for($i=0;$i<$sao;$i++){
				    		?>
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
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<!--------------------------------------------------------------------------------------->


	<!--------------------------------------Modal các sản phẩm-------------------------------------->

	<?php include('modal-sp.php') ?>

	<!---------------------------------------------------------------------------------------------->



	<!-----------------------------------Footer thông tin cơ sở------------------------------->
		<?php include('footer.php'); ?>
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
						items:3
					},
					1000:{
						items:3
						}
					}
				})
	</script>	
<!--------------------------------------------------------------------------------------------------------------------------------------------->
</body>
</html>