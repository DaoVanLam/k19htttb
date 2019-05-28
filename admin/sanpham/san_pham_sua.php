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

		$sql = "SELECT * FROM tbl_san_pham WHERE id = $id";
		$noidungsp = mysqli_query($ketnoi, $sql);

		$row = mysqli_fetch_array($noidungsp);
	?>
	<form name="frmSP" action="san_pham_cap_nhat_thuc_hien.php" method="post">
	<table>
		
		<tr>
			<td style="width: 150px">Tên sản phẩm</td>
			<td>
				<textarea name="txtTenSP" style="width: 450px; height: 140px;"><?php  echo $row['ten_san_pham'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Mô tả</td>
			<td>
				<textarea name="txtMoTa" style="width: 450px; height: 140px;"><?php  echo $row['mo_ta'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Giá bán</td>
			<td>
				<input name="txtGiaBan" style="width: 450px; height: 30px;" value="<?php  echo $row['gia_ban'] ?>">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Số lượng</td>
			<td>
				<input name="txtSoLuong" style="width: 450px; height: 30px;" value="<?php  echo $row['so_luong'] ?>">
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