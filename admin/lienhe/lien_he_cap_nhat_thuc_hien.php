<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$id = $_POST['id'];
	$ho_va_ten = $_POST['txtHoVaTen'];
	$email = $_POST['txtEmail'];
	$so_dien_thoai = $_POST['txtSoDienThoai'];
	$noi_dung_phan_hoi = $_POST['txtNoiDung'];

	$sql = "UPDATE `tbl_lien_he` SET `ho_va_ten` = '$ho_va_ten', `email` = '$email', `so_dien_thoai` = '$so_dien_thoai', `noi_dung_phan_hoi` = '$noi_dung_phan_hoi' WHERE id = $id";
	
	$noidungsp = mysqli_query($ketnoi, $sql);

	header("location:quantrilienhe.php");
 ?>