<html>
<head>
	<meta charset="utf-8">
	<title>Tin tức thêm mới</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>Thêm mới TIN TỨC</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<form name="frmTinTuc" action="admin/tin_tuc_them_moi_thuc_hien.php" method="post">
	<table>
		<tr>
			<td style="width: 150px">Tiêu đề</td>
			<td>
				<input type="text" name="txtTieuDe" style="width: 450px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Mô tả</td>
			<td>
				<textarea name="txtMoTa" style="width: 450px; height: 140px;"></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Nội dung</td>
			<td>
				<textarea name="txtNoiDung" style="width: 450px; height: 140px;"></textarea>
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="submit" name="btnSubmit" value="Thêm mới">
			</td>
		</tr>
	</table>
	</form>


</body>
</html>