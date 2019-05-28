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

    <title>K18HTTTB | Trang quản trị</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php
        include("top.php");
        ;?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <h1>QUẢN TRỊ PHÒNG TRỌ</h1>
              <div>
                <p style="text-align: right;"><a href="san_pham_them_moi.php">Thêm mới <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></p>
                <hr>
                <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tên Phòng Trọ</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Bước 1: Kết nối đến CSDL
                    include("../config/dbconfig.php");
                    $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

                    // Bước 2: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_lien_he
                    $sql = "
                      SELECT * 
                      FROM tbl_phong_tro
                      ORDER BY phong_tro_id DESC
                      ";
        
                      //Bước 3: Thực thi câu lệnh SQL]
                      $du_lieu = mysqli_query($ket_noi, $sql);

                      //Bước 4: Trình bày dữ liệu leentragn Web
                      $i=0;
                      while ($row = mysqli_fetch_array($du_lieu)) {
                      $i++;
                      ;?>
                      <tr>
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row["ten_phong_tro"];?></td>
                        <td><a href="phong_tro_sua.php?phong_tro_id=<?php echo $row["phong_tro_id"];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                        <td><a href="phong_tro_xoa.php?phong_tro_id=<?php echo $row["phong_tro_id"];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                      </tr>
                      <?php
                      }
                      ;?>
                  </table>
              </div>
          </div>
        </div>
        <!-- /page content -->

        <?php 
          include("bottom.php");
        ;?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
