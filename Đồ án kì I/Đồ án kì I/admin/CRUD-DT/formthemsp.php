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

 <?php include('menu.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thêm mới sản phẩm(Điện thoại)</h1>
            <a href="../danhsachsanpham.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i style="margin-right: 5px" class="fas fa-chevron-left text-white-50"></i></i>Quay lại danh sách sản phẩm</a>
          </div>        
      </div>
      
      <!-----------Form thêm sản phẩm---------------->
    <div class="container reload">
      <form id="them_dt" method="post" action="xulythemdienthoai.php" onsubmit="return validate()" enctype="multipart/form-data">
        <div class="row">
          <!--------Row-left------>
          <div class="col-md-8 col-lg-8 col-sm-8">
            <!----Tên sản phẩm------->
            <div class="ten_sp">
              <span><b>Tên sản phẩm</b></span><br>
              <input type="text" placeholder="Nhập tên sản phẩm" onfocusout="validate_ten_dt()" value="" id=ten_dt name="ten_dt">
              <span class="helper-text"></span>
              <input type="number" style="display: none;" value="<?=$_GET['tranghientai']?>" name="trang">
              <br><span><b>Nội dung</b></span><br>
              <textarea name="mo_ta" cols="82" rows="20" id="editor" ></textarea>
            </div>           
            <!------Ảnh sản phẩm---------->
            <div class="img_main">
              <h5>Ảnh sản phẩm</h5>
              <div id="xem_truoc"></div>
              <div class="khung_chua">
                <i class="fas fa-plus"></i>
                <p>Thêm file ảnh</p>
              </div>
              <input type="file" name="imgmain" id="img_file" onchange="review(event);" class="filestyle" >
            </div>
          <!------Ảnh sản phẩm cùng loại------>
            <div class="img_cl">
              <h5>Ảnh sản phẩm cùng loại</h5>
              <input type="file" name="imgcl[]" id="img_files" onchange="reviews(event);" multiple="true" class="filestyle">
              <div id="xem_truocs"></div>
              <div class="khung_chua"></div>
            </div>
           <!-----------Giá sản phẩm-------->
           <div class="gia_sp">
             <p><b>Giá sản phẩm</b></p>
             <div class="row">
               <div class="col-md-6 col-sm-6 col-lg-6">
                 <span>Giá gốc</span><br>
                 <div class="input-group mb-3">
                  <input onfocusout="validate_gia_sp()" id="gia_goc" name="gia_goc" type="text" value="" class="form-control format" placeholder="0">
                  <div class="input-group-append">
                      <span style="height: 35px;" class="input-group-text gia_goc">VNĐ</span>
                  </div>
                </div>
                 <span id="error" class="helper-text"></span>
               </div>
               <div class="col-md-6 col-sm-6 col-lg-6">
                 <span>Giá khuyến mại</span><br>
                 <div class="input-group mb-3">
                  <input id="gia_khuyen_mai" name="gia_khuyen_mai" value="" type="text" class="form-control format" placeholder="0">
                  <div class="input-group-append">
                      <span style="height: 35px;" class="input-group-text">VNĐ</span>
                  </div>
                </div>
               </div>
             </div>
           </div> 
          </div>
          
          <!----------Row-right--------->
          <div class="col-md-4 col-lg-4 col-sm-4">
          <!---------Thông tin chi tiết----------->
            <div class="tt_chi_tiet">
              <h5>Thông tin chi tiết</h5>
              <span>Màn hình</span><br>
              <input type="text" value="" name="man_hinh"><br>
              <span>Camera trước</span><br>
              <input type="text" value="" name="camera_truoc"><br>
              <span>Camera sau</span><br>
              <input type="text" value="" name="camera_sau"><br>
              <span>Ram</span><br>
              <input type="text" value="" name="ram"><br>
              <span>Bộ nhớ trong</span><br>
              <input type="text" value="" name="bo_nho_trong"><br>
              <span>CPU</span><br>
              <input type="text" value="" name="cpu"><br>
              <span>GPU</span><br>
              <input type="text" value="" name="gpu"><br>
              <span>Dung lượng pin</span><br>
              <input type="text" value="" name="dung_luong_pin"><br>
              <span>Hệ điều hành</span><br>
              <input type="text" value="" name="he_dieu_hanh"><br>
            </div>
            <!--------Danh mục sản phẩm------>
            <div class="danh_muc">
              <select required="true" name="danh_muc" id="danh_muc" class="form-control form-control-sm">
                <option value="">Chọn danh mục</option>
                <option value="1">Sản phẩm nổi bật</option>
                <option value="2">Sản phẩm mới</option>
              </select>
               <span class="helper-text"></span>
          </div>
          <!-- notify js -->
  
           <!---------Số lượng trong kho---------> 
            <div class="mau_sac">
              <p>Số lượng trong kho</p>
              <input required="true" style="width: 100%;border-radius: 5px;border: 1px solid silver;padding: 0px 10px" type="number" name="sl_tk">
            </div>
            <!---------Hãng điện thoại---------> 
            <?php 
              $sql_h = "select * from hang_dien_thoai";
              $tt_sql = mysqli_query($con,$sql_h);
            ?>
            <div class="danh_muc">
              <p>Hãng điênn thoại</p>
               <select required="true" name="hang" id="danh_muc" class="form-control form-control-sm">
                <option value="">Chọn hãng điện thoại</option>
                <?php 
                  while ($h = mysqli_fetch_assoc($tt_sql)) {
                ?>
                  <option value="<?=$h['ma_hang']?>"><?=$h['ten_hang']?></option>
                <?php 
                }
                ?>
              </select>
            </div>

          </div>

          <div style="width: 100%;height: 1px;margin-top: 20px;background: silver" class="k"></div>
           <!-------Điều khiển-------> 
              <div class="dieu_khien">
                  <a href="../danhsachsanpham.php"><button type="button">Hủy</button></a>
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
  
  <script type="text/javascript">
    function validate(){
      gia_g = $('#gia_goc').val();
      gia_r = gia_g.replace(/,/g,'');
      gia_c = parseInt(gia_r);
      gia_km = $('#gia_khuyen_mai').val();
      gia_km_r = gia_km.replace(/,/g,'');
      gia_km_c = parseInt(gia_km_r);
      danhmuc = $('#danh_muc').val();
      
      if(gia_c <= gia_km_c){
        alert("Giá gốc phải lớn hơn giá khuyến mại");
        return false;
      }
    }

  </script>

  <script>
  CKEDITOR.replace( 'mo_ta' );
</script>

<script type="text/javascript" src="xulyxemtruoc.js"></script>
<script type="text/javascript" src="xulyxemtruocnhieufile.js"></script>
<script type="text/javascript" src="validate.js"></script>

<!----Format tien----->
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
