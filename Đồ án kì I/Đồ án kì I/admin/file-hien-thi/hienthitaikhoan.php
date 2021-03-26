<?php 
 include('connect.php');
 if(isset($_POST['thongke']) && $_POST['day'] != "" && $_POST['month'] != "" && $_POST['year'] != ""){
 	$day = $_POST['day'];
 	$month = $_POST['month'];
 	$year = $_POST['year'];
 	 $tai_khoan = "select * from tai_khoan_quan_tri where day(ngay_tao) = $day and month(ngay_tao) = $month and year(ngay_tao) = $year";
 }else{
 	 $tai_khoan = "select * from tai_khoan_quan_tri";
 }
 $sql_tk = mysqli_query($con,$tai_khoan);
?>

<?php 
	while($tk = mysqli_fetch_assoc($sql_tk)){
		$cap = $tk['level'];
		if($cap == 1){
			$cap = "Admin";
		}
		else if($cap > 1){
			$cap = "Thành viên";
		}
?>
	<tr>
		<td><?=$tk['user']?></td>   
		<td><?=$tk['email']?></td>   
		<td><?=$cap?></td>  
		<td>
			<a onclick="return confirm('Bạn có thực sự muốn xóa tài khoản này?')" href="xulyxoathanhvien.php?id=<?=$tk['id']?>" title="Xóa"><i style="margin-left: 15px;" class="fas fa-trash"></i></a>
			<button type="button" data-toggle="modal" data-target="#tkqt_<?=$tk['id']?>" style="border: none;background: none;"><i style="color: blue" class="fas fa-exchange-alt"></i></button>
		</td> 
	</tr>

<!-----Modal chuyen chuc nang tai khoan--->
<form method="post" action="CRUD-DT/xulythaydoiquyen.php">
<div class="modal fade" id="tkqt_<?=$tk['id']?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 style="font-weight: bold;">Thay đổi quyền tài khoản</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<input style="display: none;" type="text" value="<?=$tk['id']?>" name="id_tk">
	       <?php 
	       		if($tk['level'] == 1){
	       ?>
				<select name="cars" class="custom-select">
				  <option value="1" selected="true">Admin</option>
				  <option value="2">Thành viên</option>
				</select>
	       <?php 
	   		}else{
	       ?>
			<select name="cars" class="custom-select">
				  <option value="1">Admin</option>
				  <option value="2" selected="true">Thành viên</option>
			</select>
	       <?php 
	   		}
	       ?>
      </div>
      <div class="modal-footer">
        <button style="background: #b21d1d;color: #fff" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="gui" class="btn btn-primary">Thay đổi quyền</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
<?php 
}
?>