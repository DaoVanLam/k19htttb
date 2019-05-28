<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$ten_san_pham = $_POST['txtTenSP'];
	$mo_ta = $_POST['txtMoTa'];
	$gia_ban = $_POST['txtGiaBan'];
	$so_luong = $_POST['txtSoLuong'];

	$sql = "INSERT INTO `tbl_San_Pham` (`ten_san_pham`,`mo_ta`,`gia_ban`,`so_luong`) VALUES ('$ten_san_pham', '$mo_ta', $gia_ban, $so_luong)";
	$noidungsp = mysqli_query($ketnoi, $sql);

	header("location:quantrisanpham.php");
 ?>