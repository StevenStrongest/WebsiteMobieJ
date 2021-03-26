<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal phụ kiện</title>
</head>
<body>
	<?php 
		include('connect.php');
		$tt_modal = "select * from phu_kien";
		$query_pk = mysqli_query($con,$tt_modal);
	?>

	<?php 
		while ($pk_modal = mysqli_fetch_assoc($query_pk)) {
			$img_pk = explode(',', $pk_modal['hinh_anh_lien_quan_pk']);
			$tinh_trang = $pk_modal['sl_trong_kho_pk'];
			if($tinh_trang > 0){
				$tinh_trang = "Còn hàng";
			}else{
				$tinh_trang = "Hết hàng";
			}
	?>
			<!-----------Modal Phu kien------------->
		<div class="modal" id="myModal_pk_<?=$pk_modal['ma_phu_kien']?>">
			<div style="margin-right: 615px;" class="modal-dialog">
				<div id="modal" class="modal-content">
					<button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
					<div class="all">
						<div class="row">
					        <div class="col-lg-5 col-md-5 col-xs-12">
					        	<div class="dt">
					        	<?php
					        		if($pk_modal['anh_pk'] != ""){
					        	 ?>
									<a href=""><img class="img-fluid anh_goc_pk" src="images/<?=$pk_modal['anh_pk']?>" id="anh_goc_pk<?=$pk_modal['ma_phu_kien']?>"></a>
					        	 <?php 
					        	 }else{
					        	 ?>
									<a href=""><img style="height: 100%" class="img-fluid anh_goc_pk" src="https://lh3.googleusercontent.com/proxy/w3TaeBNGhqDxjfuw_yCQeeaUzyTBej07NpOlKq0T1FTFTvNVsgDD4VLLR-1RVQGLWaad41MRtrL10kdYDhOWqSBGrO7HbQ9cleQXt42mXXh_xDu44_RAE9VBo2iCU6SROZcJciYdIUmCuQm0-OFWtCGeoTb2rQ"></a>
					        	 <?php 
					        	 }
					        	 ?>
					        	</div>

					        	<div class="color_dt">
					        			<div class="container">
						        			<div id="color-dt-9" class="releted-dt owl-carousel owl-theme">
						        				<?php 
						        					if($img_pk[0] != ""){
						        				?>
													<?php 
										    		foreach ($img_pk as $key => $pk_img) {
										    			if($pk_img != ""){
										    	?>
										   <div class="item"><a href="javascript:change(<?=crc32($pk_img)?>)"><img class="img_pk<?=crc32($key.$pk_modal['ma_phu_kien'])?>" id="img_pk<?=crc32($pk_img)?>" src="images/<?=$pk_img?>"></a></div>									  										    
										    	<?php 
										    		}
										    	}
										    	?>

						        				<?php 
						        				}
						        				?>
										</div>
					        	 	</div>
					        	</div>
					        </div>

					        <div class="col-md-7 col-lg-7 col-xs-5">
					        	<div class="thong_tin">
					        		<h3><a id="ten_pk_<?=$pk_modal['ma_phu_kien']?>" href="#"><?=$pk_modal['ten_phu_kien']?></a></h3>

					        		<?php 
						    		$ma_pk = $pk_modal['ma_phu_kien'];
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
							    		<br>
							    		<p id="gia_pk_<?=$pk_modal['ma_phu_kien']?>" class="cost-main"><?=number_format($pk_modal['gia_khuyen_mai_pk'],0,";",".") ?><sup>đ</sup></p>
							    		<p class="cost"><?=number_format($pk_modal['gia_goc_pk'],0,";",".")?><sup>đ</sup></p>
							    	</div>
							    	<p class="text-tb">Tình trạng:</p><span class="tinh_trang"><?=$tinh_trang?></span>

							    	<div style="width: 100%;height: 1px;background: #ddd;margin-bottom: 20px;"></div>

							    	<div class="tt_chi_tiet">
							    		<?=$pk_modal['mo_ta']?>
							    	</div>
							    	
							    	<?php 
							    		if($pk_modal['mo_ta'] != ""){						
							    	?>
										<div style="width: 100%;height: 1px;background: #ddd;margin-top: 25px;"></div>
							    	<?php 
							    	}
							    	?>

									<?php 
							    			if($pk_modal['sl_trong_kho_pk'] > 0){
							    	?>
							    	<div class="so_luong">
							    		<input type="number" id="number_pk_<?=$pk_modal['ma_phu_kien']?>" value="1" name="number" min="1" max="10" class="number">
							    			<input style="display: none;" id="cost_pk_<?=$pk_modal['ma_phu_kien']?>" type="number" readonly="true" value="<?=$pk_modal['gia_khuyen_mai_pk']?>" name="id">
							    	</div>

							    	<div class="cart">
							    		
											<button onclick="addcard_pk(<?=$pk_modal['ma_phu_kien']?>)" type="submit"><span>CHO VÀO GIỎ HÀNG</span></button>
									</div>
							    		<?php 
							    		}else{
							    		?>	

							    	<div style="width: 100%;text-align: center;margin: 20px 0px" class="cart">
							    		<button style="width: 72%" disabled="true" type="submit"><span>HẾT HÀNG</span></button>
									</div>
											
							    		<?php 
							    		}
							    		?>
							    	

							    	<div class="lien_he">
							    		<p>Gọi ngay: <a href="">0971439061</a>để dặt hàng số lượng lượng</p>
							    	</div>
					        	</div>
					        </div>
					        
					    </div>
					</div>
			</div>
		</div>
	</div>
	
	
<!--------------------------------------->

	<?php 
	}
	?>

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
          <div style="padding: 0px" id="modal-cart-left" class="col-md-6 col-lg-6">
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
          <div style="padding: 0px" class="col-md-6 col-lg-6">
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
</div>
		<!-------------------------------------------------------------------->


		<!-------Modal thông báo giỏ hàng thất bại------->
