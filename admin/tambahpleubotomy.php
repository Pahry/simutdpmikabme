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
            <h1 class="m-0 text-dark">Tambah Pleubotomy</h1>
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
        <div class="form-group">
          <label for="tempatdonordarah">Tempat Donor Darah</label>
          <input type="text" class="form-control" id="tempatdonordarah" name="tempatdonordarah">
        </div>
        <div class="form-group">
          <label for="namapendonor">Nama Pendonor</label>
          <input type="text" class="form-control" id="namapendonor" placeholder="Masukkan Nama Lengkap Pendonor">
        </div>
        <div class="form-group">
          <label for="tanggallahir">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggallahir">
        </div>
        <div class="form-group">
          <label for="umur">Umur</label>
          <input type="number" class="form-control" id="umur" min="17" max="60" placeholder="17-60 tahun">
        </div>
        <div class="form-group">
          <label for="jk">Jenis Kelamin</label>
          <select class="form-control" id="jk">
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="golongandarah">Golongan Darah</label>
          <select class="form-control" id="golongandarah">
            <option>A</option>
            <option>B</option>
            <option>AB</option>
            <option>O</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nomortelepon">Nomor Telepon</label>
          <input type="text" class="form-control" name="nomortelepon" id="nomortelepon">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="donorke">Donor Ke</label>
          <input type="number" class="form-control" id="donorke">
        </div>
        
        <h1 class="mt-3 text-dark">Data Petugas Aftap</h1>
        <div class="form-group">
          <label for="namapetugasaftap">Nama Petugas Aftap</label>
          <select class="form-control" id="namapetugasaftap">
            <option>Petugas A</option>
            <option>Petugas B</option>
            <option>Petugas C</option>
            <option>Petugas D</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sebanyak">Sebanyak</label>
          <select class="form-control" id="sebanyak">
            <option>250 cc</option>
            <option>350 cc</option>
            <option>450 cc</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nomorkantong">Nomor Kantong</label>
          <input type="text" name="nomorkantong" class="form-control" id="nomorkantong">
        </div>
      </form>
      <button class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data Pendonor</button>
      <a class="btn btn-danger" href="datapendonor.php"><i class="fas fa-backward"></i> Kembali</a>

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
</body>
</html>
