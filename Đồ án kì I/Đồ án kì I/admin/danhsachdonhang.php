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
  <title>Danh sách sản phẩm</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="hoadon.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body id="page-top">

 <?php include('menu.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>           
          </div>        
      </div>
      <!-- Danh sách sản phẩm-->
      <?php include('file-hien-thi/hienthidonhang.php'); ?>

      <!---Phân trang----->
    <div style="padding: 20px 100px;width: 200px;min-width: 100px;margin: 0px auto">
    <ul class="pagination">
      <?php 
      if($tranghientai > 1){
        $pre = $tranghientai - 1;
    ?>
      <li class="page-item"><a class="page-link" href="danhsachdonhang.php?tranghientai=<?=$pre?>"> < </a></li>
    <?php 
    }
    ?>

      <?php
      for($i = 1; $i <= $tongsotrang;$i++){
        if($tranghientai == $i){
          echo '<li class="page-item disabled"><a class="page-link" href="" >'.$i.'</a></li>';
        }else{
          if($i > $tranghientai - 3 && $i < $tranghientai + 2){
     ?>
      <li class="page-item"><a class="page-link" href="danhsachdonhang.php?tranghientai=<?php echo $i?>"><?=$i?></a></li>
    <?php
         }
      }
     }
    ?>

    <?php 
      if($tranghientai < $tongsotrang - 2){
        $next = $tranghientai + 3;
    ?>
      <li class="page-item"><a class="page-link" href="danhsachdonhang.php?tranghientai=<?=$next?>"> > </a></li>
    <?php
    }
     ?>
   </ul>
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
  <script type="text/javascript">
     var i = 0;
    function show(x){
      $('.tt_ct_'+x).toggle(200);
      if(i == 0){
      $('#show_'+x).html('<i class="fas fa-minus-circle"></i>');
         i = 1;
      }
      else if(i == 1){
        $('#show_'+x).html('<i class="fas fa-plus-circle"></i>');
        i = 0;
      }
    }
  </script>
  <?php include('thongbaosuccess.php') ?>
</body>

</html>
