<?php include 'functions.php'; 
  
  // Konfigurasi Pagination
// Menghitung jumlahhalaman = totaldata / dataperhalaman
  $dataperhalaman = 5;

  $result = mysqli_query($koneksi, "SELECT * FROM petugasutdpmi");
  $totaldata = mysqli_num_rows($result);
  $jumlahhalaman = ceil($totaldata / $dataperhalaman); 
  
  if (isset($_GET['halaman'])) {
    $halamanaktif = $_GET["halaman"];
  }else{
    $halamanaktif = 1;
  }

  $awaldata = ($dataperhalaman * $halamanaktif) - $dataperhalaman;




  $tampilpetugas = tampilpetugas("SELECT * FROM petugasutdpmi LIMIT $awaldata,$dataperhalaman");

  
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
            <h1 class="m-0 text-dark">Data Petugas UTD PMI</h1>
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
        
        <a class="btn btn-success mt-5" href="tambahpetugasutdpmi.php"><i class="fas fa-plus"></i> Tambah Data Petugas UTD PMI</a>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Petugas UTD PMI</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Golda</th>
              <th scope="col">Pendidikan Tertinggi</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach ($tampilpetugas as $ptgs ) : ?>
            <tr>
              <th scope="row"><?= $no; $no++; ?></th>
              <td><?= $ptgs['namapetugasutdpmi']; ?></td>
              <td><?= $ptgs['tanggallahirpetugasutdpmi']; ?></td>
              <td><?= $ptgs['goldapetugasutdpmi']; ?></td>
              <td><?= $ptgs['pendidikanpetugasutdpmi']; ?></td>
              <td><?= $ptgs['jabatanpetugasutdpmi']; ?></td>
              <td>
                <a class="btn btn-primary" href="ubahpetugasutdpmi.php?id=<?= $ptgs['idpetugasutdpmi'];?>"><i class="fas fa-edit"></i> Ubah</a>
                <a class="btn btn-danger" href="hapuspetugasutdpmi.php?idpetugasutdpmi=<?= $ptgs['idpetugasutdpmi'];?>" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash"></i> Hapus</button>
              </td>
            </tr>
        <?php endforeach; ?>
          </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <?php if ($halamanaktif == 1 ): ?>
              <?php else : ?>
                <a class="page-link" href="?halaman=1" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              <?php endif ?>
            </li>

            <?php for ($i=1; $i <= $jumlahhalaman; $i++) : ?> 
              <?php if ($i == $halamanaktif): ?>
                <li class="page-item active"><a class="page-link" href="?halaman=<?= $i?>"><?= $i; ?></a></li>
              <?php else: ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $i?>"><?= $i; ?></a></li>
              <?php endif ?>
            <?php endfor; ?>

            <li class="page-item">
              <?php if ($halamanaktif == $jumlahhalaman): ?>
              <?php else: ?>
                <a class="page-link" href="?halaman=<?= $jumlahhalaman?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              <?php endif ?>
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
