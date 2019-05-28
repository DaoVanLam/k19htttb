<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quản trị liên hệ</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">

	<style>
		td{border: 1px solid #000};
	</style>
</head>
<body>
	<h1>QUẢN TRỊ LIÊN HỆ</h1>
	
	<p><a href="lien_he_them_moi.php"><img src="../images/add.png" style="width: 24px;" alt=""></a></p>
	<table style="border: 1px solid red">
		<tr>
			<td>STT</td>
			<td>Họ Tên</td>
			<td>Email</td>
			<td>Số điện thoại</td>
			<td>Nội dung</td>
			<td>Sửa</td>
			<td>Xóa</td>
		</tr>
	<hr>
		<?php 
			$ketnoi = mysqli_connect("localhost","root","","k19htttb");
			mysqli_set_charset($ketnoi, 'UTF8');

			$sql = "SELECT * FROM tbl_lien_he";
			$noidunglienhe = mysqli_query($ketnoi, $sql);

			$stt = 1;
			while ($row = mysqli_fetch_array($noidunglienhe)) {
		 ?>		

		<tr>
			<td><?= $stt++; ?></td>
			<td><?php echo $row['ho_va_ten']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['so_dien_thoai']; ?></td>
			<td><?php echo $row['noi_dung_phan_hoi']; ?></td>
			<td><a href="lien_he_sua.php?id=<?php echo $row['id'] ?>"><img src="../images/edit.png" style="width: 24px;" alt=""></a></td>
			<td><a href="lien_he_xoa.php?id=<?php echo $row['id'] ?>"><img src="../images/delete.jpg" style="width: 24px;" alt=""></a></td>
		</tr>
		
	
	<?php } ?>

	</table>
</body>
</html>