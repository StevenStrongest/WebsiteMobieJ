<?php 
session_start();
include('../../connect.php');

if(isset($_POST['submit'])){
		$tieu_de = $_POST['tieu_de'];
		$noi_dung = $_POST['mo_ta'];
		$mo_ta_ngan = $_POST['mo_ta_ngan'];
		$id = $_POST['id'];

		$select = "select * from tin_tuc where id_tin_tuc = $id";
		$sql = mysqli_query($con,$select);
		$tt = mysqli_fetch_assoc($sql);

		if(isset($_FILES['imgmain']['name']) && $_FILES['imgmain']['name'] != ""){

		/*-------Upload file ảnh đơn-----*/
		$listExtensions = array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG');
		echo $_FILES['imgmain']['name'];
		$ex = explode('.', $_FILES['imgmain']['name']);
		$extensions = end($ex);
		if(in_array($extensions, $listExtensions)){
			if($_FILES['imgmain']['error'] == 0){
				if($_FILES['imgmain']['size'] < 2000000){
					$ten_file = $_FILES['imgmain']['name'];
					move_uploaded_file($_FILES['imgmain']['tmp_name'], "../../images/". $ten_file);
				}else{
					echo "File quá lớn";
				}
			}else{
				echo "Lỗi file";
			}
		}else{
			echo "Lỗi định dạng file";
		}

	}else{
		$ten_file = $tt['anh_tieu_de'];
	}

	$update = "update tin_tuc set tieu_de = '$tieu_de',anh_tieu_de = '$ten_file',
	noi_dung_chi_tiet = '$noi_dung',mo_ta_ngan = '$mo_ta_ngan' where id_tin_tuc = $id";
		mysqli_query($con,$update);
		$_SESSION['success_sua'] = "sua thanh cong";
		header('location: ../danhsachtintuc.php');
}
?>