<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiện thị phụ kiện</title>
</head>
<body>
	<?php 
		include('connect.php');
		$ht_pk = "select * from phu_kien";
		$phu_kien = mysqli_query($con,$ht_pk);
	?>
		

     <div style="margin-top: 25px" class="product pk">
     	<div class="container">
     		<div id="carousel2" class="owl-carousel owl-theme">

     			<?php 
			while($pk = mysqli_fetch_assoc($phu_kien)){
				?>

 <!-----------------------------------------Phụ kiện------------------------------>
			    <div class="item">
			    	<div class="pro">
			    		<?php 
			    			if($pk['anh_pk'] != ""){
			    		?>
							<a href="chitietpk.php?id=<?=$pk['ma_phu_kien']?>"><img id="images_pk_<?=$pk['ma_phu_kien']?>" src="images/<?=$pk['anh_pk']?>"></a>
			    		<?php 
			    		}else{
			    		?>
							<a href="chitietpk.php?id=<?=$pk['ma_phu_kien']?>"><img style="height: 66%" src="https://ecowaterqa.vtexassets.com/arquivos/ids/156090/noimageavailable.png?v=637049532486200000"></a>
			    		<?php 
			    		}
			    		?>

			    		<?php 
			    		$ma_pk = $pk['ma_phu_kien'];
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
				    		<p class="text-sp"><b><?=$pk['ten_phu_kien']?></b></p>
				    		<p class="cost"><?=number_format($pk['gia_goc_pk'],0,";",".")?><sup>đ</sup></p>
				    		<p class="cost-main"><?=number_format($pk['gia_khuyen_mai_pk'],0,";",".")?><sup>đ</sup></p>
				    	</div>
				    	<div class="sale">
				    		<span class="">-<?=$pk['sale_pk']?>%</span>
				    	</div>
				    	<div class="option">
				    		<?php 
				    			if($pk['sl_trong_kho_pk'] > 0){
				    		?>
								<span><a onclick="add_pk(<?=$pk['ma_phu_kien']?>)" title="Chọn sản phẩm" href="javascript:0">MUA NGAY</a></span>
				    		<?php 
				    		}else{
				    		?>
								<span><a title="Chọn sản phẩm" href="javascript:0">HẾT HÀNG</a></span>
				    		<?php 
				    		}
				    		?>
				    	</div>

				    	<!-------------Xem nhanh--------->
				    	<a href="javascript:cl_pk(<?=$pk['ma_phu_kien']?>)">
				    		<button type="button" class="btn seen"  data-toggle="modal" data-target="#myModal_pk_<?=$pk['ma_phu_kien']?>">
							  <i style="left: -3px" class="fas fa-eye"></i>
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


     <!--------------------------------------------------------------------------------->
	
</body>
</html>