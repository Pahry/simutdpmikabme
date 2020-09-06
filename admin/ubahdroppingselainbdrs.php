<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
  
  include 'functions.php';

  $id         = $_GET['id'];
  $pasien     = tampilpasien("SELECT idpasien,kodepasien FROM pasien");
  $petugas    = tampilpetugas("SELECT idpetugasutdpmi,namapetugasutdpmi FROM petugasutdpmi");
  $dropping   = tampildroppingselainbdrs("SELECT * FROM droppingselainbdrs WHERE iddropping=$id")[0];


  if (isset($_POST['submit'])) 
  {
    if(ubahdroppingselainbdrs($_POST) > 0)
    {
      echo  "<script>
              alert('Data Berhasil Diubah');
              document.location.href = 'datadroppingselainbdrs.php';
            </script>";
      
    }else
    {
      echo  "<script>
              alert('Data Gagal Diubah');
              document.location.href = 'datadroppingselainbdrs.php';
            </script>";
      echo mysqli_error($koneksi);
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
            <h1 class="m-0 text-dark">Ubah Data Dropping Darah Selain BDRS</h1>
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

          <input type="hidden" name="iddropping" value="<?php echo $dropping['iddropping'] ?>">

          <div class="form-group row">
            <label for="idpasien" class="col-sm-2 col-form-label">Kode Pasien</label>
            <div class="col-sm-8">
              <select name="idpasien" id="idpasien" class="form-control" required>
                <?php foreach ($pasien as $psn): ?>
                    <option value="<?php echo $psn['idpasien']; ?>" <?php if($dropping['idpasien']==$psn['idpasien']) echo'selected'; ?>>
                      <?php echo $psn['kodepasien']; ?>
                    </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="jenisjaminan" class="col-sm-2 col-form-label">Jenis Jaminan</label>
            <div class="col-sm-8">
              <select class="form-control" id="jenisjaminan" name="jenisjaminan" required>
                <option value="BPJS" <?php if($dropping['jenisjaminandropping']=='BPJS')echo'selected' ?>>BPJS</option>
                <option value="Asuransi" <?php if($dropping['jenisjaminandropping']=='Asuransi')echo'selected' ?>>Asuransi</option>
                <option value="Umum" <?php if($dropping['jenisjaminandropping']=='Umum')echo'selected' ?>>Umum</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="dokter" class="col-sm-2 col-form-label">Dokter yang Meminta</label>
            <div class="col-sm-8">
              <input type="text" name="dokter" id="dokter" class="form-control" value="<?php echo $dropping['dokterdropping'] ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="zaal" class="col-sm-2 col-form-label">Zaal Perawatan</label>
            <div class="col-sm-8">
              <input type="text" name="zaal" id="zaal" class="form-control" value="<?php echo $dropping['zaaldropping'] ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="jumlahkantong" class="col-sm-2 col-form-label">Jumlah Kantong</label>
            <div class="col-sm-8">
              <input type="text" name="jumlahkantong" id="jumlahkantong" class="form-control" value="<?php echo $dropping['jumlahkantongdropping'] ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="tanggaldropping" class="col-sm-2 col-form-label">Tanggal Dropping</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name="tanggaldropping" id="tanggaldropping" value="<?php echo $dropping['tanggaldropping'] ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="jamdropping" class="col-sm-2 col-form-label">Jam Dropping</label>
            <div class="col-sm-8">
              <input type="time" class="form-control" name="jamdropping" id="jamdropping" value="<?= $dropping['jamdropping']?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="idpetugasutdpmi" class="col-sm-2 col-form-label">Nama Petugas UTD PMI</label>
            <div class="col-sm-8">
              <select type="text" class="form-control" id="idpetugasutdpmi" name="idpetugasutdpmi" required>
                <?php foreach ($petugas as $ptgs): ?>
                  <option value="<?php echo $ptgs['idpetugasutdpmi'] ?>" <?php if($dropping['idpetugasutdpmi']==$ptgs['idpetugasutdpmi']) echo'selected' ?>>
                    <?php echo $ptgs['namapetugasutdpmi']; ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="namapetugasrs" class="col-sm-2 col-form-label">Nama Petugas RS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namapetugasrs" name="namapetugasrs" value="<?php echo $dropping['namapetugasrs'] ?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $dropping['keterangan'] ?>">
            </div>
          </div>
          
          <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Dropping Darah</button>
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
