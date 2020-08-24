<?php  
  
  include 'functions.php';
  
  global $koneksi;

  if (isset($_POST['submit'])) 
  {
  
    if (tambahdatapetugas($_POST) > 0 ) 
    {
      // echo "<div class='alert alert-success' role='alert'>";
      // echo "<h4 class='alert-heading text-center'> Data berhasil ditambahkan </h4>";
      // echo "</div>";
      echo "<script>
              alert('Data berhasil ditambahkan');
              document.location.href = 'datapetugasutdpmi.php';
            </script>" ;
    }
      else
    {
      // echo "Data gagal ditambahkan";
      // echo "<br>";
      // echo mysqli_error($koneksi);
      echo "<script>
              alert('Data gagal ditambahkan');
              document.location.href = 'datapetugasutdpmi.php';
            </script>" ;
            
      echo mysqli_error($koneksi);
    }
  }
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
            <h1 class="m-0 text-dark">Tambah Petugas UTD PMI</h1>
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
        <div class="form-group">
          <label for="namappetugasutdpmi">Nama Petugas</label>
          <input type="text" class="form-control" id="namapetugasutdpmi" name="namapetugasutdpmi" placeholder="Masukkan Nama Lengkap" required>
        </div>
        <div class="form-group">
          <label for="tanggallahir">Tanggal Lahir</label>
          <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="golongandarah">Golongan Darah</label>
          <select class="form-control" id="golongandarah" name="golongandarah">
            <option value="A (+)">A (+)</option>
            <option value="B (+)">B (+)</option>
            <option value="AB (+)">AB (+)</option>
            <option value="O (+)">O (+)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="pendidikan">Pendidikan</label>
          <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" name="jabatan" id="jabatan" class="form-control" required>
        </div>
        
        <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Tambah Data</button>
        <a class="btn btn-danger" href="datapetugasutdpmi.php"><i class="fas fa-backward"></i> Kembali</a>
      </form>


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
