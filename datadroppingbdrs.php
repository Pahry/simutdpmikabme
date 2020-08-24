<?php  
  include 'functions.php';

  $tampildroppingbdrs = tampildroppingbdrs("
            SELECT droppingbdrs.iddroppingbdrs, droppingbdrs.tanggaldropping, pasien.namapasien, pasien.goldapasien,pasien.komponenpasien, droppingbdrs.namapenerimadroppingbdrs  
            FROM droppingbdrs
            INNER JOIN pasien 
            ON droppingbdrs.idpasien = pasien.idpasien");
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
  <!-- Data Tables -->
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
            <h1 class="m-0 text-dark">Data Dropping Darah BDRS</h1>
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
            <a class="btn btn-success" href="tambahdroppingdarahbdrs.php"><i class="fas fa-plus"></i> Dropping Darah BDRS</a>
          </div> <!-- Tututup Card Header -->
        
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tgl Dropping Darah</th>
                    <th>Nama Pasien</th>
                    <th>Golongan Darah</th>
                    <th>Komponen</th>
                    <th>Nama Penerima</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $no=1; foreach ($tampildroppingbdrs as $tpl): ?>
                  
                    <tr>
                      <th><?= $no; $no++;?></th>
                      <td><?= $tpl['tanggaldropping'];?></td>
                      <td><?= $tpl['namapasien'];?></td>
                      <td><?= $tpl['goldapasien'];?></td>
                      <td><?= $tpl['komponenpasien'];?></td>
                      <td><?= $tpl['namapenerimadroppingbdrs'];?></td>
                      <td>
                        <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-edit"></i> Detail</a>
                        <a class="btn btn-primary btn-sm" href="ubahdroppingbdrs.php?id=<?=$tpl['iddroppingbdrs'];?>"><i class="fas fa-edit"></i> Ubah</a>
                        <a class="btn btn-danger btn-sm" href="hapusdroppingbdrs.php?id=<?=$tpl['iddroppingbdrs'];?>" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>

          </div> <!-- Tutup Card Body -->
        </div> <!-- Tutup Card -->
      
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
