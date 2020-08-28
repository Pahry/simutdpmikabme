<?php  

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
  
  include 'functions.php';

  $id     = $_GET['id'];   
  
  $tampil =  tampilstokdarah("SELECT * FROM stokdarah WHERE idstokdarah=$id")[0];

  $stok   = tampilstokdarah("SELECT * FROM stokdarah");


  if (isset($_POST['submit'])) 
  { 
    if (ubahstokdarah($_POST) > 0 ) 
    {
      echo "<script>
              alert('Data berhasil diubah');
              document.location.href = 'datastokdarah.php';
            </script>" ;
    }
      else
    {
      echo "<script>
              alert('Data gagal diubah');
              document.location.href = 'datastokdarah.php';
            </script>" ;
            
      echo mysqli_error($koneksi);
    }
  }
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
            <h1 class="m-0 text-dark">Ubah Stok Darah</h1>
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
        
      <form action="" method="POST">

        <input type="hidden" name="id" value="<?=$tampil['idstokdarah'];?>">

        <div class="form-group row">
          <label for="komponen" class="col-sm-2 col-form-label">Komponen Darah</label>
          <div class="col-sm-8">
            <select class="form-control" id="komponen" name="komponen" disabled>
              <?php foreach ($stok as $s): ?>
                <option value="<?= $s['komponenstokdarah'];?>" <?php if($tampil['komponenstokdarah'] == $s['komponenstokdarah']) echo 'selected' ?> >
                  <?php echo $s['komponenstokdarah']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="a" class="col-sm-2 col-form-label">Golda A (+)</label>
          <div class="col-sm-8">
            <input type="number" name="a" id="a" class="form-control" value="<?= $tampil['goldaa'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="b" class="col-sm-2 col-form-label">Golda B (+)</label>
          <div class="col-sm-8">
            <input type="number" name="b" id="b" class="form-control" value="<?= $tampil['goldab'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="ab" class="col-sm-2 col-form-label">Golda AB (+)</label>
          <div class="col-sm-8">
            <input type="number" name="ab" id="ab" class="form-control" value="<?= $tampil['goldaab'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="o" class="col-sm-2 col-form-label">Golda O (+)</label>
          <div class="col-sm-8">
            <input type="number" name="o" id="o" class="form-control" value="<?= $tampil['goldao'];?>" required>
          </div>
        </div>

        <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Data</button>
        <a class="btn btn-danger" href="datastokdarah.php"><i class="fas fa-backward"></i> Kembali</a>
      </form>


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
