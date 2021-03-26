<?php 
	include('connect.php');
	$gia = $_POST['gia'];
	$tk = "select * from phu_kien where gia_khuyen_mai_pk between $gia";
	$sql = mysqli_query($con,$tk);
	$kt = mysqli_num_rows($sql);
?>
				<?php 
					if($kt == 0){
				?>
					<h4 style="font-weight: bold;text-align: center;">Không có sản phẩm nào tồn tại trong danh mục này</h4>
				<?php 
				}
				?>
		
					<?php 
							while($row = mysqli_fetch_assoc($sql)){
 								
		 						if(!isset($row['sale'])){
		 							$row['sale'] = 0;
		 						}		 		

							?>
							<div class="item">
								<a href="chitietpk.php?id=<?=$row['ma_phu_kien']?>"><img src="images/<?=$row['anh_pk']?>"></a>
								<?php 
					    		$ma_pk = $row['ma_phu_kien'];
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
					    		<a style="color: #000" href="chitietpk.php?id=<?=$row['ma_phu_kien']?>"><p class="text-sp"><b><?=$row['ten_phu_kien']?></b></p></a>
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
								

