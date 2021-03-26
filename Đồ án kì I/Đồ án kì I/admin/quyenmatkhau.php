<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đổi mật khẩu</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="thongtintaikhoan.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>
	<div class="container emp-profile">
            <form method="post" action="xulyquenmatkhau.php">
                <div class="header">
                	<h5>Quên mật khẩu</h5>
                </div>
                <div class="container">
                	<div class="nhapdl">
                    <input type="text" class="pass" placeholder="Tên đăng nhập" required="true" name="tdn">
                		<input type="email" class="pass" placeholder="Vui lòng nhập email" required="true" name="email">
	                	<br>
						 <a href="doimatkhau.php"><button type="button" id="back"><i style="margin: 0px 10px" class="fas fa-reply-all"></i>Quay lại</button></a>
	                	<button type="submit" name="request">Kiểm tra</button>
                	</div>
                </div>
            </form>           
        </div>
    
     <?php include('thongbaosuccess.php') ?>
</body>
</html>

