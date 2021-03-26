<?php 
session_start();
include('connect.php');
	if(isset($_POST['submit'])){
		$ten_lh = $_POST['ten'];
		$email_lh = $_POST['email'];
		$nd_lh = $_POST['tin_nhan'];

		$insert = "insert into lien_he(ten_lh,email_lh,nd_lh)
				values('$ten_lh','$email_lh','$nd_lh')";
		mysqli_query($con,$insert);
		$_SESSION['success'] = "thành công";
		header('location: lienhe.php');

	}
?>