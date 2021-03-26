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

	<!-- Link icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- Link font chữ -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Condensed:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	

	<!---------------Link javascript --------------------->	
</head>
<body>
	
	<!--Phần top -->
	<?php include('top-header.php'); ?>
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

	<!------------Xử lý tìm kiếm---------------->
	<?php 
	$con = mysqli_connect('localhost','root','','mobie_do_an_ki_i');
		if(isset($_GET['submit'])){
			if(isset($_GET['search'])){
				$search = $_GET['search'];
				$tk = "select * from phu_kien where ten_phu_kien like '$search%' ";
				$recordset = mysqli_query($con,$tk);
				echo "<h5 style='text-align: center;margin-top: 30px;'><b>Có ".mysqli_num_rows($recordset)." kết quả tìm kiếm phù hợp</b></h5>";
			}

			if(mysqli_num_rows($recordset) == 0){
				echo "<h5 style='text-align: center;margin-top: 30px;'><b>KHÔNG TÌM THẤY BẤT KỲ KẾT QUẢ NÀO VỚI TỪ KHÓA TRÊN.</b></h5>";
			}else{

			}



		}
	?>


	<!--------------------------------------Tất cả phụ kiện--------------------------------->
		<div class="sp_all">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php 
							while($row = mysqli_fetch_assoc($recordset)){
 								$sao = $row['chat_luong_pk'];
 								
		 						if(!isset($row['sale_pk'])){
		 							$row['sale_pk'] = 0;
		 						}

						?>
						<div class="item">
							<img src="images/<?=$row['anh_pk']?>">
							<div class="star">
				    		<?php 
				    			for($i=0;$i<$sao;$i++){
				    		?>
								<i class="fas fa-star"></i>
				    		<?php 
				    		}
				    		?>
				    		<p class="text-sp"><b><?=$row['ten_phu_kien']?></b></p>
				    		<p class="cost"><?=number_format($row['gia_goc_pk'],0,';','.')?><sup>đ</sup></p>
				    		<p class="cost-main"><?=number_format($row['gia_khuyen_mai_pk'],0,';','.')?><sup>đ</sup></p>
					    	</div>
					    	<div class="sale">
					    		<span style="" class="">-<?=$row['sale_pk']?>%</span>
					    	</div>
					    	<div class="option">
					    		<span><a onclick="add_pk(<?=$row['ma_phu_kien']?>)" title="Chọn sản phẩm" href="javascript:0">MUA NGAY</a></span>
					    	</div>

					    	<!-------------Xem nhanh--------->
					    	<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_pk_<?=$row['ma_phu_kien']?>">
							  <i class="fas fa-eye"></i>
							</button>
					    	<!--------------------------->
						</div>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<!--------------------------------------------------------------------------------------->


	<!--------------------------------------Modal các sản phẩm-------------------------------------->

	<?php include('modal_phu_kien.php') ?>

	<!---------------------------------------------------------------------------------------------->



	<!---------------------------------Footer thông tin cơ sở------------------------------>
		<?php include('footer.php') ?>

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