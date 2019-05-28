<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_POST['id'];
	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];
	$noi_dung = $_POST['txtNoiDung'];

	$sql = "UPDATE `tbl_tin_tuc` SET `tieu_de` = '$tieu_de', `mo_ta` = '$mo_ta', `noi_dung` = '$noi_dung' WHERE id = $id";
	$noidungtintuc = mysqli_query($ketnoi, $sql);

	header("location:quantritintuc.php");
 ?>