<?php 
  
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';

  $tampilflebotomi = tampilflebotomi("SELECT flebotomi.idflebotomi,flebotomi.tanggaldonorflebotomi,
                    flebotomi.namaflebotomi,flebotomi.nomorteleponflebotomi, 
                    flebotomi.nomorkantongflebotomi,flebotomi.umurflebotomi,flebotomi.goldaflebotomi,
                    flebotomi.alamatflebotomi,petugasutdpmi.namapetugasutdpmi
                    FROM flebotomi
                    INNER JOIN petugasutdpmi ON flebotomi.idpetugasutdpmi = petugasutdpmi.idpetugasutdpmi
                    ");

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
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
            <h1 class="m-0 text-dark">Data Flebotomi</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <a class="btn btn-success" href="tambahflebotomi.php"><i class="fa fa-plus"></i> Tambah Pasien Flebotomi</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Donor</th>
                    <th>Nama</th>
                    <th>Golda</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Petugas Aftap</th>
                    <th>Nomor Kantong</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($tampilflebotomi as $tplflb) : ?>
                  <tr>
                    <td><?= $no; $no++; ?></td>
                    <td><?= $tplflb['tanggaldonorflebotomi'];  ?></td>
                    <td><?= $tplflb['namaflebotomi'];  ?></td>
                    <td><?= $tplflb['goldaflebotomi']; ?></td>
                    <td><?= $tplflb['nomorteleponflebotomi']; ?></td>
                    <td><?= $tplflb['alamatflebotomi']; ?></td>
                    <td><?= $tplflb['namapetugasutdpmi']; ?></td>
                    <td><?= $tplflb['nomorkantongflebotomi']; ?></td>
                    <td>
                      <a href="detailflebotomi.php?id=<?= $tplflb['idflebotomi']?>" class="btn btn-sm btn-warning" title="Detail"><i class="fas fa-eye"></i></a>
                      <a href="ubahflebotomi.php?id=<?= $tplflb['idflebotomi'];?>" class="btn btn-sm btn-primary"><i class="fas fa-edit" title="Ubah"></i></a>
                      <a href="hapusflebotomi.php?id=<?= $tplflb['idflebotomi']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash" title="Hapus"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Donor</th>
                    <th>Nama</th>
                    <th>Golda</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Petugas Aftap</th>
                    <th>Nomor Kantong</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>

              <a href="cetakflebotomi.php" class="btn btn-info mt-3" target="_blank"><i class="fas fa-print"></i> Cetak</a>

              </div> <!-- /.card-body -->
            
            </div> <!-- /.card -->
          
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      
      </div><!-- /.container-fluid -->
    
    </section><!-- /.content -->
  
  </div> <!-- /.content-wrapper -->
  
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
