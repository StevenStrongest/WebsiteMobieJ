<?php 
session_start();
include('../../connect.php');
	if(isset($_POST['submit'])){
		$ten_dt = $_POST['ten_dt'];
		$cost_main = $_POST['gia_goc'];
		$cost_km = $_POST['gia_khuyen_mai'];
		$gia_goc = str_replace(',', '', $cost_main);
		$gia_khuyen_mai = str_replace(',', '', $cost_km);
		$sl_trong_kho = $_POST['sl'];
		$mo_ta_ngan = $_POST['nd'];
		$mo_ta_ct = $_POST['mo_ta'];
		$ma_danh_muc = $_POST['danh_muc'];

		
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

		/*---------Upload file anh mutiple--------*/
		foreach ($_FILES['imgcl']['name'] as $key => $value) {
			echo $_FILES['imgcl']['name'][$key];
			$ex_cl = explode('.', $_FILES['imgcl']['name'][$key]);
		$extensions_cl = end($ex_cl);
		if(in_array($extensions_cl, $listExtensions)){
				if($_FILES['imgcl']['error'][$key] == 0){
					if($_FILES['imgcl']['size'][$key] < 2000000){
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

		$insert_pk = "insert into phu_kien(ten_phu_kien,gia_goc_pk,gia_khuyen_mai_pk,
		anh_pk,hinh_anh_lien_quan_pk,sale_pk,sl_trong_kho_pk,ma_danh_muc,mo_ta,mo_ta_ct)
		values('$ten_dt',$gia_goc,$gia_khuyen_mai,'$ten_file','$hinh_anh_lien_quan',$sale,$sl_trong_kho,$ma_danh_muc,'$mo_ta_ngan','$mo_ta_ct')";
		mysqli_query($con,$insert_pk);
		$_SESSION['success'] = "success";
		header('location: ../danhsachphukien.php');

	}

?>

