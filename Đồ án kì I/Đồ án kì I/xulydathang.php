<?php 
session_start();
ob_start();
	 use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
     include('connect.php');
	$email = $_POST['email'];
	$ten = $_POST['ten'];
	$sdt = $_POST['sdt'];
	$dia_chi = $_POST['dia_chi'];
	$gioi_tinh = $_POST['gt'];
	$arr = $_SESSION['cart_sum'];
	$_SESSION['ten_kh'] = $ten;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<h2>Xin Chào <?=$_SESSION['ten_kh']?></h2>
		<h3>Cảm ơn bạn đã đặt mua sản phẩm tại của hàng chúng tôi</h3>
		<p>Thông tin đơn hàng</p>
		<table border="1" cellpadding="5" style="border-collapse: collapse;">
			<tr>
				<th>Sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>
			<?php 
				foreach ($_SESSION['cart_sum'] as $id => $val) {
			?>
				<tr>
					<td valign="center">
					<img style="width: 50px" src="cid:test_<?=$id?>">
					</td>
					<td><?=$val['ten_dt']?></td>
					<td><?=number_format($val['gia'],0,',','.')?>đ</td>
					<td><?=$val['sl']?></td>
					<td><?=number_format($val['gia'] * $val['sl'],0,',','.')?>đ</td>
				</tr>
			<?php 
			}
			?>
			<tr>
				<td align="right" colspan="6"><b>Phí vận chuyển: 40.000đ</b></td>
			</tr>
			<tr>
				<td align="right" colspan="6"><b>Tổng chi phí: <?=number_format($_SESSION['sum']+40000,0,',','.')?>đ</b></td>
			</tr>
		</table>
		<?php $my_var = ob_get_clean(); ?>
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
            
            if (!isset($error)) {
                include 'library.php'; // include the library file
                require 'vendor/autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "ducmanhdv@gmail.com");
                    $mail->addAddress($_POST['email'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Xin chào " . $ten;    //Tiêu đề
                    $mail->Body =   $my_var;// Nội dung
                   	foreach ($_SESSION['cart_sum'] as $id => $val) {
                   		$anh = $val['anh_sp'];
                   		$mail->AddEmbeddedImage('images/'.$anh.'', 'test_'.$id.'');
                   	}
                    $mail->AltBody = $_POST['content']; //None HTML 
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
        }
            ?>


           
<?php

	$tong_gia = $_SESSION['sum'] + 40000;
	$ma_kh = $_SESSION['ma_kh'];
		$add = "insert into don_hang(ma_kh,sdt,dia_chi,ten,email,gioi_tinh,tong_gia)
				values($ma_kh,$sdt,'$dia_chi','$ten','$email',$gioi_tinh,$tong_gia)";
		mysqli_query($con,$add);
		$_SESSION['hd_email'] = $email;
		$_SESSION['hd_ten'] = $ten;
		$_SESSION['hd_sdt'] = $sdt;
		$_SESSION['hd_dia_chi'] = $dia_chi;
		$_SESSION['hd_gioi_tinh'] = $gioi_tinh;
		header('location: xulyct_dathang.php');	
?>