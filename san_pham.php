<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>SẢN PHẨM</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<h3 style="color: red; text-align: center; text-transform: uppercase;">DANH SÁCH SẢN PHẨM</h3>

	<div>
		<?php 
			include("./config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_san_pham";
			$noidungtintuc = mysqli_query($ketnoi, $sql);

			while ($row = mysqli_fetch_array($noidungtintuc)) {
		 ?>	
		<div style="float: left; width: 210px; height: 310px;">
			<a href="san_pham_chi_tiet.php"><img src="./img/xsmax.jpg" width="200px" height="auto"></a>
			<h3><a href="san_pham_chi_tiet.php"><?php echo $row['ten_san_pham'] ?></a></h3>
			<p>Giá bán: <font color="red"><?php echo $row['gia_ban'] ?></font></p>
		</div>
		<?php } ?>
	</div>
</body>
</html>