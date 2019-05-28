<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản trị tin tức</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">

</head>
<body>
	<h1>QUẢN TRỊ TIN TỨC</h1>
	
	<p><a href="../tin_tuc_them_moi.php"><img src="images/add.png" style="width: 24px;" alt=""></a></p>
	<table>
		<tr>
			<td>Tiêu đề</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</tr>
	<hr>
		<?php 
			include("../config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_tin_tuc";
			$noidungtintuc = mysqli_query($ketnoi, $sql);

			while ($row = mysqli_fetch_array($noidungtintuc)) {
		 ?>		

		<tr>
			<td><h3><a href="tin_tuc_chi_tiet.php"><?php echo $row['tieu_de'] ?></a></h3></td>
			<td><a href="tin_tuc_sua.php?id=<?php echo $row['id'] ?>"><img src="images/edit.png" style="width: 24px;" alt=""></a></td>
			<td><a href="tin_tuc_xoa.php?id=<?php echo $row['id'] ?>"><img src="images/delete.jpg" style="width: 24px;" alt=""></a></td>
		</tr>
		
	
	<?php } ?>

	</table>
</body>
</html>