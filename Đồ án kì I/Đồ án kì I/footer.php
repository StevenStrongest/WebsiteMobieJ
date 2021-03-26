	<div class="footer_tt">
			<div class="container">
				<div style="border-bottom: 1px solid #5a5151;padding-bottom: 25px" class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="logo_web">
							<a href=""><img src="https://bizweb.dktcdn.net/100/341/423/themes/700222/assets/logofooter.png?1564057446919"></a>
						</div>

						<div class="hotline">
							<div class="text_hotline">
								<p>Tổng đài hỗ trợ khách hàng</p>
								<a href="">
									<i class="fas fa-phone-square"></i>
									0971439061
								</a>
							</div>
							

							<div class="text_hotline">
								<p>Tổng đài tư vấn dịch vụ</p>
								<a href="">
									<i class="fas fa-phone-square"></i>
									0971439061
								</a>
							</div>

						</div>
					</div>

					<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
						<div class="title_hotline">
							<h4>THÔNG TIN</h4>
						</div>

						<div class="ds_hotline">
							<ul class="normal">
								<li>Trang chủ</li>
								<li>Quy chế hoạt động</li>
								<li>Chính sách bảo mật</li>
								<li>Cửa hàng online</li>
								<li>Tuyển dụng</li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="title_hotline">
							<h4>HỆ THỐNG CỬA HÀNG</h4>
						</div>

						<div class="ds_hotline">
							<ul class="stop">
								<li class="title_big">TRỤ SỞ</li>
								<li class="title_small"><span><i class="fas fa-bell"></i></span>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</li>
								<li class="title_big">HÀ NỘI</li>
								<li class="title_small"><span><i class="fas fa-bell"></i></span>Số 266 Đội Cấn, Quận Ba Đình, Hà Nội</li>
								<li class="title_big">TP. HỒ CHÍ MINH</li>
								<li class="title_small"><span><i class="fas fa-bell"></i></span>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="title_hotline">
							<h4>QUY ĐỊNH - CHÍNH SÁCH</h4>
						</div>

						<div class="ds_hotline">
							<ul class="normal">
								<li>Chính sách giao nhận</li>
								<li>Bảo mật thông tin</li>
								<li>Chính sách đổi trả</li>
								<li>Chế đọ bảo hành</li>
								<li>Chính sách thanh toán</li>
								<li>Câu hỏi thường gặp</li>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		<!------Auto complete------>

	<script type="text/javascript">
    $(function() {
      $("#tags").autocomplete({
        source: "autocomplete.php",
        minLength: 1,
        select: function(event, ui) {
          /*
          var url = ui.item.id;
          if(url != '') {
            location.href = '...' + url;
          }
          */
        },
        html: true, 
        open: function(event, ui) {
          $(".ui-autocomplete").css("z-index", 1000);
        }
      })
        .autocomplete( "instance" )._renderItem = function( ul, item ) {
        return $( "<li><div><img src='"+item.img+"'><span>"+item.value+"</span></div></li>" ).appendTo( ul );
      };
    });
  </script>

 

