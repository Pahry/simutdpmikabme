<?php  
  include 'functions.php';

  $tampilpendonor = tampilpendonor("SELECT * FROM pendonor");
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
            <h1 class="m-0 text-dark">Data Pendonor, <?php date_default_timezone_set("Asia/Jakarta"); echo date("l d-M-Y H:i:s ") . "WIB"; ?></h1>
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
              </div>

              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>JK</th>
                      <th>Golda</th>
                      <th>No. Telp</th>
                      <th>Alamat</th>
                      <th>Donor Ke</th>
                      <th>Nomor Kantong</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php $no=1; foreach ($tampilpendonor as $tplpdnr): ?>
                      
                      <tr>
                        <td><?= $no; $no++;?></td>
                        <td><?= $tplpdnr['namapendonor'];?></td>
                        <td><?= $tplpdnr['umurpendonor'];?></td>
                        <td><?= $tplpdnr['jeniskelaminpendonor'];?></td>
                        <td><?= $tplpdnr['goldapendonor'];?></td>
                        <td><?= $tplpdnr['nomorteleponpendonor'];?></td>
                        <td><?= $tplpdnr['alamatpendonor'];?></td>
                        <td><?= $tplpdnr['donorkependonor'];?></td>
                        <td><?= $tplpdnr['nomorkantongpendonor'];?></td>
                        <td>
                          <a class="btn btn-warning" href="#"><i class="far fa-eye"></i> Detail</a>
                          <a class="btn btn-primary" href="ubahdonor.php"><i class="fas fa-edit"></i> Ubah</a>
                          <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                      </tr>

                    <?php endforeach ?>

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>JK</th>
                      <th>Golda</th>
                      <th>No. Telp</th>
                      <th>Alamat</th>
                      <th>Donor Ke</th>
                      <th>Nomor Kantong</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

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
</body>
</html>
