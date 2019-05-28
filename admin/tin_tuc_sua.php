<html>
<head>
	<meta charset="utf-8">
	<title>Tin tức thêm mới</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>CẬP NHẬT TIN TỨC</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>
	<?php 
		$id = $_GET['id'];

		include("../config/db_config.php");
			$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		mysqli_set_charset($ketnoi, 'UTF8');

		$sql = "SELECT * FROM tbl_tin_tuc WHERE id = $id";
		$noidungtintuc = mysqli_query($ketnoi, $sql);

		$row = mysqli_fetch_array($noidungtintuc);
	?>
	<form name="frmTinTuc" action="tin_tuc_cap_nhat_thuc_hien.php" method="post">
	<table>
		
		<tr>
			<td style="width: 150px">Tiêu đề</td>
			<td>
				<input type="text" name="txtTieuDe" style="width: 450px" value="<?php  echo $row['tieu_de'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Mô tả</td>
			<td>
				<textarea name="txtMoTa" style="width: 450px; height: 140px;"><?php  echo $row['mo_ta'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Nội dung</td>
			<td>
				<textarea name="txtNoiDung" style="width: 450px; height: 140px;"><?php  echo $row['noi_dung'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="hidden" value="<?php  echo $id ?>" name="id">
				<input type="submit" name="btnSubmit" value="Cập nhật">
			</td>
		</tr>
	</table>
	</form>


</body>
</html>