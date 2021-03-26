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
  
  <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>



</head>
<body id="page-top">

<?php include('menu.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thêm mới bài viết</h1>
            <a href="../danhsachtintuc.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i style="margin-right: 5px" class="fas fa-chevron-left text-white-50"></i></i>Quay lại danh sách tin tức</a>
          </div>        
      </div>
      
      <!-----------Form thêm sản phẩm---------------->
		<div class="container reload">
      <form id="them_dt" method="post" action="xulythemtintuc.php" enctype="multipart/form-data">
				<div class="row">
          <!--------Row-left------>
					<div class="col-md-12 col-lg-12 col-sm-12">
            <!----Tên sản phẩm------->
						<div class="ten_sp">
							<span><b>Tiêu đề</b></span><br>
              <input type="text" placeholder="Nhập tiêu đề" onfocusout="validate_ten_dt()" value="" id=ten_dt name="tieu_de">
               <span class="helper-text"></span>
               <br><span><b>Mô tả ngắn</b></span><br>
              <textarea style="width: 100%;min-height: 100px;overflow-y: auto;" name="mo_ta_ngan"></textarea>
              <br><span><b>Nội dung</b></span><br>
              <textarea name="mo_ta" cols="82" rows="20" id="editor" ></textarea>
						</div>           
            <!------Ảnh sản phẩm---------->
            <div class="img_main">
              <h5>Hình ảnh tiêu đề cho bài viết</h6>
              <div id="xem_truoc"></div>
              <div class="khung_chua khung_chua_tt">
                
              </div>
              <div class="chon_tt">
                <div class="choose">
                  <input type="file" name="imgmain" id="img_file" onchange="review(event);">
                  <div class="chon_img">
                  <span><i style="margin-right: 5px;" class="fas fa-images"></i>Chọn từ thư viện</span>
                  </div>
                </div>
              </div>
            </div>
          
           <!-----------Giá sản phẩm-------->
           
               </div>
             </div>
           </div> 
					</div>
          
              <div class="dieu_khien">
                  <a href="../danhsachtintuc.php"><button type="button">Hủy</button></a>
                 <input type="submit" value="Gửi" name="submit">
              </div>
				</div>
      </form>
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
  CKEDITOR.replace( 'mo_ta' );
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

<script type="text/javascript" src="xulyxemtruoc.js"></script>
<script type="text/javascript" src="xulyxemtruocnhieufile.js"></script>
<script type="text/javascript" src="validate.js"></script>

</body>

</html>
