<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';
  $id         = $_GET['id'];
  $tpl        = tampilujisaring("SELECT ujisaringdarah.tanggalujisaring, pendonor.namapendonor,
                pendonor.nomorkantongpendonor,pendonor.goldapendonor,ujisaringdarah.komponenujisaring,  ujisaringdarah.hiv,
                ujisaringdarah.hcv, ujisaringdarah.hbsag, ujisaringdarah.syphilis, 
                ujisaringdarah.malaria, pendonor.hbpendonor, ujisaringdarah.crossmatching, 
                ujisaringdarah.idujisaringdarah,pendonor.nomorteleponpendonor 
                FROM ujisaringdarah
                INNER JOIN pendonor
                ON ujisaringdarah.idpendonor=pendonor.idpendonor
                WHERE idujisaringdarah = $id")[0];
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
            <h1 class="m-0 text-dark">Detail Uji Saring Darah <?= $tpl['namapendonor']?></h1>
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
            <a class="btn btn-success" href="tambahujisaring.php"><i class="fas fa-plus"></i> Tambah Data Uji Saring</a>
            <a class="btn btn-primary" href="ubahujisaring.php?id=<?= $tpl['idujisaringdarah'];?>"><i class="fas fa-edit" title="Ubah"></i>Ubah Data Uji Saring </a>
            <a href="cetakdetailujisaring.php?id=<?= $tpl['idujisaringdarah']?>" class="btn btn-info" target="_blank"><i class="fas fa-print"></i> Cetak</a>
          </div><!-- Tutup Card Header -->

          <div class="card-body">

            <table class="table table-striped">
                <tr>
                  <th>Tanggal Uji Saring</th>
                  <td><?php echo  $tpl['tanggalujisaring'] ?></td>
                </tr>
                <tr>
                  <th>Nama</th>
                  <td><?php echo $tpl['namapendonor'] ?></td>
                </tr>
                <tr>
                  <th>Nomor Kantong Darah</th>
                  <td><?php echo $tpl['nomorkantongpendonor'] ?></td>
                </tr>
                <tr>
                  <th>Golda Pendonor</th>
                  <td><?php echo $tpl['goldapendonor'] ?></td>
                </tr>
                <tr>
                  <th>Komponen</th>
                  <td><?php echo $tpl['komponenujisaring'] ?></td>
                </tr>
                <tr>
                  <th>HIV</th>
                  <td><?php echo $tpl['hiv']; ?></td>
                </tr>
                <tr>
                  <th>HCV</th>
                  <td><?php echo $tpl['hcv']; ?></td>
                </tr>
                <tr>
                  <th>HbSAg</th>
                  <td><?php echo $tpl['hbsag']; ?></td>
                </tr>
                <tr>
                  <th>Syphilis</th>
                  <td><?php echo $tpl['syphilis']; ?></td>
                </tr>
                <tr>
                  <th>Malaria</th>
                  <td><?php echo $tpl['malaria']; ?></td>
                </tr>
                <tr>
                  <th>HB</th>
                  <td><?php echo $tpl['hbpendonor']; ?></td>
                </tr>
                <tr>
                  <th>Crossmatching</th>
                  <td><?php echo $tpl['crossmatching']; ?></td>
                </tr>
                <tr>  
                    <th>Nomor Telepon</th>
                    <td><?php echo $tpl['nomorteleponpendonor']; ?></td>
                </tr>

            </table>

          <a class="btn btn-danger mt-3" href="dataujisaring.php"><i class="fas fa-backward"></i> Kembali</a>
          </div> <!-- Tutup Card Body -->
        </div> <!-- Tutup Card -->
      
      </div> <!-- Tutup Container Fluid -->

    </section>     <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  
  <?php include 'footer.php'; ?>

  <?php include 'controlsidebar.php'; ?>

</div> <!-- ./wrapper -->


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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        <?php echo $tpl['namapendonor']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
