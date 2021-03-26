<?php 
session_start();
include('../../connect.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	mysqli_query($con,"delete from tin_tuc where id_tin_tuc = $id");
	$_SESSION['xoa_tt'] = "xóa thành công";
	header('location: ../danhsachtintuc.php');
}
?>