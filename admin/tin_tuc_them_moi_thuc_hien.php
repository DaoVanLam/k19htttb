<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];
	$noi_dung = $_POST['txtNoiDung'];

	$sql = "INSERT INTO `tbl_tin_tuc`(`tieu_de`, `mo_ta`, `noi_dung`) VALUES ('$tieu_de','$mo_ta','$noi_dung')";

	$noidungtintuc = mysqli_query($ketnoi, $sql);

	header("location:quantritintuc.php");
 ?>