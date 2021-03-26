<?php 
session_start();
	include('../../connect.php');

	if(isset($_POST['ma'])){
          $ma_pk = $_POST['ma'];
          echo $ma_pk;
          $htdl = "select * from phu_kien where ma_phu_kien = $ma_pk";
          $sql = mysqli_query($con,$htdl);
          $dt = mysqli_fetch_assoc($sql); 
          if(isset($dt)){
            $hinh_anh_lien_quan = explode(',', $dt['hinh_anh_lien_quan_pk']);
          }
        }


	if(isset($_POST['submit'])){
		$ten_dt = $_POST['ten_dt'];
		$cost_main = $_POST['gia_goc'];
		$cost_km = $_POST['gia_khuyen_mai'];
		$gia_goc = str_replace(',', '', $cost_main);
		$gia_khuyen_mai = str_replace(',', '', $cost_km);
		$ma_danh_muc = $_POST['danh_muc'];
		$mo_ta = $_POST['mo_ta'];
		$mo_ta_ct = $_POST['nd'];
	}


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
		$ten_file = $dt['anh_pk'];
	}

		 $hinh_anh_lien_quan = $_SESSION['hinh_anh_lien_quan_pk'];
			echo "<pre>";
			print_r($hinh_anh_lien_quan);
			$hinh_nen = implode(',', $hinh_anh_lien_quan);


		if(isset($_FILES['imgcl']['name']) && $_FILES['imgcl']['name'][0] != ""){
			/*---------Upload file anh mutiple--------*/
			foreach ($_FILES['imgcl']['name'] as $key => $value) {
				$listExtensions = array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG');
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

			$sum = array_merge($ten_file_cl,$hinh_anh_lien_quan);
			$sum = array_filter($sum);
				$imgs = implode(',',$sum);
				echo "<pre>";
				print_r($sum);
		}else{
			$ten_file_cl = $hinh_nen;
			$imgs = $ten_file_cl;
		}



		if($gia_goc >= $gia_khuyen_mai && $gia_goc != 0 ){
			if($gia_khuyen_mai == "" || $gia_khuyen_mai == 0){
				$sale = 0;
				$gia_khuyen_mai = $gia_goc;
			}else{
				$sale = round(((($gia_goc-$gia_khuyen_mai)/$gia_goc)*100));
			}
		}

		$update = "update phu_kien set ten_phu_kien = '$ten_dt',gia_goc_pk = $gia_goc,gia_khuyen_mai_pk = $gia_khuyen_mai,
					anh_pk = '$ten_file',hinh_anh_lien_quan_pk = '$imgs',sale_pk = $sale,
					ma_danh_muc = $ma_danh_muc,mo_ta = '$mo_ta',mo_ta_ct = '$mo_ta_ct' where ma_phu_kien = $ma_pk";
		mysqli_query($con,$update);
		$_SESSION['success_sua'] = "sua thanh cong";
		header('location: ../danhsachphukien.php');
		
?>