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
	<title>K18HTTTB | Thực hiện xóa phòng trọ</title>
</head>
<body>
	<?php 
		// Bước 1: Lấy ra id của bản ghi cần xóa
		$id = $_GET["phong_tro_id"];

		// Bước 2: Kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "k18htttb");

		// Bước 3: Viết câu lệnh truy vấn thực thiện xóa dữ liệu trong bảng tbl_tin_tuc
		$sql = "
		DELETE FROM `tbl_phong_tro` 
		WHERE `phong_tro_id` = '".$id."'";

		// Bước 3: Thực thi câu lệnh SQL]
		mysqli_query($ket_noi, $sql);

		header("Location: phong_tro_quan_tri.php");
	;?>
	<h1>Vui mừng thông báo bạn đã xóa dữ liệu trong bảng Tin tức thành công!!!</h1>
	<p><a href="trang_quan_tri.php">Quay trở lại trang quản trị</a></p>
</body>
</html>