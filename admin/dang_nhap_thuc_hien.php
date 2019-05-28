<?php
      // Bước 1: Lấy ra các dữ liệu cần insert vào CSDL tbl_tin_tuc
      $username = $_POST["txtUsername"];
      $password = $_POST["txtPassword"];

      // Bước 1: Kết nối đến CSDL
      include("../config/dbconfig.php");
      $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

      // Bước 2: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_lien_he
      $sql = "
        SELECT * 
        FROM tbl_nguoi_dung
        WHERE tai_khoan = '".$username."' AND mat_khau = '".$password."'
        ";

        //Bước 3: Thực thi câu lệnh SQL]
        $du_lieu = mysqli_query($ket_noi, $sql);
        $so_luong = mysqli_num_rows($du_lieu);

        if($so_luong == 0) {
            header("Location: dang_nhap.php");
        } else {
            session_start();

            $_SESSION['tai_khoan'] = $username;
            $_SESSION['quyen_han'] = '1';

            header("Location: trang_quan_tri.php");
        }
;?>