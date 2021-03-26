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
        'hideDuration': '2000',
        'timeOut': '7000',
        'extendedTimeOut': '2000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut',
      }
    });
  // Toast Type

       <?php 
          if(isset($_SESSION['success'])){
            echo "toastr.success('Cảm ơn đã gửi phản hồi chúng tôi sẽ liên hệ lại với bạn');";
            unset($_SESSION['success']);
          }
       ?>

       <?php 
          if(isset($_SESSION['success_danhgia'])){
            echo "toastr.success('Cảm ơn bạn đã đánh giá sản phẩm của chúng tôi');";
            unset($_SESSION['success_danhgia']);
          }
       ?>

        <?php 
          if(isset($_SESSION['huy_danhgia'])){
            echo "toastr.success('Bạn đã hủy đánh giá');";
            unset($_SESSION['huy_danhgia']);
          }
       ?>

       <?php 
          if(isset($_SESSION['canhbao'])){
            echo "toastr.success('Giá trị nhập vào phải là số và phải lớn hơn 0');";
            unset($_SESSION['canhbao']);
          }
       ?>

       <?php 
          if(isset($_SESSION['dh_tb'])){
            echo "toastr.warning('Số lượng bạn nhập lớn hơn số lượng sản phẩm trong kho!')";
            unset($_SESSION['dh_tb']);
          }
       ?>

        <?php 
          if(isset($_SESSION['dang_ky'])){
            echo "toastr.success('Đăng ký thành công đăng nhập lại để kiểm tra!')";
            unset($_SESSION['dang_ky']);
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