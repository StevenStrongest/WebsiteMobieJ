<?php 
session_start();
include('../../connect.php');
	if(isset($_POST['submit'])){
		$ten_dt = $_POST['ten_dt'];
		$cost_main = $_POST['gia_goc'];
		$cost_km = $_POST['gia_khuyen_mai'];
		$gia_goc = str_replace(',', '', $cost_main);
		$gia_khuyen_mai = str_replace(',', '', $cost_km);
		$man_hinh = $_POST['man_hinh'];
		$camera_truoc = $_POST['camera_truoc'];
		$camera_sau = $_POST['camera_sau'];
		$ram = $_POST['ram'];
		$bo_nho_trong = $_POST['bo_nho_trong'];
		$cpu = $_POST['cpu'];
		$gpu = $_POST['gpu'];
		$dung_luong_pin = $_POST['dung_luong_pin'];
		$he_dieu_hanh = $_POST['he_dieu_hanh'];
		$ma_danh_muc = $_POST['danh_muc'];
		$mo_ta = $_POST['mo_ta'];
		$soluong = $_POST['sl_tk'];
		$hang = $_POST['hang'];

		/*-------Upload file ảnh đơn-----*/
		$listExtensions = array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG');
		echo $_FILES['imgmain']['name'];
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

		/*---------Upload file anh mutiple--------*/
		foreach ($_FILES['imgcl']['name'] as $key => $value) {
			echo $_FILES['imgcl']['name'][$key];
			$ex_cl = explode('.', $_FILES['imgcl']['name'][$key]);
		$extensions_cl = end($ex_cl);
		if(in_array($extensions_cl, $listExtensions)){
				if($_FILES['imgcl']['error'][$key] == 0){
					if($_FILES['imgcl']['size'][$key] < 20000000){
						$ten_files = $_FILES['imgcl']['name'][$key];
						$ten_file_cl[] = $_FILES['imgcl']['name'][$key]; 
						move_uploaded_file($_FILES['imgcl']['tmp_name'][$key], "../../images/". $ten_files);
					}else{
						echo "File quá lớn";
					}
				}else{
					echo "Lỗi file";
				}
			}else{
				echo "Lỗi định dạng file";
			}
		}

		$hinh_anh_lien_quan = implode(',', $ten_file_cl);
		echo $hinh_anh_lien_quan;


		if($gia_goc > $gia_khuyen_mai && $gia_goc != 0 ){
			if($gia_khuyen_mai == "" || $gia_khuyen_mai == 0){
				$sale = 0;
				$gia_khuyen_mai = $gia_goc;
			}else{
				$sale = round(((($gia_goc-$gia_khuyen_mai)/$gia_goc)*100));
			}
		}

		$tranghientai = $_POST['trang'];

		$insert_dt = "insert into thong_tin_dien_thoai(ten_dt,gia_goc,gia_khuyen_mai,anh_sp,hinh_anh_lien_quan,
		man_hinh,camera_truoc,camera_sau,ram,bo_nho_trong,cpu,gpu,dung_luong_pin,he_dieu_hanh,sl_trong_kho,sale,ma_danh_muc,mo_ta,hang)
		values('$ten_dt',$gia_goc,$gia_khuyen_mai,'$ten_file','$hinh_anh_lien_quan','$man_hinh','$camera_truoc',
				'$camera_sau','$ram','$bo_nho_trong','$cpu','$gpu','$dung_luong_pin','$he_dieu_hanh',$soluong,$sale,
				$ma_danh_muc,'$mo_ta',$hang)";
		mysqli_query($con,$insert_dt);
		$_SESSION['success'] = "success";
		header("location: ../danhsachsanpham.php?tranghientai=$tranghientai");	

	}

?>