<div style="width: 1242px;" class="modal fade" tabindex="-1" id="miss_pk" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 750px;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h5 class="modal-title"style="text-align: center;margin-bottom: 15px;font-weight: bold;">Thêm vào giỏ hàng thất bại</h5>
        <div class="row">
          <div style="padding: 0px" id="modal-cart-left" class="col-md-12 col-lg-12">
          	<div style="padding: 20px;border-bottom: 1px solid #eaebf3;border-right: 1px solid #eaebf3;border-top: 1px solid #eaebf3;text-align: center;" class="text">
          		<i  style="font-weight: bold;font-size: 14px;color: #ff4300;padding: 0px 10px" class="fas fa-window-close"></i>
          		<span >Sản phẩm chưa được thêm vào giỏ hàng do không có số lượng sản phẩm</span>
          	</div>
          	
          </div>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
		<!-------------------------------------------------------------------->

		<script type="text/javascript">
		function cl_pk(z){
			var c = $('#images_pk_'+z).attr('src');
			$('.anh_goc_pk').attr('src',c);
		}
     </script>

	<script type="text/javascript">
		function change(n){
			var img = $('#img_pk'+n).attr('src');
				$('.anh_goc_pk').attr('src',img);
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
				if(number != "" && number != 0){
					$('#tb_pk').modal();
				}else{
					$('#miss_pk').modal();
				}
				$('#numbercart').text(data);
 			 });
		}
	</script>

	<!-------Thêm giỏ hàng so luong 1--------->

	<script type="text/javascript">
		function add_pk(id){
		    number = 1;
			$.post("addcard_pk.php",{'id_pk': id,'sl_pk':number}, function(data){
				img = $('#anh_goc_pk'+id).attr('src');
				$('#ten_pk').text($('#ten_pk_'+id).text());
				$('#gia_pk').text($('#gia_pk_'+id).text());
				var gia = $('#cost_pk_'+id).val();
				$('#sl_pk').text(number);
				$('#xxx_pk').attr('src',img);
				sum = number * gia;
				$('#gia_sum_pk').text(formatNumber(sum, ',', '.'));
				if(number != "" && number != 0){
					$('#tb_pk').modal();
				}else{
					$('#miss_pk').modal();
				}
				$('#numbercart').text(data);
 			 });
		}
	</script>
</body>
</html>