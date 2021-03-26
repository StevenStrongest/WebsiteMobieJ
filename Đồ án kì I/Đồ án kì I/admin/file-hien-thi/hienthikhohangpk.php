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
		$data_dt = "select * FROM phu_kien";
		$recordset_dt = mysqli_query($con,$data_dt);
	?>

	<?php 
		while($tt = mysqli_fetch_assoc($recordset_dt)){ 
			
	?>
		<tr>
			<td><?=$tt['ma_phu_kien']?></td>
			<td>
				<img src="../images/<?=$tt['anh_pk']?>">
				<?=$tt['ten_phu_kien']?>
			</td>
			<td><?=number_format($tt['gia_goc_pk'],0,',','.')?>đ</td>
			<td align="center"><?=number_format($tt['gia_khuyen_mai_pk'],0,',','.')?>đ</td>
			<td align="center">
				<?=$tt['sl_trong_kho_pk']?>
				<?php 
					if($tt['sl_trong_kho_pk'] == 0){
				?>	
					<br><p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Hết hàng</p>
				<?php 
				}
				?>
			</td>
			<td style="text-align: center;">
				<button type="button" data-toggle="modal" data-target="#kh_<?=$tt['ma_phu_kien']?>" style="border: none;background: none"><i style="font-size: 25px;color: #3939ad" class="fas fa-pen-square"></i></button>
			</td>
		</tr>
	<!-----Modal chuyen chuc nang tai khoan--->
<div class="modal fade" id="kh_<?=$tt['ma_phu_kien']?>" tabindex="-1" role="dialog">
	<form method="post" action="CRUD-DT/xulykhohangpk.php">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 style="font-weight: bold;">Cập nhật số lượng kho hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<b><p>Số lượng còn lại trong kho: </p></b>
      	<input style="border-radius: 5px;padding: 3px 10px;border: 1px solid #c89999;" type="number" value="<?=$tt['sl_trong_kho_pk']?>" name="sl">
      	<input style="display: none;" type="number" value="<?=$tt['ma_phu_kien']?>"  name="ma_phu_kien">
      </div>
      <div class="modal-footer">
        <button style="background: #b21d1d;color: #fff" type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <button type="submit" name="gui" class="btn btn-primary">Cập nhật</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </form>
</div><!-- /.modal -->
	<?php 
	}
	?>



</body>
</html>