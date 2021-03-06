<?php  
  
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';
  $id     = $_GET['id'];
  $tpl    = tampildroppingselainbdrs("SELECT droppingselainbdrs.iddropping,
            droppingselainbdrs.jenisjaminandropping,droppingselainbdrs.dokterdropping,
            droppingselainbdrs.zaaldropping,droppingselainbdrs.jumlahkantongdropping,
            droppingselainbdrs.jamdropping,droppingselainbdrs.namapetugasrs,droppingselainbdrs.keterangan,
            droppingselainbdrs.tanggaldropping, pasien.namapasien,pasien.rumahsakitpasien,pasien.goldapasien,
            pasien.komponenpasien,petugasutdpmi.namapetugasutdpmi 
            FROM droppingselainbdrs
            INNER JOIN pasien ON droppingselainbdrs.idpasien = pasien.idpasien
            INNER JOIN petugasutdpmi ON droppingselainbdrs.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
            WHERE iddropping=$id")[0];

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
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Detail Dropping Darah Selain BDRS Pasien <?= $tpl['namapasien']?></h1>
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

        <div class="card">

          <div class="card-header">
            <a class="btn btn-success" href="tambahdroppingdarahselainbdrs.php"><i class="fas fa-plus"></i> Dropping Darah Selain BDRS</a>
            <a class="btn btn-primary" href="ubahdroppingselainbdrs.php?id=<?=$tpl['iddropping'];?>" title="Ubah"><i class="fas fa-edit"></i> Ubah Dropping Darah Selain BDRS</a>
            <a href="cetakdetaildroppingselainbdrs.php?id=<?= $tpl['iddropping']?>" class="btn btn-info" target="_blank"><i class="fas fa-print"></i> Cetak</a>
          </div> <!-- Tutup Card Header -->

          <div class="card-body">

            <table class="table table-striped table-bordered">
                <tr>
                  <th>Tanggal Dropping</th>
                  <td><?= $tpl['tanggaldropping'];?></td>
                </tr>
                <tr>
                  <th>Jam Dropping</th>
                  <td><?= $tpl['jamdropping']?></td>
                </tr>
                <tr>
                  <th>Rumah Sakit</th>
                  <td><?= $tpl['rumahsakitpasien'];?></td>
                </tr>
                <tr>
                  <th>Nama Pasien</th>
                  <td><?= $tpl['namapasien'];?></td>
                </tr>
                <tr>
                  <th>Golongan Darah</th>
                  <td><?= $tpl['goldapasien'];?></td>
                </tr>
                <tr>
                  <th>Komponen</th>
                  <td><?= $tpl['komponenpasien']?></td>
                </tr>
                <tr>
                  <th>Jumlah Kantong Dropping</th>
                  <td><?= $tpl['jumlahkantongdropping']?></td>
                </tr>
                <tr>
                  <th>Jenis Jaminan Dropping</th>
                  <td><?= $tpl['jenisjaminandropping']?></td>
                </tr>
                <tr>
                  <th>Dokter Dropping</th>
                  <td><?= $tpl['dokterdropping']?></td>
                </tr>
                <tr>
                  <th>Zaal Dropping</th>
                  <td><?= $tpl['zaaldropping']?></td>
                </tr>
                <tr>
                <th>Nama Petugas RS</th> 
                <td><?= $tpl['namapetugasrs']?></td>
                </tr>
                <tr>
                  <th>Petugas Dropping</th>
                  <td><?= $tpl['namapetugasutdpmi']?></td>
                </tr>
                <tr>  
                  <th>Keterangan</th>
                  <td><?= $tpl['keterangan']?></td>
                </tr>
                
            </table>

            <a class="btn btn-danger mt-3" href="datadroppingselainbdrs.php"><i class="fas fa-backward"></i> Kembali</a>

          </div> <!-- Tutup Card Body -->

        </div><!-- Tutup Card -->

      </div><!-- Tutup Container Fluid -->

    </section> <!-- /.content -->
    
  </div>  <!-- /.content-wrapper -->
  
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
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>
