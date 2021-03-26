<?php 
session_start();
	include('../../connect.php');
	if($_POST['user'] != "" && $_POST['password'] != "" ){
		$user = $_POST['user'];
		$password = $_POST['password'];
		$password = md5($password);
		$repassword = $_POST['repassword'];
		$repassword = md5($repassword);
		$email = $_POST['email'];
		$level = $_POST['cars'];
		$data = "select * from tai_khoan_quan_tri where user = '$user' or password = '$password' ";
		$ktra = mysqli_query($con,$data);
		if(mysqli_num_rows($ktra) > 0){
			$_SESSION['tb'] = "Tên đăng nhập hoặc mật khẩu đã tồn tại";
			header('location: formthemthanhvien.php');
			die();
		}


		if($password != $repassword){
			$_SESSION['tb'] = "Mật khẩu nhập lại không đúng";
			header('location: formthemthanhvien.php');
			die();
			}

		if($level == ""){
				$_SESSION['tb'] = "Bạn chưa chọn quyền thành viên";
				header('location: formthemthanhvien.php');
			}else{
				$add = "insert into tai_khoan_quan_tri(user,password,repassword,email,level)
						values('$user','$password','$repassword','$email',$level)";
						mysqli_query($con,$add);
					$_SESSION['success'] = "them thanh cong";
					header('location:../danhsachtaikhoan.php');
		}

	}else{
		$_SESSION['tb'] = "Vui lòng điền đầy đủ thông tin";
		header('location: formthemthanhvien.php');
	}
	
?>