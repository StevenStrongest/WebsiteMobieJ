<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	if(isset($_POST['request'])){
		$email = $_POST['email'];
        $ten_dn = $_POST['tdn'];
		include('../connect.php');
		$query = "select * from tai_khoan_quan_tri where email = '$email' and user = '$ten_dn'";
		$sql = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($sql);
		$ktra = mysqli_num_rows($sql);
		if($ktra > 0){
			$ma = rand(1000,9999);
			$_SESSION['ma_xac_nhan'] = $ma;
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['level'] = $row['level'];

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
                    $mail->setFrom(SMTP_UNAME, $email);
                    $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Mã xác nhận của bạn là: " . $ma;    //Tiêu đề
                    $mail->Body =  "<h1>Mã xác nhập của bạn là: </h1>";// Nội dung
                    $mail->AltBody = $_POST['content']; //None HTML 
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }

            header('location: maxacnhan.php');
		}else{
			$_SESSION['sai_email'] = "sai email";
			header('location: quyenmatkhau.php');
		}
	}
?>