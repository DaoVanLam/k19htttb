<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_GET['id'];

	$sql = "DELETE FROM `tbl_lien_he` WHERE id = $id";

	$noidungsp = mysqli_query($ketnoi, $sql);

	header("location:quantrilienhe.php");
 ?>