<?php 
session_start();
include('../../connect.php');
	if(isset($_POST['submit'])){
		$tieu_de = $_POST['tieu_de'];
		$noi_dung = $_POST['mo_ta'];
		$mo_ta_ngan = $_POST['mo_ta_ngan'];
		$id = $_SESSION['id'];
		
		/*-------Upload file ảnh đơn-----*/
		$listExtensions = array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG');
		$ex = explode('.', $_FILES['imgmain']['name']);
		$extensions = end($ex);
		if(in_array($extensions, $listExtensions)){
			if($_FILES['imgmain']['error'] == 0){
				if($_FILES['imgmain']['size'] < 20000000){
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
		echo $ten_file;


		$insert = "insert into tin_tuc(id,tieu_de,anh_tieu_de,noi_dung_chi_tiet,mo_ta_ngan)
					values($id,'$tieu_de','$ten_file','$noi_dung','$mo_ta_ngan')";

		mysqli_query($con,$insert);
		$_SESSION['success'] = "success";	
		header('location: ../danhsachtintuc.php');

	}

?>

