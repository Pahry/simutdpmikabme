 <?php  

  include 'functions.php';
  $idpasien = $_GET['id'];

  $tampilpasien = tampilpasien("SELECT * FROM pasien WHERE idpasien = $idpasien")[0];

  if (isset($_POST['submit'])) 
  {  
    if(ubahpasien($_POST) > 0 )
    {
      echo "<script>
              alert('Data Berhasil Diubah');
              document.location.href = 'datapasien.php';
            </script>";
    } 
     else
    {
      echo "<script>
              alert ('Data Gagal Diubah');
              document.location.href = 'datapasien.php';
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
            <h1 class="m-0 text-dark">Ubah Pasien</h1>
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
        
        <form  action="" method="POST">

          <input type="hidden" name="idpasien" value="<?= $tampilpasien['idpasien'];?>">

          <div class="form-group row">
            <label for="tanggalpermintaan" class="col-sm-2 col-form-label">Tanggal Permintaan</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggalpermintaan" name="tanggalpermintaan" value="<?= $tampilpasien['tanggalpermintaanpasien'];?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="namapasien" class="col-sm-2 col-form-label">Nama Pasien</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="namapasien" name="namapasien" placeholder="Masukkan Nama Lengkap Pasien" value="<?= $tampilpasien['namapasien'];?>" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="rumahsakit" class="col-sm-2 col-form-label">Rumah Sakit</label>
            <div class="col-sm-8">
              <select class="form-control" id="rumahsakit" name="rumahsakitpasien">
                <option value="RSUD Rabain" <?php if($tampilpasien['rumahsakitpasien'] == 'RSUD RABAIN') echo "selected"; ?> >RSUD H.M Rabain</option>
                <option value="RS BAM"<?php if($tampilpasien['rumahsakitpasien'] == 'RS BAM' ) echo "selected";?> >RS Bukit Asam Medika</option>
                <option value="Klinik KIM"<?php if($tampilpasien['rumahsakitpasien'] == 'Klinik KIM') echo "selected"; ?> >Klinik KIM</option>
                <option value="Umum"<?php if($tampilpasien['rumahsakitpasien'] == 'Umum') echo "selected"; ?> >Umum</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
            <div class="col-sm-8">
              <select class="form-control" id="golongandarah" name="goldapasien">
                <option value="A (+)" <?php if($tampilpasien['goldapasien'] == 'A (+)')echo "selected"; ?> >A (+)</option>
                <option value="B (+)" <?php if($tampilpasien['goldapasien'] == 'B (+)')echo "selected"; ?> >B (+)</option>
                <option value="AB (+)" <?php if($tampilpasien['goldapasien'] == 'AB (+)')echo "selected"; ?> >AB (+)</option>
                <option value="O (+)" <?php if($tampilpasien['goldapasien'] == 'O (+)')echo "selected"; ?> >O (+)</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="komponen" class="col-sm-2 col-form-label">Komponen Darah</label>
            <div class="col-sm-8">
              <select class="form-control" id="komponen" name="komponenpasien">
                <option value="PRC" <?php if($tampilpasien['komponenpasien']=='PRC')echo "selected"; ?> >PRC</option>
                <option value="TC" <?php if($tampilpasien['komponenpasien'] == 'TC')echo "selected"; ?> >TC</option>
                <option value="WB" <?php if($tampilpasien['komponenpasien'] == 'WB')echo "selected"; ?> >WB</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="jumlahkantong" class="col-sm-2 col-form-label">Jumlah Kantong</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="jumlahkantong" name="jumlahkantongpasien" value="<?= $tampilpasien['jumlahkantongpasien'];?>">
            </div>
          </div>

        <div class="form-group row">
          <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-8">
            <textarea type="text" class="form-control" id="keterangan" name="keterangan"><?= $tampilpasien['keteranganpasien']; ?></textarea>
          </div>
        </div>

          <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Pasien</button>
          <a class="btn btn-danger" href="datapasien.php"><i class="fas fa-backward"></i> Kembali</a>

        </form>

      </div> <!-- Tutup Container Fluid -->

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
