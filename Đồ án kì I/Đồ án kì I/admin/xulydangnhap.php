<?php 
session_start();
	include('../connect.php');
	if($_POST['user'] != "" && $_POST['password'] != "" ){
		$user = $_POST['user'];
		$password = $_POST['password'];
		$password = md5($password);
		$username = strip_tags($user);
		$username = addslashes($user);
		$password = strip_tags($password);
		$password = addslashes($password);
		$data = "select * from tai_khoan_quan_tri where user = '$user' and password = '$password' ";
		$ktra = mysqli_query($con,$data);
		$num_rows = mysqli_num_rows($ktra);
		if($num_rows > 0){
			while($row = mysqli_fetch_assoc($ktra)){
				$_SESSION['user'] = $row['user'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['id'] = $row['id'];
			}

			header('location: index.php');
		}else{
			$_SESSION['tb'] = "Tên đăng nhập hoặc mật khẩu không đúng";
			header('location: dangnhap.php');
		}
	}else{
		header('location: dangnhap.php');
		$_SESSION['tb'] = "Vui lòng điền đầy đủ thông tin";
	}
?>