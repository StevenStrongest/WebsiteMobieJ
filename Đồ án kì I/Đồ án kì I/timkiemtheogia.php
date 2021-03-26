<?php	
	include('connect.php');
	$gia = "";
	if(isset($_POST['gia'])){
	$gia = $_POST['gia'];
	}
	$hang = "";
	if(isset($_POST['hang'])){
		$hang = $_POST['hang'];
		$hang = "or hang = $hang";
		$hang_tk = $_POST['hang']; 
	}
	if($gia != ""){
		$tk = "select * from thong_tin_dien_thoai where gia_khuyen_mai between $gia $hang";
	}else{
		$tk = "select * from thong_tin_dien_thoai where hang = $hang_tk";
	}
	$sql = mysqli_query($con,$tk);
	$kt = mysqli_num_rows($sql);

?>


<?php 
	if($kt == 0){
?>
	<h4 style="font-weight: bold;">Không có sản phẩm nào tồn tại trong danh mục này</h4>
<?php 
}
?>

							<?php 
										while($row = mysqli_fetch_assoc($sql)){
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
							    		<a style="color: #000" href="chitietsp.php?id=<?=$row['ma_dt']?>"><p class="text-sp"><b><?=$row['ten_dt']?></b></p></a>
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
			