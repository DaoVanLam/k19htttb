<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>K18HTTTB | Phòng Trọ</title>
	<link rel="icon" href="./images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href=".\css\style.css">
</head>
<body>
	<div id="content" style="width: 950px; background-color: #E4E4E4; margin: 30px auto;">
		
		<?php 
		// Chèn Banner
		include("banner.php");

		// Chèn Menu
		include("menu.php");
		;?>

		<div id="mo_ta" style="padding: 30px; background-color: white;">
			<h1>PHÒNG TRỌ</h1>
			<?php
              // Bước 1: Kết nối đến CSDL
			  include("./config/dbconfig.php");
              $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

              // Bước 2: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_lien_he
              $sql = "
              	SELECT * 
              	FROM tbl_phong_tro
              	WHERE khu_vuc_id='2' 
              	ORDER BY phong_tro_id DESC
              	";
  
              //Bước 3: Thực thi câu lệnh SQL]
              $du_lieu = mysqli_query($ket_noi, $sql);

              //Bước 4: Trình bày dữ liệu leentragn Web
              while ($row = mysqli_fetch_array($du_lieu)) {
              ;?>
              	
					<div style="width: 600px; float: left;">
						<h3><a href="phong_tro_chi_tiet.php?id=<?php echo $row["id"];?>"><?php echo $row["ten_phong_tro"];?></a></h3>
						<p><?php echo $row["mo_ta"];?></p>
					</div>
				</div>
              <?php
              }
            ;?>
            <div style="clear: both;"></div>
		</div>
		
		<?php 
		// Chèn Footer
		include("footer.php");
		;?>
	</div>
</body>
</html>