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
            <h1 class="m-0 text-dark">Data Pasien</h1>
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

        <form>
          <div class="form-group">
            <label for="tanggalpasien">Tanggal Pasien</label>
            <input type="date" class="form-control form-control-lg" id="tanggalpasien" name="tanggalpasien">
          </div>
          <button class="btn btn-primary" type="submit" name="cari"><i class="fas fa-search"></i> Cari</button>
        </form>

        <a class="btn btn-success mt-5" href="tambahpasien.php"><i class="fas fa-plus"></i> Tambah Data Pasien</a>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Rumah Sakit</th>
              <th scope="col">Golongan Darah</th>
              <th scope="col">Produk</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pasien A</td>
              <td>RSUD Rabain</td>
              <td>O (+)</td>
              <td>TC</td>
              <td>5 kantong</td>
              <td>
                <button class="btn btn-dark"><i class="fas fa-hand-holding-water"></i> Berikan Darah</button>
                <a class="btn btn-warning" href="detailpasien.php"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahpasien.php"><i class="fas fa-edit"></i> Ubah</a>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Pasien B</td>
              <td>RS BAM</td>
              <td>O (+)</td>
              <td>PRC</td>
              <td>5 kantong</td>
              <td>
                <button class="btn btn-dark"><i class="fas fa-hand-holding-water"></i> Berikan Darah</button>
                <a class="btn btn-warning" href="detailpasien.php"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahpasien.php"><i class="fas fa-edit"></i> Ubah</a>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Pasien C</td>
              <td>Klinik</td>
              <td>O (+)</td>
              <td>WB</td>
              <td>5 kantong</td>
              <td>
                <button class="btn btn-dark"><i class="fas fa-hand-holding-water"></i> Berikan Darah</button>
                <a class="btn btn-warning" href="detailpasien.php"><i class="far fa-eye"></i> Detail</a>
                <a class="btn btn-primary" href="ubahpasien.php"><i class="fas fa-edit"></i> Ubah</a>
                <button class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Tutup Pagination -->

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
