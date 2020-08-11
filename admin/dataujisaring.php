<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM UTD PMI KAB ME | Dashboard</title>
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
            <h1 class="m-0 text-dark">Data Uji Saring Darah</h1>
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
        <a class="btn btn-danger" href="tambahujisaring.php"><i class="fas fa-plus"></i> Uji Saring</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pendonor</th>
              <th scope="col">Golongan Darah</th>
              <th scope="col">Nomor Kantong</th>
              <th scope="col">Crossmatching</th>
              <th scope="col">HIV</th>
              <th scope="col">HCV</th>
              <th scope="col">HbSAg</th>
              <th scope="col">Syphilis</th>
              <th scope="col">Malaria</th>
              <th scope="col">HB</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pendonor A</td>
              <td>A (+)</td>
              <td>123456</td>
              <td>cocok</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>13,0</td>
              <td>
                <a class="btn btn-warning" href="#"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahujisaring.php"><i class="fas fa-edit"></i> Ubah</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Pendonor B</td>
              <td>B (+)</td>
              <td>223457</td>
              <td>cocok</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>14,0</td>
              <td>
                <a class="btn btn-warning" href="#"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahujisaring.php"><i class="fas fa-edit"></i> Ubah</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Pendonor C</td>
              <td>AB (+)</td>
              <td>812345</td>
              <td>cocok</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>14,0</td>
              <td>  
                <a class="btn btn-warning" href="#"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahujisaring.php"><i class="fas fa-edit"></i> Ubah</a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Pendonor D</td>
              <td>O (+)</td>
              <td>912345</td>
              <td>cocok</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>(-) Negatif</td>
              <td>14,0</td>
              <td>  
                <a class="btn btn-warning" href="#"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahujisaring.php"><i class="fas fa-edit"></i> Ubah</a>
              </td>
            </tr>
          </tbody>
        </table>

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
