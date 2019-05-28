<?php
    session_start();
    if (!isset($_SESSION['tai_khoan'])) {
        header("Location: dang_nhap.php");
    }
;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>K19HTTTB | Trang quản trị</title>
  </head>

  <body class="nav-md">
    <h1>Trang quản trị</h1>
    <ul>
      <li><a href="tin_tuc_quan_tri.php">Quản trị tin tức</a></li>
      <li><a href="san_pham_quan_tri.php">Quản trị sản phẩm</a></li>
      <li><a href="lien_he_quan_tri.php">Quản trị liên hệ</a></li>
      <li><a href="dang_nhap.php">Quản trị đăng nhập</a></li>
    </ul>
    
  </body>
</html>
