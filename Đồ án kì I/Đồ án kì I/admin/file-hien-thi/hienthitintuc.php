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
		$data_dt = "select * FROM tin_tuc inner join tai_khoan_quan_tri on tin_tuc.id = tai_khoan_quan_tri.id";
		$recordset_dt = mysqli_query($con,$data_dt);
	?>

	<?php 
		while($tt = mysqli_fetch_assoc($recordset_dt)){ 
			
	?>
		<tr>
			<td><?=$tt['id_tin_tuc']?></td>
			<td><?=$tt['tieu_de']?></td>
			<td>
				<?php 
					if($tt['anh_tieu_de'] != ""){
				?>
					<img src="../images/<?=$tt['anh_tieu_de']?>">
				<?php 
				}else{
				?>
					<img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101065/112815953-stock-vector-no-image-available-icon-flat-vector.jpg?ver=6">
				<?php 
				}
				?>
			</td>		
			<td><?=$tt['ngay_dang']?></td>
			<td><?=$tt['user']?></td>
			<td>
				<a href="CRUD-DT/formsuatintuc.php?id=<?=$tt['id_tin_tuc']?>" title="Cập nhật"><i class="fas fa-pencil-alt"></i></i></a>
				<a onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này')" href="CRUD-DT/xulyxoatintuc.php?id=<?=$tt['id_tin_tuc']?>" title="Xóa"><i class="fas fa-trash"></i></a>
			</td>
		</tr>
	<?php 
	}
	?>

</body>
</html>