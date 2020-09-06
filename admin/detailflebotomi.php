<?php 
  
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';

  $id         = $_GET['id'];

  $tplflb     =  tampilflebotomi("SELECT flebotomi.idflebotomi, flebotomi.tanggaldonorflebotomi,flebotomi.nomorktpflebotomi,
                  flebotomi.namaflebotomi,flebotomi.jeniskelaminflebotomi,flebotomi.alamatflebotomi,
                  flebotomi.nomorteleponflebotomi,flebotomi.pekerjaanflebotomi,
                  flebotomi.tanggallahirflebotomi,flebotomi.umurflebotomi,
                  flebotomi.sysflebotomi,flebotomi.diaflebotomi,flebotomi.hbflebotomi,
                  flebotomi.jeniskantongflebotomi,flebotomi.sebanyakflebotomi,
                  flebotomi.pengambilanflebotomi,flebotomi.reaksiflebotomi, 
                  flebotomi.nomorkantongflebotomi,flebotomi.goldaflebotomi,petugasutdpmi.namapetugasutdpmi,
                  paramedis.namaparamedis
                  FROM flebotomi
                  INNER JOIN petugasutdpmi ON flebotomi.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
                  INNER JOIN paramedis ON flebotomi.idparamedis = paramedis.idparamedis
                  WHERE idflebotomi=$id")[0];
  
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
                <a href="ubahflebotomi.php?id=<?= $tplflb['idflebotomi'];?>" class="btn btn-primary"><i class="fas fa-edit" title="Ubah"></i> Ubah Pasien Flebotomi</a>
                <a class="btn btn-info" href="cetakdetailflebotomi.php?id=<?= $tplflb['idflebotomi']?>" target="_blank"><i class="fas fa-print"></i> Cetak</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Tanggal Donor</th>
                    <td><?= $tplflb['tanggaldonorflebotomi'];  ?></td>
                  </tr>
                  <tr>
                    <th>Nomor KTP</th>
                    <td><?= $tplflb['nomorktpflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Nama</th>
                    <td><?= $tplflb['namaflebotomi'];  ?></td>
                  </tr>
                  <tr>
                    <th>Golda</th>
                    <td><?= $tplflb['goldaflebotomi']; ?></td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $tplflb['jeniskelaminflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td><?= $tplflb['alamatflebotomi']; ?></td>
                  </tr>
                  <tr>
                    <th>Nomor Telepon</th>
                    <td><?= $tplflb['nomorteleponflebotomi']; ?></td>
                  </tr>
                  <tr>
                    <th>Pekerjaan</th>
                    <td><?= $tplflb['pekerjaanflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir</th>
                    <td><?= $tplflb['tanggallahirflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Umur</th>
                    <td><?= $tplflb['umurflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Sys</th>
                    <td><?= $tplflb['sysflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Dia</th>
                    <td><?= $tplflb['diaflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>HB</th>
                    <td><?= $tplflb['hbflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Nomor Kantong</th>
                    <td><?= $tplflb['nomorkantongflebotomi']; ?></td>
                  </tr>
                  <tr>
                    <th>Jenis Kantong</th>
                    <td><?= $tplflb['jeniskantongflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Donor Sebanyak</th>
                    <td><?= $tplflb['sebanyakflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Pengambilan</th>
                    <td><?= $tplflb['pengambilanflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Reaksi</th>
                    <td><?= $tplflb['reaksiflebotomi']?></td>
                  </tr>
                  <tr>
                    <th>Petugas Paramedis</th>
                    <td><?= $tplflb['namaparamedis']?></td>
                  </tr>
                  <tr>
                    <th>Petugas Aftap</th>
                    <td><?= $tplflb['namapetugasutdpmi']; ?></td>
                  </tr>

                </table>

                <a class="btn btn-danger mt-3" href="dataflebotomi.php"><i class="fas fa-backward"></i> Kembali</a>


              </div> <!-- /.card-body -->
              
            </div> <!-- /.card -->
            
          </div> <!-- /.col -->
          
        </div> <!-- /.row -->
        
      </div> <!-- /.container-fluid -->
      
    </section> <!-- /.content -->
    
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
</body>
</html>
