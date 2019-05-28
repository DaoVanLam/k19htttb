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
  <script src="../js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
          <h1>THÊM PHÒNG TRỌ MỚI</h1>
          <form method="post" action="phong_tro_them_moi_thuc_hien.php" enctype="multipart/form-data">


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Phòng Trọ <span class="required">*</span></label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" name="txtTenPhongTro">
              </div>
            </div>
            <br><br><br>


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Khu Vực</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <select name="txtKhuVuc">
                  <?php
                      // Bước 1: Kết nối đến CSDL
                  include("../config/dbconfig.php");
                  $ket_noi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

                    // Bước 2: Viết câu lệnh truy vấn thực thiện chèn dữ liệu vào bảng tbl_lien_he
                  $sql = "
                  SELECT * 
                  FROM tbl_khu_vuc
                  ";

                      //Bước 3: Thực thi câu lệnh SQL]
                  $du_lieu = mysqli_query($ket_noi, $sql);

                      //Bước 4: Trình bày dữ liệu leentragn Web
                  while ($row = mysqli_fetch_array($du_lieu)) {
                    ;?>
                    <option value="<?php echo $row["khu_vuc_id"];?>"><?php echo $row["ten_khu_vuc"];?></option>
                    <?php };?>
                  </select>
                </div>
              </div>
              <br><br><br>
            

              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Giá Thuê</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="txtGiaThue">
                </div>
              </div>
              <br><br><br><br>
             



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="txtMoTa" class="form-control"></textarea>
                </div>
              </div>
              <br><br><br><br>
             


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi chú</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="txtGhiChu" class="form-control"></textarea>
                </div>
              </div>
              <br><br><br><br>
             
              
              <div class="form-group" style="float: right;">
                <button type="submit" name="submit">Thêm phòng trọ mới</button>
              </div>
              <br><br><br>
            </div>
          </form>
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
