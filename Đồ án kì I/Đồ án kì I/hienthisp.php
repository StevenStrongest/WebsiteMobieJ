<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiện thị sản phẩm</title>
</head>
<body>
	<?php 
		include('connect.php');
		$hienthisp = "select * from thong_tin_dien_thoai";
		$ht = mysqli_query($con,$hienthisp);
	?>

	<?php 
		while($sp = mysqli_fetch_assoc($ht)){
			$arr[] = $sp;
		}

		
	?>

	<!-----------------------------------------Hàng 1------------------------------>
     <div id="stop" class="product">
     	<div class="container">

     		<div id="carousel2" class="owl-carousel owl-theme">
 <!-----------------------------------------Sản phẩm ------------------------------>
 				<?php 
 					for($i=0;$i<count($arr);$i+=2){
 						for($x=0;$x<count($arr);$x++){
 							if(empty($arr[$x]['sale'])){
 								$arr[$x]['sale'] = 0;
 							}
 						}
 						
 				?>

				 <div class="item">
			    	<div style="" class="pro">
			    		<?php 
			    			if($arr[$i]['anh_sp'] != ""){
			    		?>
			    		<div class="hinhanh">
							<a href="chitietsp.php?id=<?=$arr[$i]['ma_dt']?>"><img style="height: 253px" id="images_<?=$arr[$i]['ma_dt']?>" src="images/<?=$arr[$i]['anh_sp']?>"></a>
						</div>
			    		<?php 
			    		}else{
			    		?>
							<a href="chitietsp.php?id=<?=$arr[$i]['ma_dt']?>"><img style="height: 66%" id="images_<?=$arr[$i]['ma_dt']?>" src="https://ecowaterqa.vtexassets.com/arquivos/ids/156090/noimageavailable.png?v=637049532486200000"></a>
			    		<?php 
			    		}
			    		?>

			    		<?php 
			    		$ma_dt = $arr[$i]['ma_dt'];
			    			$star = 0;
			    			$bien = 0;
			    			$select = "select * from danh_gia_sp where ma_dt = $ma_dt";
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
			    		<p class="text-sp"><b><?=$arr[$i]['ten_dt']?></b></p>
			    		<p class="cost"><?=number_format($arr[$i]['gia_goc'],'0',';','.')?><sup>đ</sup></p>
			    		<p class="cost-main"><?=number_format($arr[$i]['gia_khuyen_mai'],'0',';','.')?><sup>đ</sup></p>
			    	</div>
			    	<div style="" class="sale">
			    		<span class="">-<?=$arr[$i]['sale']?>%</span>
			    	</div>
			    	<div class="option">
			    		<?php 
			    			if($arr[$i]['sl_trong_kho'] > 0){
			    		?>
							<span onclick="add(<?=$arr[$i]['ma_dt']?>)"><a title="Chọn sản phẩm" href="javascript:0">MUA NGAY</a></span>
			    		<?php 
			    		}else{
			    		?>
							<span><a title="Chọn sản phẩm" href="javascript:0">HẾT HÀNG</a></span>
			    		<?php 
			    		}
			    		?>
			    	</div>

			    	<!-------------Xem nhanh--------->
			      <a href="javascript:cl(<?=$arr[$i]['ma_dt']?>)">
			    	<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_<?=$arr[$i]['ma_dt']?>">
					<i class="fas fa-eye"></i>
					</button>
			      </a>
			    	<!--------------------------->
			    	</div>
					
					<?php 
						if(empty($arr[$i+1])){
 							$none = "display: none";
 						}else{
 							$none = "";
 						}
					?>
			    	<div style="<?=$none?>" class="pro">
			    		<?php 
			    			if($arr[$i+1]['anh_sp'] != ""){
			    		?>
							<a href="chitietsp.php?id=<?=$arr[$i+1]['ma_dt']?>"><img style="height: 253px" id="images_<?=$arr[$i+1]['ma_dt']?>" src="images/<?=$arr[$i+1]['anh_sp']?>"></a>
			    		<?php 
			    		}else{
			    		?>
							<a href="chitietsp.php?id=<?=$arr[$i]['ma_dt']?>"><img style="height: 66%" id="images_<?=$arr[$i]['ma_dt']?>" src="https://ecowaterqa.vtexassets.com/arquivos/ids/156090/noimageavailable.png?v=637049532486200000"></a>
			    		<?php 
			    		}
			    		?>
			    		<?php 
			    		$ma_dt2 = $arr[$i+1]['ma_dt'];
			    			$star2 = 0;
			    			$bien2 = 0;
			    			$select2 = "select * from danh_gia_sp where ma_dt = $ma_dt2";
			    			$sql2 = mysqli_query($con,$select2);			    			
			    			while ($dg2 = mysqli_fetch_assoc($sql2)) {
			    				$star2 += $dg2['so_sao'];
			    				$bien2++;
			    			}

			    			if($star2 != 0){
			    				$star2 = (int)($star2 / $bien2);
			    			}
			    		?>
			    	<div class="star">
			    		<?php 
			    			if($star2 != 0){
			    		?>
							<?php 
			    			for($j=0;$j<$star2;$j++){
				    		?>
								<i style="color: #f8b802" class="fas fa-star"></i>
				    		<?php 
				    		}
				    		?>
				    		<?php 
			    			for($j=0;$j<5-$star2;$j++){
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
			    		<p class="text-sp"><b><?=$arr[$i+1]['ten_dt']?></b></p>
			    		<p class="cost"><?=number_format($arr[$i+1]['gia_goc'],'0',';','.')?><sup>đ</sup></p>
			    		<p class="cost-main"><?=number_format($arr[$i+1]['gia_khuyen_mai'],'0',';','.')?><sup>đ</sup></p>
			    	</div>
			    	<div style="" class="sale">
			    		<span class="">-<?=$arr[$i+1]['sale']?>%</span>
			    	</div>
			    	<div class="option">
			    		<span onclick="add(<?=$arr[$i+1]['ma_dt']?>)"><a title="Chọn sản phẩm" href="javascript:0">MUA NGAY</a></span>
			    	</div>

			    	<!-------------Xem nhanh--------->
			      <a href="javascript:cl(<?=$arr[$i+1]['ma_dt']?>)">
			    	<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_<?=$arr[$i+1]['ma_dt']?>">
					<i class="fas fa-eye"></i>
					</button>
			      </a>
			    	<!--------------------------->
			    	</div>
			    </div>	

				 <?php 
				 }
				 ?>
			</div>
     	</div>
     </div>
		
</body>
</html>