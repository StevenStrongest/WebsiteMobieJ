<script type="text/javascript">
  // Default Configuration
    $(document).ready(function() {
      toastr.options = {
        'closeButton': true,
        'debug': false,
        'newestOnTop': false,
        'progressBar': false,
        'positionClass': 'toast-top-right',
        'preventDuplicates': false,
        'showDuration': '1000',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut',
      }
    });
  // Toast Type

       <?php 
          if(isset($_SESSION['success'])){
            echo "toastr.success('Thêm thành công!');";
            unset($_SESSION['success']);
          }
       ?>

        <?php 
          if(isset($_SESSION['xoa_tc'])){
            echo "toastr.success('Bạn vừa xóa 1 sản phẩm!');";
            unset($_SESSION['xoa_tc']);
          }
       ?>

       <?php 
          if(isset($_SESSION['xoa_tt'])){
            echo "toastr.success('Bạn vừa xóa 1 tin tức!');";
            unset($_SESSION['xoa_tt']);
          }
       ?>

       <?php 
          if(isset($_SESSION['xoa_dh'])){
            echo "toastr.success('Bạn vừa xóa 1 đơn hàng!');";
            unset($_SESSION['xoa_dh']);
          }
       ?>


       <?php 
          if(isset($_SESSION['xoa_tb'])){
            echo "toastr.error('Xóa thất bại!');";
            unset($_SESSION['success']);
          }
       ?>

        <?php 
          if(isset($_SESSION['success_sua'])){
            echo "toastr.success('Cập nhật thành công');";
            unset($_SESSION['success_sua']);
          }
       ?>

       <?php 
          if(isset($_SESSION['thaydoi'])){
            echo "toastr.success('Đổi quyền thành công');";
            unset($_SESSION['thaydoi']);
          }
       ?>

       <?php 
          if(isset($_SESSION['xoa_tk'])){
            echo "toastr.success('Xóa thành công !');";
            unset($_SESSION['xoa_tk']);
          }
       ?>

       <?php 
          if(isset($_SESSION['number_tb'])){
            echo "toastr.error('Số lượng nhập vào phải lớn hơn 0');";
            unset($_SESSION['number_tb']);
          }
       ?>

       <?php 
          if(isset($_SESSION['val'])){
            echo "toastr.error('Giá trị nhập vào không được để trống');";
            unset($_SESSION['val']);
          }
       ?>

        <?php 
          if(isset($_SESSION['sai_mk'])){
            echo "toastr.error('Mật khẩu bạn nhập không tồn tại');";
            unset($_SESSION['sai_mk']);
          }
       ?>

       <?php 
          if(isset($_SESSION['sai_emial'])){
            echo "toastr.error('Email chưa được đăng ký');";
            unset($_SESSION['sai_emial']);
          }
       ?>

        <?php 
          if(isset($_SESSION['sai_email'])){
            echo "toastr.error('Email hoặc tên đăng nhập chưa được đăng ký');";
            unset($_SESSION['sai_email']);
          }
       ?>

       <?php 
          if(isset($_SESSION['sai_ma'])){
            echo "toastr.error('Mã xác nhận không chính xác');";
            unset($_SESSION['sai_ma']);
          }
       ?>

       <?php 
          if(isset($_SESSION['canh_bao'])){
            echo "toastr.warning('Xóa thất bại! Hiện tài khoản này đang hoạt động');";
            unset($_SESSION['canh_bao']);
          }
       ?>


        <?php 
          if(isset($_SESSION['doi_tt'])){
            echo "toastr.success('Thay đổi thành công');";
            unset($_SESSION['doi_tt']);
          }
       ?>


  // Toast Position
    $('#position').click(function(event) {
      var pos = $('input[name=position]:checked', '#positionForm').val();
      toastr.options.positionClass = "toast-" + pos;
      toastr.options.preventDuplicates = false;
      toastr.info('This sample position', 'Toast Position')
    });
  </script>