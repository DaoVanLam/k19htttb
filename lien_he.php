<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liên hệ</title>
	<link rel="stylesheet" type="text/css" href="./css/phongcach.css">
</head>
<body>
	<h1>LIÊN HỆ</h1>
	
	<hr>
		<h4><a href="trang_chu.php">Trang chủ</a> | <a href="gioi_thieu.php">Giới thiệu</a> | <a href="tin_tuc.php">Tin tức</a> | <a href="san_pham.php">Sản phẩm</a> | <a href="lien_he.php">Liên hệ</a></h4>
	<hr>

	<ul>
		<li>Công ty TNHH một thành viên ABC</li>
		<li><b>Địa chỉ:</b> 9999 Chùa Bộc, Đống Đa, Hà Nội, Việt Nam</li>
		<li><i>Điện thoại:</i> <font color="red">0989.999999</font></li>
		<li><b><i>Email:</i></b> contact@abc.com.vn</li>
		<li><b><u>Website:</u></b> http://abc.com.vn</li>
	</ul>

	<ol>
		<li>Công ty TNHH một thành viên ABC</li>
		<li><b>Địa chỉ:</b> 9999 Chùa Bộc, Đống Đa, Hà Nội, Việt Nam</li>
		<li><i>Điện thoại:</i> <font color="red">0989.999999</font></li>
		<li><b><i>Email:</i></b> contact@abc.com.vn</li>
		<li><b><u>Website:</u></b> http://abc.com.vn</li>
	</ol>

	<hr>

	<h1 style="text-align: center;">GỬI PHẢN HỒI</h1>
	<form action="phan_hoi.php" method="post">
	<table>
		<tr>
			<td style="width: 150px">Họ và tên</td>
			<td>
				<input type="text" name="txtHoVaTen" style="width: 200px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Email</td>
			<td>
				<input type="text" name="txtEmail" style="width: 200px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Số điện thoại</td>
			<td>
				<input type="text" name="txtSoDienThoai" style="width: 200px">
			</td>
		</tr>
		<tr>
			<td style="width: 150px">Nội dung phản hồi</td>
			<td>
				<textarea id="phanhoi" name="txtNoiDungPhanHoi" style="width: 450px; height: 140px;"></textarea>
			</td>
		</tr>
		<tr>
			<td  colspan="2" style="text-align: center;">
				<input type="submit" name="btnSubmit" value="Gửi phản hồi" onclick="return kiemtrahople()">

				<button type="button" onclick="document.getElementById('phanhoi').innerHTML='ĐÃ HỦY'">Hủy</button>

				<button type="button" onclick="huylienhe()">Hủy theo cách mới</button>
			</td>
		</tr>
	</table>
	</form>

	<script type="text/javascript">
		/*
		- Người viết: Nguyễn Văn Tèo
		- Ngày viết: 11/2/2019
		- Mục đích của đoạn code: TEST thử tính năng ABC
		*/
		function kiemtrahople() {
			var hoten = document.getElementsByName("txtHoVaTen")[0].value;
			var dienthoai = document.getElementsByName("txtSoDienThoai")[0].value;
			var email = document.getElementsByName("txtEmail")[0].value;
			var noidung = document.getElementsByName("txtNoiDungPhanHoi")[0].value;

			if(hoten=="" || dienthoai=="" || email=="" || noidung =="") {
				window.alert("Dữ liệu phản hồi nhập chưa đầy đủ. Vui lòng nhập lại");

				return false;
			} else {
				window.alert("Chúng tôi đã tiếp nhận thông tin phản hồi. Chúng tôi sẽ sớm liên hệ với bạn.");

				return true;
			}
		}

		function huylienhe() {				
			document.getElementById('phanhoi').innerHTML='ĐÃ HỦY';

			window.alert("Đã hủy yêu cầu phản hồi của bạn.");

			// document.write("TEST THỬ CÁI");

			// console.log("TEST thử theo cách ẩn danh");
		}
	</script>
</body>
</html>