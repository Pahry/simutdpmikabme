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
            <h1 class="m-0 text-dark">Dropping Darah</h1>
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
          <label for="nomorkantongdarah">Nomor Kantong Darah</label>
          <input type="text" class="form-control" id="nomorkantongdarah">
        </div>
        <div class="form-group">
          <label for="nomorberitaacara">Nomor Berita Acara</label>
          <input type="text" name="nomorberitaacara" class="form-control" id="nomorberitaacara">
        </div>
        <div class="form-group">
          <label for="tanggalpermintaan">Tanggal Dropping</label>
          <input type="date" class="form-control" id="tanggalpermintaan">
        </div>
        <div class="form-group">
          <label for="namapetugas">Nama Petugas</label>
          <input type="text" class="form-control" id="namapetugas">
        </div>
        <div class="form-group">
          <label for="namapengambildarah">Nama Pengambil Darah</label>
          <input type="text" class="form-control" id="namapengambildarah">
        </div>
        <div class="form-group">
          <label for="alamatpengambildarah">Alamat Pengambil Darah</label>
          <input type="text" class="form-control" id="alamatpengambildarah">
        </div>
        <div class="form-group">
          <label for="untuknamapasien">Untuk Nama Pasien</label>
          <input type="text" class="form-control" id="untuknamapasien">
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
          <label for="produk">Produk</label>
          <select class="form-control" id="produk">
            <option>PRC</option>
            <option>TC</option>
            <option>WB</option>
          </select>
        </div>
        <div class="form-group">
          <label for="volumekantongdarah">Volume Kantong Darah</label>
          <input type="text" name="volumekantongdarah" id="volumekantongdarah" class="form-control">
        </div>
        <div class="form-group">
          <label for="tanggalpenyadapan">Tanggal Penyadapan</label>
          <input type="date" class="form-control" id="tanggalpenyadapan">
        </div>
        <div class="form-group">
        <div class="form-group">
          <label for="tanggalpenyadapan">Tanggal Expired Darah</label>
          <input type="date" class="form-control" id="tanggalpenyadapan">
        </div>
        <div class="form-group">
          <label for="jeniskolf">Jenis Kolf</label>
          <select class="form-control" id="jeniskolf">
            <option>Single</option>
            <option>Double</option>
          </select>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text-area" name="keterangan" class="form-control" id="keterangan">
        </div>

      <button class="btn btn-success"><i class="fas fa-plus"></i> Tambah Dropping Darah</button>
      <a class="btn btn-danger" href="datadroppingdarah.php"><i class="fas fa-backward"></i> Kembali</a>

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
