<?php 
include('connect.php');
	if(isset($_POST['tdk'])){
		$ten_dk = $_POST['tdk'];
		if(strlen($ten_dk) <= 3){
			echo "<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Tên đăng nhập phải lớn hơn 3 ký tự</span>";
		}else{
			$ktra = "select * from khach_hang where ten_dn = '$ten_dk' ";
			$sql = mysqli_query($con,$ktra);
			$dong = mysqli_num_rows($sql);
			if($dong > 0){
				echo "<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Tên đăng nhập đã tồn tại</span>";
			}else{
				echo "<i style='color: green;font-size: 15px;padding: 5px' class='fas fa-check-circle'></i><span style='color: green'>Hợp lệ</span>";
			}
		}

	}

	if(isset($_POST['tdn'])){
		$ten_dn = $_POST['tdn'];	
			$ktra = "select * from khach_hang where ten_dn = '$ten_dn' ";
			$sql_dn = mysqli_query($con,$ktra);
			$dong_dn = mysqli_num_rows($sql_dn);
			if($dong_dn == 0){
				echo "<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Tên đăng nhập không tồn tại</span>";
			}

	}

	if(isset($_POST['mk_dk'])){
		$mk = $_POST['mk_dk'];
		if(strlen($mk) <= 5){
			echo "<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Mật khẩu phải có ít nhất 6 ký tự</span>";
		}else{
			$mk = md5($mk);
			$ktra = "select * from khach_hang where mat_khau = '$mk' ";
			$sql_mk = mysqli_query($con,$ktra);
			$dong_mk = mysqli_num_rows($sql_mk);
			if($dong_mk > 0){
				echo "<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Mật khẩu đã tồn tại</span>";
			}else{
				echo "<i style='color: green;font-size: 15px;padding: 5px' class='fas fa-check-circle'></i><span style='color: green'>Hợp lệ</span>";
			}
		}

	}
?>