<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng nhập hệ thống</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>ĐĂNG NHẬP HỆ THỐNG</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<h1 style="text-align: center;">ĐĂNG NHẬP HỆ THỐNG</h1>

	<form action="trang_quan_tri.php" method="post">
	<table style="text-align: center;">
		<tr>
			<td style="width: 100px">Username</td>
			<td>
				<input type="text" name="txtUserName" style="width: 200px">
			</td>
		</tr>
		<tr>
			<td style="width: 100px">Password</td>
			<td>
				<input type="password" name="txtPassword" style="width: 200px">
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="submit" name="btnSubmit" value="Đăng nhập">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>