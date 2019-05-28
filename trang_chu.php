<html>
<head>
	<meta charset="utf-8">
	<title><?php echo date("d/m/Y");?> | Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>

<body>
	<h1>TRANG CHỦ</h1>
	<?php 
		echo "<p>Xin chào các bạn. Đây là dòng code PHP đầu tiên của tớ.</p>";

		$thoi_gian = date("H:i:s");
		echo "<p>Bây giờ là: ".$thoi_gian."</p>";

		$ngay_thang = date("d/m/Y");
		echo "<p>Hôm nay là ngày ".$ngay_thang."</p>";

		print_r($thoi_gian."<br>");
		var_dump($thoi_gian);
	;?>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<h4 style="color: red; text-align: center; text-transform: uppercase;">Nội dung trang chủ</h4>

	<p>Học viện Ngân hàng chính công bố chuẩn đầu ra cho toàn bộ sinh viên chính quy Khóa 18. 100% sinh viên cần đạt chuẩn sử dụng Kỹ năng CNTT cơ bản. Riêng sinh viên Khoa HTTT QL cần đạt chuẩn Kỹ năng sử dụng CNTT nâng cao. Việc quy đổi tương chuẩn quốc tế được thực hiện theo quy định của HVNH.</p>

	<p align="center"><img src="./img/IMG_1520.JPG" width="700px" height="auto" style="padding: 100px 0px 50px 0px;"></p>

	<p>Học viện Ngân hàng chính công bố chuẩn đầu ra cho toàn bộ sinh viên chính quy Khóa 18. 100% sinh viên cần đạt chuẩn sử dụng Kỹ năng CNTT cơ bản. Riêng sinh viên Khoa HTTT QL cần đạt chuẩn Kỹ năng sử dụng CNTT nâng cao. Việc quy đổi tương chuẩn quốc tế được thực hiện theo quy định của HVNH.</p>

	<p>Học viện Ngân hàng chính công bố chuẩn đầu ra cho toàn bộ sinh viên chính quy Khóa 18. 100% sinh viên cần đạt chuẩn sử dụng Kỹ năng CNTT cơ bản. Riêng sinh viên Khoa HTTT QL cần đạt chuẩn Kỹ năng sử dụng CNTT nâng cao. Việc quy đổi tương chuẩn quốc tế được thực hiện theo quy định của HVNH.</p>

	<p>Học viện Ngân hàng chính công bố chuẩn đầu ra cho toàn bộ sinh viên chính quy Khóa 18. 100% sinh viên cần đạt chuẩn sử dụng Kỹ năng CNTT cơ bản. Riêng sinh viên Khoa HTTT QL cần đạt chuẩn Kỹ năng sử dụng CNTT nâng cao. Việc quy đổi tương chuẩn quốc tế được thực hiện theo quy định của HVNH.</p>
</body>
</html>