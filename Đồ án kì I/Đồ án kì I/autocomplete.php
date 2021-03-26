<?php 
			include('connect.php');
		if(isset($_GET["term"])){
			$dl = $_GET["term"];
			$data = "select * from thong_tin_dien_thoai where ten_dt like '%$dl%' ";
			$recor = mysqli_query($con,$data);
			while ($s = mysqli_fetch_assoc($recor)) {
				$arr = array();
		        $arr['label'] = $s['ten_dt'];
		        $arr['value'] = $s['ten_dt'];
		        $arr['id'] = $s['ten_dt'];
		        $arr['img'] = "images/".$s['anh_sp'];
		        $kq[] = $arr;
			}
		}
			
		echo json_encode($kq);
?>