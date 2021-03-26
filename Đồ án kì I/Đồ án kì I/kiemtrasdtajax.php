<?php 
	if(isset($_POST['sdt'])){
		$sdt = $_POST['sdt'];
		function dienthoai_chuan ($dt) {
		$dt_array=(str_split($dt));
		for ($i=0; $i<count($dt_array); $i++) {
		if (($dt_array[$i]!="09") && ($dt_array[$i]!="03") && ($dt_array[$i]!="07") && ($dt_array[$i]!="05") ) {
		$dt_array[$i]="del";
		}

		}
		$dt_chuan="<i style='color: red;font-size: 15px;padding: 5px' class='fas fa-exclamation-circle'></i><span style='color: red'>Hãy nhập đúng định dạng điện thoại</span>";
		for ($i=0; $i<count($dt_array); $i++) {
		if ($dt_array[$i]!="del") {
			if(count($dt_array) > 9 && count($dt_array) < 12){
		$dt_chuan = "<i style='color: green;font-size: 15px;padding: 5px' class='fas fa-check-circle'></i><span style='color: green'>Hợp lệ</span>";}
			}
		}
		return $dt_chuan;
		}

		echo dienthoai_chuan($sdt);
}