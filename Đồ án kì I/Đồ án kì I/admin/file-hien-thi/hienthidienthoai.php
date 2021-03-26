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
		$tong = "select count(*) as tong from thong_tin_dien_thoai";
		$sql = mysqli_query($con,$tong);
		$doc_ban_ghi = mysqli_fetch_assoc($sql);
		$tong_ban_ghi = $doc_ban_ghi['tong'];
		$kichthuoctrang = 10;
		$tongsotrang = 0;
		if($tong_ban_ghi % $kichthuoctrang == 0){
			$tongsotrang = $tong_ban_ghi/$kichthuoctrang;
		}else{
			$tongsotrang = (int)($tong_ban_ghi/$kichthuoctrang) + 1;
		}

		if(!isset($_GET['tranghientai']) || $_GET['tranghientai'] == 1){
			$tranghientai = 1;
			$dongbatdau = 0;
		}else{
			$tranghientai = $_GET['tranghientai'];
			$dongbatdau = ($tranghientai -1) * $kichthuoctrang;
		}
	?>

	<?php 
		$data_dt = "select * from thong_tin_dien_thoai limit $dongbatdau,$kichthuoctrang";
		$recordset_dt = mysqli_query($con,$data_dt);
	?>

	<?php 
		while($dt = mysqli_fetch_assoc($recordset_dt)){ 
			$trang_thai = $dt['sl_trong_kho'];
			if($trang_thai > 0){
				$trang_thai = "Còn hàng";
				$color = "color: blue";
				$color_i = "color:green";
			}else{
				$trang_thai = "Hết hàng";
				$color = "color: red";
				$color_i = "";
			}
	?>
		<tr>
			<td><?=$dt['ma_dt']?></td>
			<td>
				<?php 
					if($dt['anh_sp'] != ""){
				?>
					<img src="../images/<?=$dt['anh_sp']?>">
					<?=$dt['ten_dt']?>
				<?php 
				}else{
				?>
					<img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6">
					<?=$dt['ten_dt']?>
				<?php 
				}
				?>
			</td>
			<td valign="center"><?=number_format($dt['gia_goc'],0,',','.')?></td>
			<td style="text-align: center;"><?=number_format($dt['gia_khuyen_mai'],0,',','.');?></td>
			<td>
				<?php 
					$ma_dt = $dt['ma_dt'];
					$star = 0; 
					$bien = 0;
					$ss = "select * from danh_gia_sp where ma_dt = $ma_dt";
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
						$sl_dg = "select * from danh_gia_sp where so_sao = $j and ma_dt = $ma_dt";
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
				<br><p><?=$tong_dg?> đánh giá</p>
				<?php 
				}else{
				?>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i><br>
					<p>0 đánh giá</p>
				<?php 
				}
				?>
			</td>
		
			<td>
				<!-- Button to Open the Modal -->
		 	<a href="#" data-toggle="modal" data-target="#myModal_<?=$dt['ma_dt']?>">Xem chi tiết</a>

		  <!-- The Modal -->
		  <div class="modal" id="myModal_<?=$dt['ma_dt']?>">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h4 class="modal-title">Chi tiết sản phẩm</h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<h3 style="text-align: center;"><?=$dt['ten_dt']?></h3>

		        	<div class="img_sp">
		        		<p>Hình ảnh sản phẩm</p>
		        		<img src="../images/<?=$dt['anh_sp']?>">
		        	</div>

		          <ul>
		          	<p>Thông tin chi tiết</p>
		          	<li><span>Màn hình:</span><?=$dt['man_hinh']?></li>
		          	<li><span>Camera trước:</span><?=$dt['camera_truoc']?></li>
		          	<li><span>Camera sau:</span><?=$dt['camera_sau']?></li>
		          	<li><span>RAM:</span><?=$dt['ram']?></li>
		          	<li><span>Bộ nhớ trong:</span><?=$dt['bo_nho_trong']?></li>
		          	<li><span>CPU:</span><?=$dt['cpu']?></li>
		          	<li><span>GPU:</span><?=$dt['gpu']?></li>
		          	<li><span>Dung Lượng pin:</span><?=$dt['dung_luong_pin']?></li>
		          	<li><span>Hệ điều hành:</span><?=$dt['he_dieu_hanh']?></li>
		          </ul>
		        </div>


		      </div>
		    </div>
		  </div>
			</td>

			<td style="<?=$color?>"><i style="<?=$color_i?>" class="fas fa-circle"></i><?=$trang_thai?></td>
	
			<td>
				<a href="CRUD-DT/formsuadt.php?ma_dt=<?=$dt['ma_dt']?>&tranghientai=<?=$tranghientai?>" title="Cập nhật"><i class="fas fa-pencil-alt"></i></i></a>
				<a onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này')" href="CRUD-DT/xulyxoasp.php?ma_dt=<?=$dt['ma_dt']?>&tranghientai=<?=$tranghientai?>" title="Xóa"><i class="fas fa-trash"></i></a>
			</td>
		</tr>
	<?php 
	}
	?>

</body>
</html>