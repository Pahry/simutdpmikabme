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
        
        <form action="" method="POST">
          <div class="form-group row">
            <label for="namapasien" class="col-sm-2 col-form-label">Untuk Nama Pasien</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="namapasien" id="namapasien">
            </div>
          </div>

          <div class="form-group row">
            <label for="jenisjaminan" class="col-sm-2 col-form-label">Jenis Jaminan</label>
            <div class="col-sm-8">
              <select class="form-control" id="jenisjaminan">
                <option value="BPJS">BPJS</option>
                <option value="Asuransi">Asuransi</option>
                <option value="Umum">Umum</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="dokter" class="col-sm-2 col-form-label">Dokter yang Meminta</label>
            <div class="col-sm-8">
              <input type="text" name="dokter" id="dokter" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label for="zaal" class="col-sm-2 col-form-label">Zaal Perawatan</label>
            <div class="col-sm-8">
              <input type="text" name="zaal" id="zaal" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label for="jumlahkantong" class="col-sm-2 col-form-label">Jumlah Kantong</label>
            <div class="col-sm-8">
              <input type="text" name="jumlahkantong" id="jumlahkantong" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label for="tanggaldropping" class="col-sm-2 col-form-label">Tanggal Dropping</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tanggaldropping" id="tanggaldropping">
            </div>
          </div>

          <div class="form-group row">
            <label for="jamdropping" class="col-sm-2 col-form-label">Jam Dropping</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" name="jamdropping" id="jamdropping">
            </div>
          </div>

          <div class="form-group row">
            <label for="namapetugas" class="col-sm-2 col-form-label">Nama Petugas UTD PMI</label>
            <div class="col-sm-8">
              <select type="text" class="form-control" id="namapetugas" name="namapetugas">
                <option value=""></option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="namapetugasrs" class="col-sm-2 col-form-label">Nama Petugas RS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namapetugasrs" name="namapetugasrs">
            </div>
          </div>
          
          <button class="btn btn-success"><i class="fas fa-plus"></i> Tambah Dropping Darah</button>
          <a class="btn btn-danger" href="datadroppingselainbdrs.php"><i class="fas fa-backward"></i> Kembali</a>
        </form>

      </div> <!-- Tutup Container Fluid -->

    </section><!-- /.content -->
    
  </div><!-- /.content-wrapper -->
  
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
