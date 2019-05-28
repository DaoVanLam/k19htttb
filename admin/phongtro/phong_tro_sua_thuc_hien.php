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
	<title>K18HTTTB | Thực hiện sửa phòng trọ</title>
</head>
<body>
	<?php 
		// Bước 1: Lấy ra các dữ liệu cần insert vào CSDL tbl_tin_tuc
		$phong_tro_id = $_POST["txtID"];
		$ten_phong_tro = $_POST["txtTenPhongTro"];
		$khu_vuc_id = $_POST["txtKhuVuc"];
		$gia_thue = $_POST["txtGiaThue"];
		$mo_ta = $_POST["txtMoTa"];
		$ghi_chu = $_POST["txtGhiChu"];

		// Lấy ra thông tin ảnh minh họa
	

		// Bước 2: Kết nối đến CSDL
        include("../config/dbconfig.php");
        $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

		// Bước 3: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_tin_tuc
		if ($anh_minh_hoa == NULL) {
			$sql = "
			UPDATE `tbl_phong_tro` 
			SET 
				`ten_phong_tro` = '".$ten_phong_tro ."', 
				`khu_vuc_id` = '".$khu_vuc_id ."',
				`gia_thue` = '".$gia_thue."',
				`mo_ta` = '".$mo_ta."', 
				`ghi_chu` = '".$ghi_chu."' 
			WHERE `phong_tro_id` = '".$phong_tro_id."'";		
		} else {
			$sql = "
			UPDATE `tbl_phong_tro` 
			SET 
				`ten_phong_tro` = '".$ten_phong_tro ."', 
				`khu_vuc_id` = '".$khu_vuc_id ."',
				`gia_thue` = '".$gia_thue."',
				`mo_ta` = '".$mo_ta."', 
				`ghi_chu` = '".$ghi_chu."', 
				 
			WHERE `phong_tro_id` = '".$phong_tro_id."'";		
		}

		// Bước 3: Thực thi câu lệnh SQL]
		mysqli_query($ket_noi, $sql);

		header("Location: phong_tro_quan_tri.php");
	;?>
	<h1>Vui mừng thông báo bạn đã sửa dữ liệu vào bảng Tin tức thành công!!!</h1>
	<p><a href="trang_quan_tri.php">Quay trở lại trang quản trị</a></p>
</body>
</html>