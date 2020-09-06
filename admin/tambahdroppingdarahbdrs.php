<?php 

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
   
  include 'functions.php';

  $pasien   = tampilpasien("SELECT idpasien,kodepasien FROM pasien");
  $pendonor = tampilpendonor("SELECT idpendonor,nomorkantongpendonor FROM pendonor");
  $petugas  = tampilpetugas("SELECT idpetugasutdpmi,namapetugasutdpmi FROM petugasutdpmi"); 

  // Kode BA Dropping BDRS
  $result   = mysqli_query($koneksi,"SELECT max(iddroppingbdrs) AS kodeba FROM droppingbdrs");
  $data     = mysqli_fetch_array($result);
  $kodeba   = $data['kodeba'];
  $kodeba++;
  $kode     = "BA/UTD/PMI-ME/";
  $tahun    = "/2020";
  $kodeba   = "$kode" . "$kodeba" . "$tahun";

  if (isset($_POST['submit'])) 
  {
      if(tambahdroppingbdrs($_POST) > 0)
      {
        echo  "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href='datadroppingbdrs.php';
               </script>";
      }else
      {
        echo  "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href='datadroppingbdrs.php';
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
            <h1 class="m-0 text-dark">Tambah Data Dropping Darah</h1>
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
          <label for="tanggaldropping" class="col-sm-2 col-form-label">Tanggal Dropping</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tanggaldropping" id="tanggaldropping">
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorberitaacara" class="col-sm-2 col-form-label">Nomor Berita Acara</label>
          <div class="col-sm-8">
            <input type="text" name="nomorberitaacara" class="form-control" id="nomorberitaacara" value="<?php echo $kodeba; ?>" readonly>
          </div>
        </div>

        <div class="form-group row">
          <label for="idpasien" class="col-sm-2 col-form-label">Kode Pasien</label>
          <div class="col-sm-8">
            <select class="form-control" id="idpasien" name="idpasien" required>
              <option>Pilih Kode Pasien</option>
              <?php foreach ($pasien as $psn): ?>
                <option value="<?php echo $psn['idpasien']; ?>"><?php echo $psn['kodepasien']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label for="idpendonor" class="col-sm-2 col-form-label">Nomor Kantong Darah</label>
          <div class="col-sm-8">
            <select class="form-control" id="idpendonor" name="idpendonor" required>
              <option>Pilih Nomor Kantong Darah</option>
              <?php foreach ($pendonor as $dnr): ?>
                <option value="<?php echo $dnr['idpendonor']; ?>"><?php echo $dnr['nomorkantongpendonor']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="namapenerima" class="col-sm-2 col-form-label">Nama Penerima Darah</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="namapenerima" id="namapenerima">
          </div>
        </div>

        <div class="form-group row">
          <label for="idpetugas" class="col-sm-2 col-form-label">Nama Petugas Dropping</label>
          <div class="col-sm-8">
            <select class="form-control" id="idpetugas" name="idpetugas">
              <option>Pilih Nama Petugas</option>
              <?php foreach ($petugas as $ptgs): ?>
                  <option value="<?php echo $ptgs['idpetugasutdpmi'] ?>"><?php echo $ptgs['namapetugasutdpmi']; ?></option>  
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat Pengambil Darah</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="alamat" id="alamat" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="volumekantongdarah" class="col-sm-2 col-form-label">Volume Kantong Darah</label>
          <div class="col-sm-8">
            <input type="text" name="volumekantongdarah" id="volumekantongdarah" name="volumekantongdarah" class="form-control" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggalpenyadapan" class="col-sm-2 col-form-label">Tanggal Penyadapan</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tanggalpenyadapan" name="tanggalpenyadapan" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggalexpired" class="col-sm-2 col-form-label">Tanggal Expired Darah</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tanggalexpired" name="tanggalexpired" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jeniskolf" class="col-sm-2 col-form-label">Jenis Kolf</label>
          <div class="col-sm-8">
            <select class="form-control" id="jeniskolf" name="jeniskolf" required>
              <option value="Single">Single</option>
              <option value="Double">Double</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-8">
            <input type="text-area" name="keterangan" class="form-control" id="keterangan">
          </div>
        </div>

      <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Tambah Dropping Darah</button>
      <a class="btn btn-danger" href="datadroppingbdrs.php"><i class="fas fa-backward"></i> Kembali</a>

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
