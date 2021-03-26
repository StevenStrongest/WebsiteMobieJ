<?php 
session_start();
  if(!isset($_SESSION['user']) || !isset($_SESSION['password'])){
       header('location: dangnhap.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Thêm sản phẩm</title>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="bootstrap-filestyle-2.1.0/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js"> </script>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>

<body id="page-top">

  <?php include('menu.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thêm mới thành viên</h1>
            <a href="../danhsachtaikhoan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i style="margin-right: 5px" class="fas fa-chevron-left text-white-50"></i></i>Quay lại danh sách tài khoản</a>
          </div>        
      </div>
      
      <!-----------Form thêm thành viên---------------->
		<div class="container">
      <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Thêm thành viên mới!</h1>
              </div>
              <form style="padding: 20px 100px;" method="post" action="xulythemthanhvien.php" class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputUser" name="user" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" minlength="5" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Mật khẩu">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" minlength="5" class="form-control form-control-user" name="repassword" id="exampleRepeatPassword" placeholder="Nhập lại mật khẩu">
                  </div>
                </div>
                <select required="true" name="cars" class="custom-select mb-3">
                  <option value="">Chọn quyền</option>
                  <option value="1">Admin</option>
                  <option value="2">Thành viên</option>
                </select>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                  Thêm thành viên!
                </button>
                <p style="color: red;text-align: center;margin-top: 10px;">
                  <?php 
                      if(isset($_SESSION['tb'])){
                      echo $_SESSION['tb'];
                      unset($_SESSION['tb']);
                    }
                  ?>
                </p>          
                <hr>
              </form>
          </div>
    </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rời khỏi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn có chắc chắn muốn đăng xuất</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
          <a class="btn btn-primary" href="../xulydangxuat.php">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script type="text/javascript">

$('.format').keyup(function(event) {
 
          // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;
 
      // format number
      $(this).val(function(index, value) {
        return value
     .replace(/[^0-9]/g, "")
   .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        ;
      });
    });
 

</script>

</body>

</html>
