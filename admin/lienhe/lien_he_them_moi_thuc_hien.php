<?php 
	$ketnoi = mysqli_connect("localhost","root","","k19htttb");
	mysqli_set_charset($ketnoi, 'UTF8');

	$ho_va_ten = $_POST['txtHoVaTen'];
	$email = $_POST['txtEmail'];
	$so_dien_thoai = $_POST['txtSoDienThoai'];
	$noi_dung_phan_hoi = $_POST['txtNoiDung'];

	$sql = "INSERT INTO `tbl_lien_he` (`ho_va_ten`,`email`,`so_dien_thoai`,`noi_dung_phan_hoi`) VALUES ('$ho_va_ten', '$email', '$so_dien_thoai', '$noi_dung_phan_hoi')";
	$noidunglienhe = mysqli_query($ketnoi, $sql);

	header("location:quantrilienhe.php");
 ?>