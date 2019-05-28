<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_GET['id'];

	$sql = "DELETE FROM `tbl_san_pham` WHERE id = $id";

	$noidungsp = mysqli_query($ketnoi, $sql);

	header("location:quantrisanpham.php");
 ?>