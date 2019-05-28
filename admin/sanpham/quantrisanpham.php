<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản trị sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">

	<style>
		td{border: 1px solid #000};
	</style>
</head>
<body>
	<h1>QUẢN TRỊ SẢN PHẨM</h1>
	
	<p><a href="san_pham_them_moi.php"><img src="../images/add.png" style="width: 24px;" alt=""></a></p>
	<table style="border: 1px solid red">
		<tr>
			<td>STT</td>
			<td>Tên sản phẩm</td>
			<td>Giá bán</td>
			<td>Số lượng</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</tr>
	<hr>
		<?php 
			$ketnoi = mysqli_connect("localhost","root","","k19htttb");
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_san_pham";
			$noidungsp = mysqli_query($ketnoi, $sql);

			$stt = 1;
			while ($row = mysqli_fetch_array($noidungsp)) {
		 ?>		

		<tr>
			<td><?= $stt++; ?></td>
			<td><h3><a href="../../san_pham_chi_tiet.php"><?php echo $row['ten_san_pham'] ?></a></h3></td>
			<td><?php echo $row['gia_ban']; ?></td>
			<td><?php echo $row['so_luong']; ?></td>
			<td><a href="san_pham_sua.php?id=<?php echo $row['id'] ?>"><img src="../images/edit.png" style="width: 24px;" alt=""></a></td>
			<td><a href="san_pham_xoa.php?id=<?php echo $row['id'] ?>"><img src="../images/delete.jpg" style="width: 24px;" alt=""></a></td>
		</tr>
		
	
	<?php } ?>

	</table>
</body>
</html>