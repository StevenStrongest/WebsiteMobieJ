<?php 
	include('connect.php');
	$getsp = "select * from thong_tin_dien_thoai limit 0,5";
	$sql_dt = mysqli_query($con,$getsp);
?>

<?php 
	while ($row_dt = mysqli_fetch_assoc($sql_dt)) {
?>						
							<div class="item">
								<div class="sp">
									<div style="width: 45%;display: inline-block;" class="images_bc">
										<a href="chitietsp.php?id=<?=$row['ma_dt']?>"><img src="images/<?=$row_dt['anh_sp']?>"></a>
									</div>
									
									<?php 
											$ma_dt = $row_dt['ma_dt'];
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
									<div style="width: 45%;" class="star">
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
							    		<i class="fas fa-chevron-right next"></i>
							    		<a style="color: #000" href="chitietsp.php?id=<?=$row_dt['ma_dt']?>"><p class="text-sp"><?=$row_dt['ten_dt']?></p></a>
							    		<p class="cost"><?=number_format($row_dt['gia_goc'],0,',','.')?><sup>đ</sup></p>
							    		<p class="cost-main"><?=number_format($row_dt['gia_khuyen_mai'],0,',','.')?><sup>đ</sup></p>
							    	</div>

							    		<!-------------Xem nhanh--------->
			    						<a href="javascript:cl(<?=$row_dt['ma_dt']?>)">
									    	<button type="button" class="btn seen" data-toggle="modal" data-target="#myModal_<?=$row_dt['ma_dt']?>">
											<i class="fas fa-eye"></i>
											</button>
									      </a>	
			    						<!--------------------------->
								</div>
							</div>
<?php 
}
?>



