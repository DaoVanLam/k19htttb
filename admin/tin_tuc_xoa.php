<?php 
	include("../config/db_config.php");
	$ketnoi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_GET['id'];

	$sql = "DELETE FROM `tbl_tin_tuc` WHERE id = $id";

	$noidungtintuc = mysqli_query($ketnoi, $sql);

	header("location:quantritintuc.php");
 ?>