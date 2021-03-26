<?php 
session_start();
  if(!isset($_SESSION['user']) || !isset($_SESSION['password'])){
       header('location: dangnhap.php');
  }

  if($_SESSION['level'] > 1){
         header('location: back.php');
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin tài khoản</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style type="text/css">
	.thong_tin{
		padding: 20px 100px;
	}

	#thong_tin_tk{
		border: 2px solid silver;
		padding: 20px 40px;
		border-radius: 5px;
	}

	.ho_ten input{
		width: 100%;
		border-radius: 3px;
		border: 1px solid silver;
	}

	.email_dt input{
		width: 100%;
		border-radius: 3px;
		border: 1px solid silver;
	}

	.dia_chi input{
		width: 100%;
		border-radius: 3px;
		border: 1px solid silver;
	}
	
	.avatar img{
		position: relative;
		left: -18%;
	}

	.avatar input{
		position: relative;
		z-index: 1;
		left: 18%;
		opacity: 0;
	}

	.gui input{
		padding: 5px 25px;
		border-radius: 5px;
		border: 1px solid silver;
		background: #017afb;
		color: #fff;
	}
	.gui button{
		padding: 5px 25px;
		border-radius: 5px;
		border: 1px solid silver;
		background: #db1c2f;
	}

	.gui button a{
		text-decoration: none;
		color: #fff;
	}

	.khung{
		text-align: center;
	}

	.khung img{
		width: 100%;
		height: 100%;
		position: relative;
		left: -9px;
	}

	.bo{
		border: 0px!important;
	}

</style>
</head>
<body>

	<?php 
		include('../connect.php');
		if(isset($_POST['submit'])){
			$ho = $_POST['ho'];
			$ten = $_POST['ten'];
			$email = $_POST['email'];
			$dia_chi = $_POST['dia_chi'];
			$sdt = $_POST['sdt'];
		$listExtensions = array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG');
		$ex = explode('.', $_FILES['img']['name']);
		$extensions = end($ex);
		if(in_array($extensions, $listExtensions)){
			if($_FILES['img']['error'] == 0){
				if($_FILES['img']['size'] < 2000000){
					$ten_file = $_FILES['img']['name'];
					move_uploaded_file($_FILES['img']['tmp_name'], "../images/". $ten_file);
				}else{
					echo "File quá lớn";
				}
			}else{
				echo "Lỗi file";
			}
		}else{
			echo "Lỗi định dạng file";
		}
		$id = $_SESSION['id'];
		$add = "insert into thong_tin_tai_khoan(id,ho,ten,email,sdt,dia_chi,avatar)
				values($id,'$ho','$ten','$email',$sdt,'$dia_chi','$ten_file')";
		mysqli_query($con,$add);
		header('location: thongtintaikhoan.php');	
		}

	?>
	<div class="all">
		<div class="container">
			<div class="back">
				<a href="thongtintaikhoan.php"><i style="margin-right: 5px" class="fas fa-chevron-left"></i><span>Back</span></a>
			</div>
			
			<div style="text-align: center;" class="text">
				<p style="margin-bottom: 3px"><b style="font-size: 50px">Thêm thông tin tài khoản</b></p>
				<p>Tất cả thông tin liên quan đến tài khoản</p>
			</div>
			<hr>
			<!-----Form thông tin------>
			<div class="thong_tin">
				<form method="post" action="themthongtin.php" id="thong_tin_tk" class="myform" enctype="multipart/form-data">
					<div class="ho_ten">
						<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6">
								<span><b>Họ</b></span><br>
								<input  type="text" name="ho">
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6">
								<span><b>Tên</b></span><br>
								<input  type="text" name="ten">
							</div>
						</div>
					</div>
					<div style="margin-top: 10px;" class="email_dt">
						<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6">
								<span><b>Email</b></span><br>
								<input type="text" name="email">
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6">
								<span><b>Số điện thoại</b></span><br>
								<input type="text" name="sdt">
							</div>
						</div>
					</div>
					<div style="margin-top: 10px" class="dia_chi">
						<span><b>Địa chỉ</b></span><BR>
						<input type="text" name="dia_chi">
					</div>
					<hr>
					<p><b>CHI TIẾT</b></p>
					<div class="gioi_thieu">
						<span>Thông tin giới thiệu(Tùy chọn)</span><br>
						<textarea rows="7" cols="112">
							
						</textarea>
					</div>
					<hr>
					<div style="text-align: center;" class="avatar">
						<span>Chọn ảnh đại diện</span><br>
						<div style="width: 300px;height: 300px;border: 1px solid silver;display: inline-block;text-align: center;" class="khung">
							
						</div><br>
						<input type="file" onchange="review(event);" id="img" name="img">
						<img style="width: 100px" src="https://www.drupal.org/files/styles/grid-3-2x/public/project-images/drupal-addtoany-logo.png?itok=Jov4E6y1">
					</div>
					<hr>

					<div style="text-align: right;" class="gui">
						<button><a href="">Hủy</a></button>
						<input type="submit" value="Thêm" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	function review(event){
	var files = document.getElementById('img').files;
	$('.khung').html('<img src="">');
	for(i=0;i<files.length;i++){
		$('.khung').html('<img src="" id=" '+ i +'"> ');
		$('.khung').addClass('bo');

		$('.khung img:eq('+i+')').attr('src', URL.createObjectURL(event.target.files[i]));
	}
}
	</script>
</body>
</html>