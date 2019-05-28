<?php
    session_start();
    if (!isset($_SESSION['tai_khoan'])) {
        header("Location: dang_nhap.php");
    }
;?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>K18HTTTB | Thực hiện thêm mới Phòng Trọ</title>
</head>
<body>
	<?php 
		// Bước 1: Lấy ra các dữ liệu cần insert vào CSDL tbl_tin_tuc
		$ten_phong_tro= $_POST["txtTenPhongTro"];
		$khu_vuc_id = $_POST["txtKhuVuc"];
		$gia_thue= $_POST["txtGiaThue"];
		$mo_ta = $_POST["txtMoTa"];
		$ghi_chu = $_POST["txtGhiChu"];
		

		// Bước 2: Kết nối đến CSDL
        include("../config/dbconfig.php");
        $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

		// Bước 3: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_tin_tuc
		$sql = "
		INSERT INTO `tbl_phong_tro` (
			`phong_tro_id`, 
			`ten_phong_tro`, 
			`khu_vuc_id`,
			`gia_thue`,
			`mo_ta`, 
			`ghi_chu`) 
		VALUES (
			NULL, 
			'".$ten_phong_tro ."',
			'".$khu_vuc_id."', 
			'".$gia_thue."', 
			'".$mo_ta."', 
			'".$ghi_chu."')";
		echo $sql;

		// Bước 3: Thực thi câu lệnh SQL]
		mysqli_query($ket_noi, $sql);
	;?>
	<h1>Vui mừng thông báo Huyền đã chèn dữ liệu vào bảng Phòng Trọ thành công!!!</h1>
	<p><a href="trang_quan_tri.php">Quay trở lại trang quản trị</a></p>
</body>
</html>