<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';

  global $koneksi;
  
  $pendonor   = tampilpendonor("SELECT pendonor.namapendonor,
              pendonor.goldapendonor, pendonor.nomorkantongpendonor, pendonor.hbpendonor 
              FROM pendonor");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include 'navbar.php'; ?>

  <?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Uji Saring</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
      <!-- /.container-fluid -->
      <div class="container-fluid">
        
      <form>

        <div class="form-group row">
          <label for="tanggalujisaring" class="col-sm-2 col-form-label">Tanggal Uji Saring</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tanggalujisaring" name="tanggalujisaring">
          </div>
        </div>

        <div class="form-group row" id="">
          <label for="nomorkantong" class="col-sm-2 col-form-label">Nomor Kantong Darah</label>
          <div class="col-sm-8">
            <input type="text" name="nomorkantongdarah" id="nomorkantongdarah" class="form-control" value="">
          </div>
        </div>

            <div class="form-group row" id="livesearch">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-8">
                <input type="text" name="nomorkantongdarah"  class="form-control" value="">
              </div>
            </div>


        <div class="form-group row">
          <label for="namapendonor" class="col-sm-2 col-form-label">Nama Pendonor</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namapendonor" name="namapendonor" value="">

          </div>
        </div>

        <div class="form-group row">
          <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-8">
              <select class="form-control" id="jeniskelamin">
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
        </div>

        <div class="form-group row">
          <label for="umur" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-8">
            <input type="number" name="umur" id="umur" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
          <div class="col-sm-8">
            <select class="form-control" id="golongandarah">
              <option>A (+)</option>
              <option>B (+)</option>
              <option>AB (+)</option>
              <option>O (+)</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="komponen" class="col-sm-2 col-form-label">Komponen</label>
          <div class="col-sm-8">
            <select class="form-control" id="komponen">
              <option>PRC</option>
              <option>TC</option>
              <option>WB</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="form-check form-check-inline mt-3">
            <strong class="mr-4">Crossmatching</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="cocok" value="cocok">
              <label class="form-check-label" for="cocok">Cocok</label>
          </div>

          <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tidakcocok" value="tidakcocok">
            <label class="form-check-label" for="tidakcocok">Tidak Cocok</label>
          </div>
        </div>

        <div class="form-group">
          <div class="form-check form-check-inline mt-3">
            <strong class="mr-4">Pemeriksaan HIV</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="negatifhiv" value="negatifhiv">
              <label class="form-check-label" for="negatifhiv">Negatif (-)</label>
          </div>

          <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="positifhiv" value="positifhiv">
            <label class="form-check-label" for="positifhiv">Positif (+)</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline mt-3">
            <strong class="mr-4">Pemeriksaan HCV</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="negatifhcv" value="negatifhcv">
              <label class="form-check-label" for="negatifhcv">Negatif (-)</label>
          </div>
          <div class="form-check form-check-inline ml-3 mb-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="positifhcv" value="positifhcv">
            <label class="form-check-label" for="positifhcv">Positif (+)</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <strong class="mr-2">Pemeriksaan HbSAg</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="negatifhbsag" value="negatifhbsag">
              <label class="form-check-label" for="negatifhbsag">Negatif (-)</label>
          </div>
          <div class="form-check form-check-inline ml-3 mb-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="positifhbsag" value="positifhbsag">
            <label class="form-check-label" for="positifhbsag">Positif (+)</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <strong>Pemeriksaan Syphilis</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="negatifsyphilis" value="negatifsyphilis">
              <label class="form-check-label" for="negatifsyphilis">Negatif (-)</label>
          </div>
          <div class="form-check form-check-inline ml-3 mb-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="positifsyphilis" value="positifsyphilis">
            <label class="form-check-label" for="positifsyphilis">Positif (+)</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <strong>Pemeriksaan Malaria</strong>
              <input class="form-check-input ml-5" type="radio" name="inlineRadioOptions" id="negatifmalaria" value="negatifmalaria">
              <label class="form-check-label" for="negatifmalaria">Negatif (-)</label>
          </div>
          <div class="form-check form-check-inline ml-3 mb-3">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="positifmalaria" value="positifmalaria">
            <label class="form-check-label" for="positifmalaria">Positif (+)</label>
          </div>
        </div>

        <div class="form-group">
          <label for="hb">HB</label>
          <input type="number" name="hb" id="hb" class="form-control">
        </div>

        <div class="form-group">
          <label for="namapetugas">Nama Petugas</label>
          <select class="form-control" id="namapetugas">
            <option>Petugas A</option>
            <option>Petugas B</option>
            <option>Petugas C</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nomortelepon">Nomor Telepon Pendonor</label>
          <input type="number" class="form-control" name="nomortelepon" id="nomortelepon">
        </div>
      <button class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</button>
      <a class="btn btn-danger" href="dataujisaring.php"><i class="fas fa-backward"></i> Kembali</a>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include 'footer.php'; ?>

  <?php include 'controlsidebar.php'; ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Live Search -->
<script src="livesearch.js"></script>
</body>
</html>
