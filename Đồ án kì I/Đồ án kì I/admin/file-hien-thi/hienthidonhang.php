<?php include('connect.php');?>
<?php 
    $tong = "select count(*) as tong from don_hang";
    $sql = mysqli_query($con,$tong);
    $doc_ban_ghi = mysqli_fetch_assoc($sql);
    $tong_ban_ghi = $doc_ban_ghi['tong'];
    $kichthuoctrang = 10;
    $tongsotrang = 0;
    if($tong_ban_ghi % $kichthuoctrang == 0){
      $tongsotrang = $tong_ban_ghi/$kichthuoctrang;
    }else{
      $tongsotrang = (int)($tong_ban_ghi/$kichthuoctrang) + 1;
    }

    if(!isset($_GET['tranghientai']) || $_GET['tranghientai'] == 1){
      $tranghientai = 1;
      $dongbatdau = 0;
    }else{
      $tranghientai = $_GET['tranghientai'];
      $dongbatdau = ($tranghientai -1) * $kichthuoctrang;
    }
  ?>

<?php 
	$dl = "select * from khach_hang inner join don_hang
			on don_hang.ma_kh = khach_hang.ma_kh limit $dongbatdau,$kichthuoctrang";
	$sql = mysqli_query($con,$dl);
?>

         <div class="container-fluid">
        <div class="ds_sp">
          <form>
            <table id="tb_tt" style="color: #000" class="table table-striped">
              <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Tổng tiền</th>
                  <th>Xem chi tiết</th>
                  <td>Chức năng</td>
                </tr>
              </thead>
              <tbody>
                  <?php
                  		while ($row = mysqli_fetch_assoc($sql)) {
                  			$ma_dh = $row['ma_dh'];
                        $tinh_trang_dh = $row['tinh_trang_dh'];
                        if($tinh_trang_dh == 1){
                          $background = 'background: red';
                          $trang_thai = "Đang vận chuyển";
                        }else if($tinh_trang_dh == 2){
                           $background = 'background: green';
                           $trang_thai = "Xác Nhận đơn hàng";
                        }else if($tinh_trang_dh == 3){
                          $background = 'background: #e35d0f';
                          $trang_thai = "Hủy đơn hàng";
                        }else if($tinh_trang_dh == 4){
                          $background = 'background: #4f836d';
                          $trang_thai = "Đã giao hàng";
                        }else if($tinh_trang_dh == ""){
                          $background = "background: black";
                          $trang_thai = "Chưa cập nhật";
                        }
                        $bien = 1;
                   ?>
						<tr>
		                    <td><?=$row['ma_dh']?></td>
		                    <td><?=$row['ten']?></td>
		                    <td><?=$row['email']?></td>
		                    <td><?=$row['sdt']?></td>
		                    <td><?=number_format($row['tong_gia'],0,',','.')?>đ</td>
		                    <td><button type="button" onclick="show(<?=$row['ma_dh']?>)" class="ht" id="show_<?=$row['ma_dh']?>"><i class="fas fa-plus-circle"></i></button></td>
                        <td><a onclick="return confirm('Bạn có thực sự muốn xóa đơn hàng này');" style="padding: 0px 30px" href="CRUD-DT/xulyxoadonhang.php?id=<?=$row['ma_dh']?>&tranghientai=<?=$tranghientai?>"><i class="fas fa-trash-alt"></i></a></td>
                  		</tr>
                  <tr>
                    <td colspan="6">   
                      <div id="tt_ct" class="tt_ct_<?=$row['ma_dh']?>">
                        <span>
                          <ul class="nav nav-tabs">
                            <li class="nav-item">
                              <a href="#" class="nav-link active">Xem chi tiết</a>
                            </li>
                          </ul>
                        </span>
                          <div style="padding: 30px 0px" class="nd">
                            <div class="row">
                              <div class="col-md-4 col-lg-4">
                                <span><b>Tài khoản: </b><?=$row['ten_dn']?></span><br><br>
                                <span><b>Ngày đặt: </b><?=$row['ngay_dat']?></span>
                              </div>
                              <div class="col-md-4 col-lg-4">
                                <span><b>Mã khách hàng: </b><?=$row['ma_kh']?></span><br><br>
                                <div class="dropdown">
                                  <span id="tt_c<?=$row['ma_dh']?>"><b>Tình trạng: </b> <span style="<?=$background?>;padding: 5px;color: #fff;font-weight: bold;"><?=$trang_thai?></span></span>
                                    <button style="padding: 4px 22px" type="button" class="btn btn-primary" data-toggle="dropdown">
                                     <i class="fas fa-chevron-down"></i>
                                    </button>
                                    <div style="width: 100px;" class="dropdown-menu">
                                      <a class="dropdown-item" onclick="change_tt(1,<?=$row['ma_dh']?>)" href="javascript:0">Đang vận chuyển</a>
                                      <a class="dropdown-item" onclick="change_tt(2,<?=$row['ma_dh']?>)" href="javascript:0">Xác nhận đơn hàng</a>
                                      <a class="dropdown-item" onclick="change_tt(3,<?=$row['ma_dh']?>)" href="javascript:0">Hủy đơn hàng</a>
                                       <a class="dropdown-item" onclick="change_tt(4,<?=$row['ma_dh']?>)" href="javascript:0">Đã giao hàng</a>  
                                    </div>
                                  </div>
                                  <p id="tb"></p>
                              </div>
                               <div class="col-md-4 col-lg-4">
                                <span><b>Hình thức: </b>Vận chuyển</span><br><br>
                                <span><b>Phí vận chuyển: </b> 40.000đ</span>
                              </div>
                            </div>
                            <table style="width: 100%;margin-top: 10px;">
                              <tr style="background: #4e4eff;color: #fff">
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Thành tiền</th>
                              </tr>

                              <?php 
                              		$ct_hd = "select * from ct_don_hang where ma_dh = $ma_dh";
                              		$re = mysqli_query($con,$ct_hd);
                              ?>
                             
                             <?php 
                             	while ($ct = mysqli_fetch_assoc($re)) {
                             		$tong = $ct['sl_dat'] * $ct['gia_ban'];
                             ?>
								        <tr style="background: #ddd">
	                                <td><?=$ct['ten_sp']?></td>
	                                <td><?=$ct['sl_dat']?></td>
	                                <td><?=number_format($ct['gia_ban'],0,',','.');?>đ</td>
	                                <td><?=number_format($tong,0,',','.');?>đ</td>
                              	</tr>
                            <?php 
                        	}
                            ?>
                            </table>
                          </div>
                      </div>
                  </td>
                  </tr>
                   <?php 
               		}
                   ?>
              </tbody>
             </table>
          </form>
        </div>
      </div>


      <script type="text/javascript">
        function change_tt(va,ma){
         $.post("doitrangthai.php",{tt: va, ma_dh: ma},function(data){
            $('#tt_c'+ma).html(data);
         });
          
        }
      </script>