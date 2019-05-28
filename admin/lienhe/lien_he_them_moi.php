<html>
<head>
	<meta charset="utf-8">
	<title>Liên hệ thêm mới</title>
	<link rel="stylesheet" type="text/css" href="../../css/phongcach.css">
</head>

<body>
	<h1>THÊM MỚI LIÊN HỆ</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<form name="frmSP" action="lien_he_them_moi_thuc_hien.php" method="post">
	<table>
		
		<tr>
			<td style="width: 150px">Họ Tên</td>
			<td>
				<input type="text" name="txtHoVaTen" style="width: 450px; height: 30px;">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Email</td>
			<td>
				<input type="text" name="txtEmail" style="width: 450px; height: 30px;">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Số điện thoại</td>
			<td>
				<input name="txtSoDienThoai" style="width: 450px; height: 30px;">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Nội dung phản hồi</td>
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