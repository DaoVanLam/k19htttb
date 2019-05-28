<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tin tức</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>TIN TỨC</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>
	
	
	<hr>
		<?php 
			include("./config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_tin_tuc";
			$noidungtintuc = mysqli_query($ketnoi, $sql);

			while ($row = mysqli_fetch_array($noidungtintuc)) {
		 ?>		

	<div>
		<div style="clear:both;float: left; width: 260px;">
			<a href="tin_tuc_chi_tiet.php"><img src="./img/chien_luoc.png" width="250px" height="auto"></a>
		</div>

		<div style="float: left; width: 740px;">
			<h3><a href="tin_tuc_chi_tiet.php"><?php echo $row['tieu_de'] ?></a></h3>
			<p><?php echo $row['mo_ta'] ?></p>
		</div>
	</div>
	<?php } ?>
</body>
</html>