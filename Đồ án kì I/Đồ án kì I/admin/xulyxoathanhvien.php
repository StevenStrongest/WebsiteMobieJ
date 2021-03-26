<?php 
session_start();
	include('../connect.php');
	$id = $_GET['id'];
	$dulieu = "select * from thong_tin_tai_khoan where id = $id";
    $sql = mysqli_query($con,$dulieu);
    $tt = mysqli_fetch_assoc($sql);

    	if($id == $_SESSION['id']){
    		$_SESSION['canh_bao'] = "xoa that bai";
    		header('location: danhsachtaikhoan.php');
    	}else{
    		    if(isset($tt)){
    		    	$delete_thanh_vien = "delete tai_khoan_quan_tri,thong_tin_tai_khoan from tai_khoan_quan_tri inner join thong_tin_tai_khoan
			on thong_tin_tai_khoan.id = tai_khoan_quan_tri.id where  tai_khoan_quan_tri.id = $id";
			 }else{
			    	$delete_thanh_vien = "delete from tai_khoan_quan_tri where id = $id";
			}

			$_SESSION['xoa_tk'] = "xoa thanh cong";
			mysqli_query($con,$delete_thanh_vien);
			header('location: danhsachtaikhoan.php');
    	}
    
	
?>