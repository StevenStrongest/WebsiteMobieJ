<?php 
    session_start();
    if(isset($_SESSION['xac_thuc_tt'])){

    }else{
      header('location: index.php');
    }
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
            <form method="post" action="xulytaomatkhau.php">
                <div class="header">
                	<h5>Tạo mật khẩu mới</h5>
                </div>
                <div class="container">
                	<div class="nhapdl">
                		<input type="password" class="pass" placeholder="Vui lòng nhập mật khẩu mới" minlength="5" required="true" name="passnew">
	                	<br>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                      <label class="custom-control-label" id="change" for="customCheck">Hiển thị mật khẩu</label>
                  </div>
						 <a href="maxacnhan.php"><button type="button" id="back"><i style="margin: 0px 10px" class="fas fa-reply-all"></i>Quay lại</button></a>
	                	<button type="submit" name="request">Tạo mới</button>
                	</div>
                </div>
            </form>           
        </div>
    

<script type="text/javascript">
      $(document).ready(function(){
 
        // Click event of the showPassword button
        $('#customCheck').on('click', function(){
       
          // Get the password field
          var passwordField = $('.pass');
       
          // Get the current type of the password field will be password or text
          var passwordFieldType = passwordField.attr('type');
       
          // Check to see if the type is a password field
          if(passwordFieldType == 'password')
          {
              // Change the password field to text
              passwordField.attr('type', 'text');
       
              // Change the Text on the show password button to Hide
              $(this).val('Hide');
              $('#change').text("Ẩn mật khẩu");
          } else {
              // If the password field type is not a password field then set it to password
              passwordField.attr('type', 'password');
       
              // Change the value of the show password button to Show
              $(this).val('Show');
              $('#change').text("Hiển thị mật khẩu");
          }
        });
      });
     </script>
</body>
</html>

