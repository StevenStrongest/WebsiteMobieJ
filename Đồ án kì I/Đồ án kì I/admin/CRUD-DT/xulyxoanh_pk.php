<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>asdasd</title>
</head>
<body>
	<?php



  if(isset($_POST['dl'])){
    $id = $_POST['dl'];
    unset($_SESSION['hinh_anh_lien_quan_pk'][$id]);
  }

  echo "<pre>";
  print_r($_SESSION['hinh_anh_lien_quan_pk']);
 ?>

</body>
</html>