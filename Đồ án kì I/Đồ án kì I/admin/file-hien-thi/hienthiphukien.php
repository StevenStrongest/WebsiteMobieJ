<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiện thị sản phẩm</title>
	<style type="text/css">
		.ds_sp table tr td img{
			width: 60px;
		}
		.ds_sp table tr td i.fa-star{
			font-size: 10px;
		}

		.ds_sp form table .modal-dialog{
			margin-top: 90px;
		}

		.ds_sp form table tr td span{
			font-weight: bold;
			margin-right: 5px;
		}

		.ds_sp form table h3{
			color: blue;
		}

		.img_sp{
			text-align: center;
		}

		.img_sp img{
			width: 130px!important;
		}

		.ds_sp table tr td i.fa-pencil-alt,i.fa-trash{
			margin-right: 10px;
		}

		.ds_sp table tr td i.fa-circle{
			font-size: 8px;
			position: relative;
		    top: -2px;
		    left: -5px;
		}
	</style>
	
</head>
<body>
	<?php include('connect.php');?>
	<?php 
		$data_pk = "select * from phu_kien";
		$recordset_pk = mysqli_query($con,$data_pk);
	?>

	<?php 
		while($pk = mysqli_fetch_assoc($recordset_pk)){ 
			$trang_thai = $pk['sl_trong_kho_pk'];
			if($trang_thai > 0){
				$trang_thai = "Còn hàng";
				$color = "color: blue";
				$color_i = "color:green";
			}else{
				$trang_thai = "Hết hàng";
				$color = "color:red";
				$color_i = "";
			}
	?>
		<tr>
			<td><?=$pk['ma_phu_kien']?></td>
			<td>
				<?php 
					if($pk['anh_pk'] != ""){
				?>
					<img src="../images/<?=$pk['anh_pk']?>">
				<?php 
				}else{
				?>
					<img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6">
				<?php 
				}
				?>
				<?=$pk['ten_phu_kien']?>
			</td>
			<td valign="center"><?=number_format($pk['gia_goc_pk'],0,',','.')?></td>
			<td><?=number_format($pk['gia_khuyen_mai_pk'],0,',','.');?></td>
			<td>
				<?php 
				$star = 0; 
				$bien = 0;
				$ma_pk = $pk['ma_phu_kien'];
				$ss = "select * from danh_gia_pk where ma_phu_kien = $ma_pk";
				$sql = mysqli_query($con,$ss);
				while ($dg = mysqli_fetch_assoc($sql)) {
					$star += $dg['so_sao'];
					$bien++;
				}

				if($star != 0){
					$star = (int)($star / $bien);
				}
				?>

				<?php 
					$tong_dg = 0;
					for($j=1;$j<=5;$j++){
						$sl_dg = "select * from danh_gia_pk where so_sao = $j and ma_phu_kien = $ma_pk";
						$sl_sao = mysqli_query($con,$sl_dg);
						$so_sao = mysqli_num_rows($sl_sao);
						$tong_dg += $so_sao;
					}
				?>

				<?php 
					if($star != 0){
				?>
				<?php 
					for($i=0;$i<$star;$i++){
				?>
					<i style="color: #f8b802" class="fas fa-star"></i>
				<?php
				}
				?>

				<?php 
				for($i=0;$i<5-$star;$i++){
				?>
				<i class="fas fa-star"></i>
				<?php
				}
				?>
				<br><p style="font-size: 13px;">(<?=$tong_dg?> lượt đánh giá)</p>
				<?php 
				}else{
				?>
				 	<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i><br>
					<p style="font-size: 13px;">(0 lượt đánh giá)</p>
				<?php 
				}
				?>
			</td>
		
			<td>
				<!-- Button to Open the Modal -->
		 	<a href="#" data-toggle="modal" data-target="#myModal_<?=$pk['ma_phu_kien']?>">Xem chi tiết</a>

		  <!-- The Modal -->
		  <div class="modal" id="myModal_<?=$pk['ma_phu_kien']?>">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Chi tiết sản phẩm</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<h3 style="text-align: center;"><?=$pk['ten_phu_kien']?></h3>

		        	<div class="img_sp">
		        		<p>Hình ảnh sản phẩm</p>
		        		<img src="../images/<?=$pk['anh_pk']?>">
		        	</div>

		          <ul>
		          	<p>Mô tả sản phẩm</p>
		          	<li><?=$pk['mo_ta']?></li>
		          </ul>
		        </div>


		      </div>
		    </div>
		  </div>
			</td>

			<td style="<?=$color?>"><i style="<?=$color_i?>" class="fas fa-circle"></i><?=$trang_thai?></td>
			
			<td>
				<a href="CRUD-DT/formsuapk.php?ma=<?=$pk['ma_phu_kien']?>" title="Cập nhật"><i class="fas fa-pencil-alt"></i></i></a>
				<a onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này')" href="CRUD-DT/xulyxoapk.php?ma=<?=$pk['ma_phu_kien']?>" title="Xóa"><i class="fas fa-trash"></i></a>
			</td>
		</tr>
	<?php 
	}
	?>

</body>
</html>