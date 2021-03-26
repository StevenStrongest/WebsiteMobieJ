<?php 
include('../connect.php');
	if(isset($_POST['thongke'])){
		$day $_POST['day'];
		$month = $_POST['month'];
		$year $_POST['year'];
	}

	$select = "select * from khach_hang where day(ngay_lap) = $day and MONTH(ngay_lap) = $month and year(ngay_lap) = $year";
	
?>