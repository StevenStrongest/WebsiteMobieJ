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
  <title>Danh sách tài khoản</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="hoadon.css">
<!-----Jquery----->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body id="page-top">

 <?php include('menu.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Danh sách tài khoản khách hàng</h1>
          </div>        
      </div>
      <!-- Danh tài khoản-->

      <!------Thống kê------------->
      <div class="container">
        <form id="thongke" method="post" action="danhsachtk_khachhang.php">
          <div class="row">
            <div class="col-md-3">
              <span>Chọn ngày</span>
               <select name="day" class="custom-select mb-3">
                <option value="">----Chọn ngày----</option>
                <?php 
                  for($i=1;$i<=31;$i++){
                ?>
                   <option value="<?=$i?>"><?=$i?></option>
                <?php
                  }
                 ?>
              </select>
            </div>
            <div class="col-md-3">
              <span>Chọn tháng</span>
              <select name="month" class="custom-select mb-3">
                <option value="">----Chọn tháng----</option>
                <?php 
                  for($i=1;$i<=12;$i++){
                ?>
                   <option value="<?=$i?>"><?=$i?></option>
                <?php
                  }
                 ?>
              </select>
            </div>
            <div class="col-md-3">
              <span>Chọn năm</span>
             <select name="year" class="custom-select mb-3">
              <option value="">----Chọn năm----</option>
                <?php 
                  for($i=1990;$i<=2020;$i++){
                ?>
                   <option value="<?=$i?>"><?=$i?></option>
                <?php
                  }
                 ?>
              </select>
            </div>
            <div class="col-md-3">
              <button name="thongke" type="submit">Thống kê</button>
            </div>
          </div>
        </form>
      </div>

      <div style="width: 100%;text-align: center;margin: 20px 0px;" class="kq">
        <?php 
            if(isset($_POST['thongke'])){
              $day = $_POST['day'];
              $month = $_POST['month'];
              $year = $_POST['year'];
              $tai_khoan = "select * from khach_hang where day(ngay_lap) = $day and MONTH(ngay_lap) = $month and year(ngay_lap) = $year";
              $sql_tk = mysqli_query($con,$tai_khoan);  
              if(mysqli_num_rows($sql_tk) > 0){
                $tongbg = mysqli_num_rows($sql_tk);
                echo "<h4>Có $tongbg kết quả được tìm thấy</h4>";
              }else{
                echo "<h4>Không có kết quả nào được tìm thấy</h4>";
              }
            }
        ?>
      </div>

      <div class="container-fluid">
        <div class="ds_sp">
          <form>
            <table class="table table-striped">
			    <thead>
			      <tr>
              <th>Mã khách hàng</th>
			        <th>Tên đăng nhập</th>
			        <th>Email</th>
			        <th>Tên khách hàng</th>
              <th>Số đơn hàng đã đặt</th>
              <th>Chức năng</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php include('file-hien-thi/hienthitaikhoankhachhang.php'); ?>
			    </tbody>
			  </table>
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
          <a class="btn btn-primary" href="xulydangxuat.php">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
