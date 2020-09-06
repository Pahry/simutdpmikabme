<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';

  global $koneksi;
  
  $idujisaring    = $_GET['id'];

  $tampilujisaring = tampilujisaring("SELECT * FROM ujisaringdarah WHERE idujisaringdarah=$idujisaring")[0];
  $tampilpetugas   = tampilpetugas("SELECT idpetugasutdpmi,namapetugasutdpmi FROM petugasutdpmi");
  $tampilpendonor  = tampilpendonor("SELECT idpendonor, nomorkantongpendonor FROM pendonor");

  if (isset($_POST['submit'])) {

      if(ubahujisaring($_POST) > 0)
      {
        echo    "<script>
                  alert('Data Berhasil Diubah');
                  document.location.href = 'dataujisaring.php';
                </script>";
      }else
      {
        echo    "<script>
                  alert('Data Gagal Diubah');
                  document.location.href = 'dataujisaring.php';
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
            <h1 class="m-0 text-dark">Ubah Uji Saring</h1>
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

          <input type="hidden" name="idujisaring" value="<?php echo $tampilujisaring['idujisaringdarah']; ?>">

          <div class="form-group row">
            <label for="tanggalujisaring" class="col-sm-2 col-form-label">Tanggal Uji Saring</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggalujisaring" name="tanggalujisaring" value="<?=$tampilujisaring['tanggalujisaring'];?>" required>
            </div>
          </div>

          <div class="form-group row" id="">
            <label for="nomorkantongdarah" class="col-sm-2 col-form-label">Nomor Kantong Darah</label>
            <div class="col-sm-8">
              <select name="nomorkantongdarah" class="form-control" id="nomorkantongdarah" required>
                <option>Pilih Nomor Kantong Darah</option>
                <?php foreach ($tampilpendonor as $donor): ?>
                  <option value="<?php echo $donor['idpendonor']; ?>" <?php if($tampilujisaring['idpendonor'] == $donor['idpendonor']) echo'selected'; ?> >
                    <?php echo $donor['nomorkantongpendonor']; ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Komponen</label>
            <div class="col-sm-8">
              <select name="komponen" class="form-control" id="komponen" required>
                <option value="PRC" <?php if($tampilujisaring['komponenujisaring'] == 'PRC') echo 'selected'; ?> >PRC</option>
                <option value="TC" <?php if($tampilujisaring['komponenujisaring'] == 'TC') echo 'selected'; ?> >TC</option>
                <option value="WB" <?php if($tampilujisaring['komponenujisaring'] == 'WB') echo 'selected'; ?> >WB</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pemeriksaan HIV</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hiv" id="inlineRadio1" value="(+)" <?php if($tampilujisaring['hiv'] == '(+)') echo 'checked'; ?> >
              <label class="form-check-label" for="inlineRadio1">(+) Reaktif</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hiv" id="inlineRadio2" value="(-)" <?php if($tampilujisaring['hiv'] == '(-)') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">(-) Tidak Reaktif</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Pemeriksaan HCV</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hcv" id="inlineRadio1" value="(+)" <?php if($tampilujisaring['hcv'] == '(+)') echo 'checked'; ?>>
              <label class="form-check-label" for="inlineRadio1">(+) Reaktif</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hcv" id="inlineRadio2" value="(-)" <?php if($tampilujisaring['hcv'] == '(-)') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">(-) Tidak Reaktif</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Pemeriksaan HbSAG</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hbsag" id="inlineRadio1" value="(+)" <?php if($tampilujisaring['hbsag'] == '(+)') echo 'checked'; ?>>
              <label class="form-check-label" for="inlineRadio1">(+) Reaktif</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="hbsag" id="inlineRadio2" value="(-)" <?php if($tampilujisaring['hbsag'] == '(-)') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">(-) Tidak Reaktif</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label3">Pemeriksaan Syphilis</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="syphilis" id="inlineRadio1" value="(+)" <?php if($tampilujisaring['syphilis'] == '(+)') echo 'checked'; ?>>
              <label class="form-check-label" for="inlineRadio1">(+) Reaktif</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="syphilis" id="inlineRadio2" value="(-)" <?php if($tampilujisaring['syphilis'] == '(-)') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">(-) Tidak Reaktif</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Pemeriksaan Malaria</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="malaria" id="inlineRadio1" value="(+)" <?php if($tampilujisaring['malaria'] == '(+)') echo 'checked'; ?>>
              <label class="form-check-label" for="inlineRadio1">(+) Reaktif</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="malaria" id="inlineRadio2" value="(-)" <?php if($tampilujisaring['malaria'] == '(-)') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">(-) Tidak Reaktif</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Crossmatching</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="crossmatching" id="inlineRadio1" value="Cocok" <?php if($tampilujisaring['crossmatching'] == 'Cocok') echo 'checked'; ?>>
              <label class="form-check-label" for="inlineRadio1">Cocok</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="crossmatching" id="inlineRadio2" value="Tidak Cocok" <?php if($tampilujisaring['crossmatching'] == 'Tidak Cocok') echo 'checked'; ?> required>
              <label class="form-check-label" for="inlineRadio2">Tidak cocok</label>
            </div>
          </div>

          <div class="form-group row">
            <label for="namapetugas" class="col-sm-2 col-form-label">Nama Petugas</label>
            <div class="col-sm-8">
              <select class="form-control" id="namapetugas" name="namapetugas" required>
                <option>Pilih Petugas</option>
                <?php foreach ($tampilpetugas as $ptgs) : ?>
                  <option value="<?= $ptgs['idpetugasutdpmi']; ?>" <?php if($tampilujisaring['idpetugasutdpmi'] == $ptgs['idpetugasutdpmi']) echo'selected'; ?> ><?php echo $ptgs['namapetugasutdpmi']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Data</button>
          <a class="btn btn-danger" href="dataujisaring.php"><i class="fas fa-backward"></i> Kembali</a>

        </form>

      </div><!-- Tutup Container Fluid -->

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
