<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';
  $id       = $_GET['id'];
  $tplpdnr  = tampilpendonor("SELECT pendonor.idpendonor, pendonor.tempatpenyumbanganpendonor,
            pendonor.tanggalpendonor,pendonor.nomorktppendonor,pendonor.namapendonor,
            pendonor.jeniskelaminpendonor,pendonor.alamatpendonor,pendonor.nomorteleponpendonor,
            pendonor.pekerjaanpendonor,pendonor.tanggallahirpendonor,pendonor.umurpendonor,
            pendonor.donorkependonor,pendonor.sistolependonor,pendonor.diastolependonor,
            pendonor.hbpendonor,pendonor.goldapendonor,pendonor.nomorkantongpendonor,
            pendonor.jeniskantongpendonor,pendonor.sebanyakpendonor,pendonor.pengambilanpendonor,
            pendonor.reaksipendonor,petugasutdpmi.namapetugasutdpmi,paramedis.namaparamedis
            FROM pendonor
            INNER JOIN petugasutdpmi ON pendonor.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
            INNER JOIN paramedis ON pendonor.idparamedis=paramedis.idparamedis
            WHERE idpendonor=$id")[0];
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
            <h1 class="m-0 text-dark">Detail Pendonor <?= $tplpdnr['namapendonor']?></h1>
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
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <a class="btn btn-success" href="tambahpendonor.php"><i class="fas fa-plus"></i> Tambah Pendonor</a> 
                <a class="btn btn-primary" href="ubahdonor.php?id=<?= $tplpdnr['idpendonor'];?>" title="Ubah"><i class="fas fa-edit"></i> Ubah Pendonor</a>
                <a class="btn btn-info" href="cetakdetailpendonor.php?id=<?= $tplpdnr['idpendonor']?>" target="_blank"><i class="fas fa-print"></i> Cetak</a>
              </div> <!-- Tutup Card Header -->

              <div class="card-body">
                <table class="table table-striped ">
                    <tr>
                      <th>Tanggal Donor</th>
                      <td><?= $tplpdnr['tanggalpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Tempat Penyumbangan Donor</th>
                      <td><?= $tplpdnr['tempatpenyumbanganpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Nama</th>
                      <td><?= $tplpdnr['namapendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Nomor KTP</th>
                      <td><?= $tplpdnr['nomorktppendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Umur</th>
                      <td><?= $tplpdnr['umurpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>JK</th>
                      <td><?= $tplpdnr['jeniskelaminpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Golongan Darah</th>
                      <td><?= $tplpdnr['goldapendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <td><?= $tplpdnr['pekerjaanpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td><?= $tplpdnr['tanggallahirpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Umur</th>
                      <td><?= $tplpdnr['umurpendonor']?></td>
                    </tr>
                    <tr>
                      <th>No. Telp</th>
                      <td><?= $tplpdnr['nomorteleponpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td><?= $tplpdnr['alamatpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Donor Ke</th>
                      <td><?= $tplpdnr['donorkependonor'];?></td>
                    </tr>
                    <tr>
                    <tr>
                      <th>Sys</th>
                      <td><?= $tplpdnr['sistolependonor']?></td>
                    </tr>
                    <tr>
                      <th>Dia</th>
                      <td><?= $tplpdnr['diastolependonor']?></td>
                    </tr>
                    <tr>
                      <th>HB</th>
                      <td><?= $tplpdnr['hbpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Nomor Kantong</th>
                      <td><?= $tplpdnr['nomorkantongpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kantong</th>
                      <td><?= $tplpdnr['jeniskantongpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Donor Sebanyak</th>
                      <td><?= $tplpdnr['sebanyakpendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Pengambilan Donor</th>
                      <td><?= $tplpdnr['pengambilanpendonor']?></td>
                    </tr>
                    <tr>
                      <th>Reaksi Donor</th>
                      <td><?= $tplpdnr['reaksipendonor'];?></td>
                    </tr>
                    <tr>
                      <th>Paramedis</th>
                      <td><?= $tplpdnr['namaparamedis']?></td>
                    </tr>
                    <tr>
                      <th>Nama Petugas Aftap</th>
                      <td><?= $tplpdnr['namapetugasutdpmi']?></td>
                    </tr>

                </table>

                <a class="btn btn-danger mt-3" href="datapendonor.php"><i class="fas fa-backward"></i> Kembali</a>

              
              </div><!-- Tutup Card Body -->

            </div> <!-- Tutup Card -->

          </div><!-- Tutup Col-12 -->

        </div> <!-- Tutup Row -->

      </div> <!-- Tutup Container Fluid -->
    
    </section> <!-- /.content -->

  </div> <!-- /.content-wrapper -->
  
  
  <?php include 'footer.php'; ?>

  <?php include 'controlsidebar.php'; ?>

</div><!-- ./wrapper -->


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
</body>
</html>
