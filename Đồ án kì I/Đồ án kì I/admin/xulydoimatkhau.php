<?php 
	session_start();
	$id = $_SESSION['id'];
	if(isset($_POST['request'])){
		$mkc = $_POST['mkc'];
		$mkm = $_POST['mkm'];
		$mkc = md5($mkc);
		include('../connect.php');
		if($mkm != ""){
		$sql = "select * from tai_khoan_quan_tri where password = '$mkc' and id = $id";
		$query = mysqli_query($con,$sql);
		$ktra = mysqli_num_rows($query);
			if($ktra == 0){
				$_SESSION['sai_mk'] = "sai mk";
				header('location: doimatkhau.php');
				
			}else{
				$mkm = md5($mkm);
				$update = "update tai_khoan_quan_tri set password = '$mkm', repassword = '$mkm' where id = $id";
				mysqli_query($con,$update);
				$_SESSION['success_sua'] = "cap nhat thanh cong";
				header('location: index.php');
			}
		}else{
			header('location: doimatkhau.php');
			$_SESSION['sai_mk'] = "sai mk";
		}
	}
?>