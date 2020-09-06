<?php  
  
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
  
  include 'functions.php';

  $idpetugasutdpmi = $_GET['id'];
 
  $ptgs = tampilpetugas("SELECT * FROM petugasutdpmi WHERE idpetugasutdpmi = $idpetugasutdpmi")[0];

  // Cek apakah tombol submit sudah diklik atau belum
  if ( isset($_POST["submit"])) 
  {   
    // jalankan fungsi ubah
    // cek apakah data berhasil diubah atau tidak
    if (ubahpetugasutdpmi($_POST) > 0 ) 
    {
      echo "<script>
              alert('Data berhasil diubah');
              document.location.href = 'datapetugasutdpmi.php';
            </script>" ;
    }else
    {
      echo "<script>
              alert('Data gagal diubah');
              document.location.href = 'datapetugasutdpmi.php';
            </script>" ;
    }
  }



?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI PD UTD PMI KAB. MUARA ENIM</title>
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
            <h1 class="m-0 text-dark">Ubah Data Petugas UTD PMI</h1>
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
        
      <form action="" method="post">
      
        <div class="form-group">  
          <input type="hidden" name="idpetugasutdpmi" value="<?php echo $ptgs['idpetugasutdpmi']; ?>">
        </div>

        <div class="form-group row">
          <label for="namappetugasutdpmi" class="col-sm-2 col-form-label">Nama Petugas</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namapetugasutdpmi" name="namapetugasutdpmi" placeholder="Masukkan Nama Lengkap" value="<?php echo $ptgs['namapetugasutdpmi']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <input type="date" name="tanggallahir" id="tanggallahir" class="form-control" value="<?php echo $ptgs['tanggallahirpetugasutdpmi']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
          <div class="col-sm-8">
            <select class="form-control" id="golongandarah" name="golongandarah">
              <option value="A (+)" <?php if($ptgs['goldapetugasutdpmi'] == "A (+)")  echo "selected" ?>>A (+)</option>
              <option value="B (+)" <?php if($ptgs['goldapetugasutdpmi'] == "B (+)")  echo "selected" ?>>B (+)</option>
              <option value="AB (+)"<?php if($ptgs['goldapetugasutdpmi'] == "AB (+)") echo "selected" ?>>AB (+)</option>
              <option value="O (+)" <?php if($ptgs['goldapetugasutdpmi'] == "O (+)")  echo "selected" ?>>O (+)</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
          <div class="col-sm-8">
            <input type="text" name="pendidikan" id="pendidikan" class="form-control" value="<?php echo $ptgs['pendidikanpetugasutdpmi']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-8">
            <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $ptgs['jabatanpetugasutdpmi']; ?>" required>
          </div>
        </div>
        
      <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Data</button>
      <a class="btn btn-danger" href="datapetugasutdpmi.php"><i class="fas fa-backward"></i> Kembali</a>


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
