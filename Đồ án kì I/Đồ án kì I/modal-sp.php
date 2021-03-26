<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đồ án kì I</title>

</head>
<body>
	<?php 
		include('connect.php');
		$select = "select * from thong_tin_dien_thoai";
		$thong_tin = mysqli_query($con,$select);
	?> 

	<?php 
		while($modal = mysqli_fetch_assoc($thong_tin)){	
			$tinh_trang = $modal['sl_trong_kho'];
			if($tinh_trang > 0){
				$tinh_trang = "Còn hàng";
			}else{
				$tinh_trang = "Hết hàng";
			}

			$chuoi = $modal['hinh_anh_lien_quan'];
			$hinh_anh_lien_quan = explode(',',$chuoi);
			$sl_trong_kho = $modal['sl_trong_kho'];
	?>

	<!-----------Modal------------->
		<div class="modal" id="myModal_<?=$modal['ma_dt']?>">
			<div style="margin-right: 615px;" class="modal-dialog">
				<div id="modal" class="modal-content">
					<button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
					<div class="all">
						<div class="row">
					        <div class="col-lg-5 col-md-5 col-xs-12">
					        	<div class="dt">
					        		<?php 
					        			if($modal['anh_sp'] != ""){
					        		?>
										<a href=""><img class="img-fluid anh_goc" id="anh_goc_<?=$modal['ma_dt']?>" src="images/<?=$modal['anh_sp']?>"></a>
					        		<?php 
					        		}else{
					        		?>
										<img class="img-fluid" style="height: 100%"  src="https://lh3.googleusercontent.com/proxy/w3TaeBNGhqDxjfuw_yCQeeaUzyTBej07NpOlKq0T1FTFTvNVsgDD4VLLR-1RVQGLWaad41MRtrL10kdYDhOWqSBGrO7HbQ9cleQXt42mXXh_xDu44_RAE9VBo2iCU6SROZcJciYdIUmCuQm0-OFWtCGeoTb2rQ">
					        		<?php 
					        		}
					        		?>
					        	</div>

					        	<div class="color_dt">
					        			<div class="container">
						        			<div id="color-dt-4" class="releted-dt owl-carousel owl-theme">
										    <?php 
										    	if($hinh_anh_lien_quan[0] != ""){
										    ?>
												<?php 
										    	foreach ($hinh_anh_lien_quan as $key => $img) {
											    ?>
													<div class="item"><a href="javascript:change_dt(<?=crc32($img)?>)"><img class="img_<?=crc32($key.$modal['ma_dt'])?>" id="img_<?=crc32($img)?>" src="images/<?=$img?>"></a></div>
											    <?php 
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
					        		<h3><a id="ten_dt_<?=$modal['ma_dt']?>" href="#"><?=$modal['ten_dt']?></a></h3>
										
										<?php 
							    		$ma_dt = $modal['ma_dt'];
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
							    		<br>
							    		<p id="gia_<?=$modal['ma_dt']?>" class="cost-main"><?=number_format($modal['gia_khuyen_mai'],'0',';','.')?><sup>đ</sup></p>
							    		<p class="cost"><?=number_format($modal['gia_goc'],'0',';','.')?><sup>đ</sup></p>
							    	</div>
							    	<p class="text-tb">Tình trạng:</p><span class="tinh_trang"><?=$tinh_trang?></span>

							    	<div style="width: 100%;height: 1px;background: #ddd;margin-bottom: 20px;"></div>

							    	<div class="tt_chi_tiet">
							    		<ul>
							    		<li><label>Màn hình: </label><span class="tt_r"><?=$modal['man_hinh']?></span></li>
							    		<li><label>Camera trước :</label><span class="tt_r"><?=$modal['camera_truoc']?></span></li>
							    		<li><label>Camera sau :</label><span class="tt_r"><?=$modal['camera_sau']?></span></li>
							    		<li><label>RAM :</label><span class="tt_r"><?=$modal['ram']?></span></li>
							    		<li><label>Bộ nhớ trong :</label><span class="tt_r"><?=$modal['bo_nho_trong']?></span></li>
							    		<li><label>CPU :</label><span class="tt_r"><?=$modal['cpu']?></span></li>
							    		<li><label>GPU :</label><span class="tt_r"><?=$modal['gpu']?></span></li>
							    		<li><label>Dung lượng pin :</label><span class="tt_r"><?=$modal['dung_luong_pin']?></span></li>
							    		<li><label>Hệ điều hành:</label><span class="tt_r"><?=$modal['he_dieu_hanh']?></span></li>
							    		</ul>
							    	</div>
							    	
							    	<div style="width: 100%;height: 1px;background: #ddd;margin-top: 25px;"></div>

							    	<br>
							    	<?php 
							    			if($modal['sl_trong_kho'] > 0){
							    	?>
										<div class="so_luong">
							    			<input type="number" id="number_<?=$modal['ma_dt']?>" value="1" name="number" min="1" max="<?=$modal['sl_trong_kho']?>" class="number">
							    			<input style="display: none;" type="number" id="sl_tk_<?=$modal['ma_dt']?>" value="<?=$modal['sl_trong_kho']?>" name="">
							    			<input style="display: none;" id="cost_<?=$modal['ma_dt']?>" type="number" readonly="true" value="<?=$modal['gia_khuyen_mai']?>" name="id">
							    		</div>
							    	<div id="button_<?=$modal['ma_dt']?>" class="cart">
							    		
											<button onclick="addcard(<?=$modal['ma_dt']?>)" type="submit"><span>CHO VÀO GIỎ HÀNG</span></button>
									</div>

							    		<?php 
							    		}else{
							    		?>
								    	<div style="width: 100%;text-align: center;" id="button_<?=$modal['ma_dt']?>" class="cart">
								    		
												<button style="width: 72%;" disabled="true" type="submit"><span>HẾT HÀNG</span></button>
										</div>
											
							    		<?php 
							    		}
							    		?>
							    	

							    	<div class="lien_he">
							    		<p>Gọi ngay: <a href="">0971439061</a>để dặt hàng số lượng</p>
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
<div style="width: 83%;" class="modal fade" tabindex="-1" id="tb" role="dialog" aria-labelledby="gridSystemModalLabel">
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
          		<img style="width: 115px;margin: 20px" id="xxx" src="">
          		<div style="width: 40%;display: inline-block;" class="sp_txt">
          			<span style="font-size: 12px;font-weight: bold;color: " id="ten_dt"></span><br>
          			<span style="font-size: 13px;font-weight: bold;color:#ff4300;margin-top: 10px; " id="gia"></span>
          		</div>
          	</div>
          </div>
          <div style="padding: 0px" class="col-md-6 col-lg-6">
          	<div style="padding: 20px;border-bottom: 1px solid #eaebf3;border-right: 1px solid #eaebf3;border-top: 1px solid #eaebf3" class="txt">
          		<i style="font-size: 20px;" class="fas fa-cart-plus"></i>
         		<span>GIỎ HÀNG</span>
          	</div>
          	<div style="padding: 45px 20px" class="tt">
          		<span><b>Số lượng: </b></span><span style="font-weight: bold;" id="sl"></span><br>
          		<span><b>Tổng tiền: </b></span><span style="font-weight: bold;color: #ff4300" id="gia_sum"></span><sup style="font-weight: bold;color: #ff4300">₫</sup>
          	</div>
          </div>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
		<!-------------------------------------------------------------------->

		<!-------Modal thông báo giỏ hàng thất bại------->
<div style="width: 1242px;" class="modal fade" tabindex="-1" id="miss" role="dialog" aria-labelledby="gridSystemModalLabel">
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
		function cl(z){
			var c = $('#images_'+z).attr('src');
			$('.anh_goc').attr('src',c);
		}
     </script>

	<script type="text/javascript">
		function change_dt(n){
			var img = $('#img_'+n).attr('src');
				$('.anh_goc').attr('src',img);
		}

		function color_dt(v){
			var b = $('.img_'+v).attr('src');
			$('.anh_goc').attr('src',b);

			$('.border_c').removeClass('vien');
			$('#color1_'+v).addClass('vien');
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
		function addcard(id){
		    number = $('#number_'+id).val();
			$.post("addcard.php",{'id': id,'sl':number}, function(data){
				img = $('#anh_goc_'+id).attr('src');
				$('#ten_dt').text($('#ten_dt_'+id).text());
				$('#gia').text($('#gia_'+id).text());
				var gia = $('#cost_'+id).val();
				$('#sl').text(number);
				$('#xxx').attr('src',img);
				sum = number * gia;
				$('#gia_sum').text(formatNumber(sum, ',', '.'));
				if(number != "" && number != 0){
					$('#tb').modal();
				}else{
					$('#miss').modal();
				}
				$('#numbercart').text(data);
 			 });
		}
	</script>

	<!-------Thêm giỏ hàng sl 1--------->

	<script type="text/javascript">
		function add(id){
		    number = 1;
			$.post("addcard.php",{'id': id,'sl':number}, function(data){
				img = $('#anh_goc_'+id).attr('src');
				$('#ten_dt').text($('#ten_dt_'+id).text());
				$('#gia').text($('#gia_'+id).text());
				var gia = $('#cost_'+id).val();
				$('#sl').text(number);
				$('#xxx').attr('src',img);
				sum = number * gia;
				$('#gia_sum').text(formatNumber(sum, ',', '.'));
				if(number != "" && number != 0){
					$('#tb').modal();
				}else{
					$('#miss').modal();
				}
				$('#numbercart').text(data);
 			 });
		}
	</script>

	<script type="text/javascript">
	var tt = document.getElementsByClassName('tt_r');
	for(var i=0;i<tt.length;i++){
		if(tt[i].innerText == ""){
			tt[i].innerText = "Đang cập nhật";
		}
	}
</script>

</body>
</html>