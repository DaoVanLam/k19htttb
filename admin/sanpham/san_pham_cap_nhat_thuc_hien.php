<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_POST['id'];
	$ten_san_pham = $_POST['txtTenSP'];
	$mo_ta = $_POST['txtMoTa'];
	$gia_ban = $_POST['txtGiaBan'];
	$so_luong = $_POST['txtSoLuong'];

	$sql = "UPDATE `tbl_San_Pham` SET `ten_san_pham` = '$ten_san_pham', `mo_ta` = '$mo_ta', `gia_ban` = $gia_ban, `so_luong` = $so_luong WHERE id = $id";
	$noidungsp = mysqli_query($ketnoi, $sql);

	header("location:quantrisanpham.php");
 ?>