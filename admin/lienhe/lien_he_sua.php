<html>
<head>
	<meta charset="utf-8">
	<title>Sản phẩm cập nhật</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>CẬP NHẬT SẢN PHẨM</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>
	<?php 
		$id = $_GET['id'];

		$ketnoi = mysqli_connect("localhost","root","","k19htttb");
		mysqli_set_charset($ketnoi, 'UTF8');

		$sql = "SELECT * FROM tbl_lien_he WHERE id = $id";
		$noidunglienhe = mysqli_query($ketnoi, $sql);

		$row = mysqli_fetch_array($noidunglienhe);
	?>
	<form name="frmSP" action="lien_he_cap_nhat_thuc_hien.php" method="post">
	<table>
		
		<tr>
			<td style="width: 150px">Họ Tên</td>
			<td>
				<input type="text" name="txtHoVaTen" style="width: 450px; height: 30px;" value="<?php echo $row['ho_va_ten'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Email</td>
			<td>
				<input type="text" name="txtEmail" style="width: 450px; height: 30px;" value="<?php echo $row['email'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Số điện thoại</td>
			<td>
				<input name="txtSoDienThoai" style="width: 450px; height: 30px;" value="<?php echo $row['so_dien_thoai'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Nội dung phản hồi</td>
			<td>
				<textarea name="txtNoiDung" style="width: 450px; height: 140px;" ><?php echo $row['noi_dung_phan_hoi'] ?></textarea>
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