<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
include("connect.php");
$select = "select * from thong_tin_dien_thoai";
$recordset = mysqli_query($con,$select);
$re = mysqli_query($con,$select);

?>

<?php 
	while($row = mysqli_fetch_assoc($recordset)){
		$arr[] = $row;
	}

	echo "<pre>";
	print_r($arr);
?>




</body>
</html>