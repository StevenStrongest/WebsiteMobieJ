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
  <title>Sửa sản phẩm</title>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="bootstrap-filestyle-2.1.0/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js"> </script>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
  </style>
</head>

<body id="page-top">

 <?php include('menu.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cập nhật sản phẩm(Điện thoại)</h1>
            <a href="../danhsachsanpham.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i style="margin-right: 5px" class="fas fa-chevron-left text-white-50"></i></i>Quay lại danh sách sản phẩm</a>
          </div>        
      </div>
      <?php 
        include('../../connect.php');
         if(isset($_GET['ma_dt']) && is_numeric($_GET['ma_dt'])){
          $ma_dt = $_GET['ma_dt'];
          $htdl = "select * from thong_tin_dien_thoai where ma_dt = $ma_dt";
          $sql = mysqli_query($con,$htdl);
          $dt = mysqli_fetch_assoc($sql); 
          if(isset($dt)){
            $tt = $dt['sl_trong_kho'];
            $ma_danh_muc = $dt['ma_danh_muc'];
            $hinh_anh_lien_quan = explode(',', $dt['hinh_anh_lien_quan']);
            $_SESSION['hinh_anh_lien_quan'] = $hinh_anh_lien_quan;
          }
        }
       ?>

      <?php 
        if(isset($dt) && $dt != ""){
      ?>
           <!-----------Form thêm sản phẩm---------------->
          <div id="result">
            
          </div>
    <div class="container">
      <form id="them_dt" method="post" action="xulysuadt.php" onsubmit="return validate();" enctype="multipart/form-data">
        <div class="row">
          <!--------Row-left------>
          <div class="col-md-8 col-lg-8 col-sm-8">
            <!----Tên sản phẩm------->
            <div class="ten_sp">
              <span><b>Tên sản phẩm</b></span><br>
              <input type="text" onfocusout="validate_ten_dt()" placeholder="Nhập tên sản phẩm" value="<?=$dt['ten_dt']?>" id=ten_dt name="ten_dt">
               <span class="helper-text"></span><br>
              <input style="display: none;" type="text" value="<?=$dt['ma_dt']?>" id=ten_dt name="ma_dt">
              <input type="number" style="display: none;" value="<?=$_GET['tranghientai']?>" name="trang">
              <span><b>Nội dung</b></span><br>
              <textarea name="mo_ta" cols="82" rows="20" id="editor" ><?=$dt['mo_ta']?></textarea>
            </div>           
            <!------Ảnh sản phẩm---------->
            <div class="img_main">
              <h5>Ảnh sản phẩm</h5>
              <div id="xem_truoc"></div>
              <div class="khung_chua">
                <?php 
                  if($dt['anh_sp'] == ""){
                ?>
                 
                <?php 
                }else{
                ?>
                  <img src="../../images/<?=$dt['anh_sp']?>">
                <?php 
                }
                ?>
              </div>
              <input type="file" name="imgmain" id="img_file" onchange="review(event);" class="filestyle" >
            </div>
          <!------Ảnh sản phẩm cùng loại------>
          <form>
            <div class="img_cl">
              <h5>Ảnh sản phẩm cùng loại</h5>
              <input type="file" name="imgcl[]" id="img_files" onchange="reviews(event);" multiple="true" class="filestyle">
              <div id="xem_truocs"></div>
              <div class="khung_chua">
                  <?php 
                      foreach ($hinh_anh_lien_quan as $key => $img) {
                        if($img == ""){
                          $none = "none";
                        }
                  ?>
                    <div style="display: <?=$none?>" id="delete_<?=$key?>" class="baoboc">
                      <img src="../../images/<?=$img?>">
                      <i onclick="xoa(<?=$key?>)" title="xóa ảnh" class="fas fa-trash-alt"></i>
                    </div>
                  <?php 
                  }
                  ?>
              </div>
            </div>
          </form>
           <!-----------Giá sản phẩm-------->
           <div class="gia_sp">
             <p><b>Giá sản phẩm</b></p>
             <div class="row">
               <div class="col-md-6 col-sm-6 col-lg-6">
                 <span>Giá gốc</span><br>
                 <div class="input-group mb-3">
                  <input onfocusout="validate_gia_sp()" id="gia_goc" name="gia_goc" type="text" value="<?=number_format($dt['gia_goc'],0,'.',',')?>" class="form-control format" placeholder="0">
                  <div class="input-group-append">
                      <span style="height: 35px;" class="input-group-text gia_goc">VNĐ</span>
                  </div>
                </div>
                <span class="helper-text"></span>
               </div>
               <div class="col-md-6 col-sm-6 col-lg-6">
                 <span>Giá khuyến mại</span><br>
                 <div class="input-group mb-3">
                  <input name="gia_khuyen_mai" id="gia_khuyen_mai" value="<?=number_format($dt['gia_khuyen_mai'],0,'.',',')?>" type="text" class="form-control format" placeholder="0">
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
            <div class="trang_thai">
              <h5>Trạng thái</h5>
              <?php if($tt > 0){
              ?>
                <input readonly="true" type="radio" checked="true" value="1" name="tt"><span>Còn hàng</span><br>
              <?php 
              }else{
              ?>
                <input type="radio" checked="true" value="0" name="tt"><span>Hết hàng</span>
              <?php 
              }
              ?>
              
            </div>
          <!---------Thông tin chi tiết----------->
            <div class="tt_chi_tiet">
              <h5>Thông tin chi tiết</h5>
              <span>Màn hình</span><br>
              <input type="text" value="<?=$dt['man_hinh']?>" name="man_hinh"><br>
              <span>Camera trước</span><br>
              <input type="text" value="<?=$dt['camera_truoc']?>" name="camera_truoc"><br>
              <span>Camera sau</span><br>
              <input type="text" value="<?=$dt['camera_sau']?>" name="camera_sau"><br>
              <span>Ram</span><br>
              <input type="text" value="<?=$dt['ram']?>" name="ram"><br>
              <span>Bộ nhớ trong</span><br>
              <input type="text" value="<?=$dt['bo_nho_trong']?>" name="bo_nho_trong"><br>
              <span>CPU</span><br>
              <input type="text" value="<?=$dt['cpu']?>" name="cpu"><br>
              <span>GPU</span><br>
              <input type="text" value="<?=$dt['gpu']?>" name="gpu"><br>
              <span>Dung lượng pin</span><br>
              <input type="text" value="<?=$dt['dung_luong_pin']?>" name="dung_luong_pin"><br>
              <span>Hệ điều hành</span><br>
              <input type="text" value="<?=$dt['he_dieu_hanh']?>" name="he_dieu_hanh"><br>
            </div>
            <!--------Danh mục sản phẩm------>
            <div class="danh_muc">
             <?php 
                  if($ma_danh_muc == 1){
             ?>
                 <select name="danh_muc" id="danh_muc" class="form-control form-control-sm">
                  <option value="0">Chọn danh mục</option>
                  <option selected="true" value="1">Sản phẩm nổi bật</option>
                  <option value="2">Sản phẩm mới</option>
                </select>
             <?php 
              }else if($ma_danh_muc == 2){
             ?>
                <select name="danh_muc" id="danh_muc" class="form-control form-control-sm">
                  <option value="0">Chọn danh mục</option>
                  <option value="1">Sản phẩm nổi bật</option>
                  <option selected="true" value="2">Sản phẩm mới</option>
                  <
                </select>
             <?php 
              }
             ?>
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
                      $selected = "";
                      if($dt['hang'] == $h['ma_hang']){
                          $selected = "selected";
                      }
                ?>
                  <option <?=$selected?> value="<?=$h['ma_hang']?>"><?=$h['ten_hang']?></option>
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
      </form>
    </div>
    
      <?php 
      }else{
      ?>
          <img style="width: 100px;position: absolute; top: 26%;left: 54%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE42dkLZLRd76RPU8QrXKbJARoTozciPxzAzW4eg6SqJrGh5Cx&usqp=CAU">
          <h1 style="text-align: center;height: 68vh;padding: 200px 0px">KHÔNG TỒN TẠI TRONG CSDL</h1>
      <?php 
      }
      ?>
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
  CKEDITOR.replace('mo_ta');
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

<script type="text/javascript">
    function validate(){
      gia_g = $('#gia_goc').val();
      gia_r = gia_g.replace(/,/g,'');
      gia_c = parseInt(gia_r);
      gia_km = $('#gia_khuyen_mai').val();
      gia_km_r = gia_km.replace(/,/g,'');
      gia_km_c = parseInt(gia_km_r);
      danhmuc = $('#danh_muc').val();
      
      if(gia_c < gia_km_c){
        alert("Giá gốc phải lớn hơn giá khuyến mại");
        return false;
      }

      if(danhmuc == 0){
        alert("Bạn chưa chọn danh mục");
        return false;
      }
    }

  </script>

<!-----Xem truoc anh----->
<script type="text/javascript">
  function review(event){
  var files = document.getElementById('img_file').files;
  $('#xem_truoc').html("<p>Xem trước</p>");
  $('.img_main .khung_chua').html('<img src="" id="ad">');
  for(i=0;i<files.length;i++){
    $('.img_main .khung_chua').html('<img src="" id=" '+ i +'"> ');

    $('.img_main .khung_chua img:eq('+i+')').attr('src', URL.createObjectURL(event.target.files[i]));
  }
}
</script>


<script type="text/javascript">
  function reviews(event){
  var filess = document.getElementById('img_files').files;

  $('.img_cl #xem_truocs').html("<p>Xem trước</p>");

  for(j=0;j<filess.length;j++){
    $('.img_cl .khung_chua').append('<img src="" id="img">');
    $('.img_cl .khung_chua #img:eq('+j+')').attr('src',URL.createObjectURL(event.target.files[j]));
  }
}
</script>
<script type="text/javascript" src="validate.js"></script>

<!---Xoa hinh anh lien quan----->
<script type="text/javascript">
  function xoa(pt){
    $.ajax({
        type: "POST",
        dataType: 'text',
        url: "xulyxoanh.php",
        data: {'dl' : pt,},
        success: function(dl){
          $('#result').html(dl);
        }
      });
    $('#delete_'+pt).remove();
  }
</script>


</body>

</html>
