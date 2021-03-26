<?php 
 include('connect.php');
 
 if(isset($_POST['thongke'])){
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $tai_khoan = "select * from khach_hang where day(ngay_lap) = $day and MONTH(ngay_lap) = $month and year(ngay_lap) = $year";
    }else{
        $tai_khoan = "select * from khach_hang";
    } 
    $sql_tk = mysqli_query($con,$tai_khoan); 
?>

<?php 
	while($tk = mysqli_fetch_assoc($sql_tk)){
		$ma_kh = $tk['ma_kh'];
	$sodonhang = "select * from don_hang where ma_kh = $ma_kh";
	$sql = mysqli_query($con,$sodonhang);
	$tongsodon = mysqli_num_rows($sql);
	$sql1 = mysqli_query($con,$sodonhang);
	$sql2 = mysqli_query($con,$sodonhang);

		
?>
	<tr>
		<td><?=$tk['ma_kh']?></td>   
		<td><?=$tk['ten_dn']?></td>   
		<td><?=$tk['email']?></td>  
		<td><?=$tk['ten_kh']?></td>  
		<td><?=$tongsodon?></td>
		<td><button type="button" data-toggle="modal" data-target="#hd_<?=$ma_kh?>" class="ht"><i class="fas fa-eye"></i></button></td>
	</tr>

<div class="modal fade hd" id="hd_<?=$ma_kh?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h6>Chi tiết đặt hàng</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
    	<div class="row">
    		<div class="col-md-4 col-lg-4">
    			<p><b>Mã hóa đơn</b></p>
    			<ul>
    				<?php 
    					while ($ct = mysqli_fetch_assoc($sql)) {
    				?>
						<li  style="height: 50px;margin: 5px 0px"><?=$ct['ma_dh']?></li>
                        <hr>
    				<?php 
    				}
    				?>
    			</ul>
    		</div>
    		<div class="col-md-4 col-lg-4">
    			<p><b>Tên khách hàng</b></p>
    			<ul>
    				<?php 
    					while ($ct = mysqli_fetch_assoc($sql1)) {
    				?>
						<li style="height: 50px;margin: 5px 0px"><?=$ct['ten']?></li>
                        <hr>
    				<?php 
    				}
    				?>
    			</ul>
    		</div>
    		<div class="col-md-4 col-lg-4">
    			<p><b>Thời gian đặt hàng</b></p>
    			<ul>
    				<?php 
    					while ($ct = mysqli_fetch_assoc($sql2)) {
    				?>
						<li  style="height: 50px;margin: 5px 0px"><?=$ct['ngay_dat']?></li>  
                        <hr>             
    				<?php 
    				}
    				?>
    			</ul>
    		</div>
    	</div>
      </div>
      <div class="modal-footer">
        <button style="background: #9494e1;color: #fff;font-weight: bold;" type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php 
}
?>