<?php 
session_start();
include('../connect.php');
	if(isset($_POST['tt']) && isset($_POST['ma_dh'])){
		$tt = $_POST['tt'];
		$ma_dh = $_POST['ma_dh'];
		$get  = "select * from don_hang where ma_dh = $ma_dh";
		$tt_sql = mysqli_query($con,$get);
		$row = mysqli_fetch_assoc($tt_sql);
		$kt = $row['tinh_trang_dh'];
		if($kt == 3 || $kt == 4){
			if($kt == 3){
				echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: #e35d0f;padding: 5px;color: #fff;font-weight: bold;">Hủy đơn hàng</span></span>';
				echo "<p style='position: absolute;font-size: 14px;top: 40px;color: red'>Không thể chuyển trạng thái khi đã hủy đơn hàng</p>";
			}else if($kt == 4){
				echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: #4f836d;padding: 5px;color: #fff;font-weight: bold;">Đã giao hàng</span></span>';
				echo "<p style='position: absolute;font-size: 14px;top: 40px;color: red'>Không thể chuyển trạng thái khi đã thanh toán</p>";
				
			}
		}else{

			if($tt == 1){
			echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: red;padding: 5px;color: #fff;font-weight: bold;">Đang vận chuyển</span></span>';
			}else if($tt == 2){
				echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: green;padding: 5px;color: #fff;font-weight: bold;">Xác nhận đơn hàng</span></span>';
			}else if($tt == 3){
				echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: #e35d0f;padding: 5px;color: #fff;font-weight: bold;">Hủy đơn hàng</span></span>';
			}else if($tt == 4){
				echo '<span><b>Tình trạng: </b><span id="tt_c<?=$ma_dh?>" style="background: #4f836d;padding: 5px;color: #fff;font-weight: bold;">Đã giao hàng</span></span>';
			}

			$sql = "update don_hang set tinh_trang_dh = $tt where ma_dh = $ma_dh";
			mysqli_query($con,$sql);	
		}
		
	}

?>