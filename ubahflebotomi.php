<?php  

  include 'functions.php';

  global $koneksi;

  $id = $_GET['id'];
  

  $tampilflebotomi = tampilflebotomi(
    "SELECT * FROM flebotomi WHERE idflebotomi = $id")[0];
 
  $tampilpetugasaftapflebotomi = tampilflebotomi("SELECT flebotomi.idflebotomi, petugasutdpmi.namapetugasutdpmi FROM flebotomi INNER JOIN petugasutdpmi ON flebotomi.idpetugasutdpmi = petugasutdpmi.idpetugasutdpmi WHERE idflebotomi = $id")[0];

  $tpl = tampilpetugas("SELECT idpetugasutdpmi,namapetugasutdpmi FROM petugasutdpmi");
 
  $medis = tampilparamedis("SELECT * FROM paramedis");
  if (isset($_POST['submit'])) 
  {

    if(ubahflebotomi($_POST) > 0 )
    {
      echo "<script>
              alert('Data berhasil ditambahkan');
              document.location.href = 'dataflebotomi.php';
            </script>" ;
    }else
    {
      echo "<script>
              alert('Data gagal ditambahkan');
            </script>" ;
              // document.location.href = 'dataflebotomi.php';
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
            <h1 class="m-0 text-dark">Ubah Pasien Flebotomi</h1>
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

      <input type="hidden" name="idflebotomi" value="<?= $tampilflebotomi['idflebotomi']; ?>">

      <div class="form-group row">
          <label for="tanggaldonorflebotomi" class="col-sm-2 col-form-label">Tanggal Donor</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="tanggaldonorflebotomi" name="tanggaldonorflebotomi"  value="<?= $tampilflebotomi['tanggaldonorflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorktpflebotomi" class="col-sm-2 col-form-label">Nomor KTP</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nomorktpflebotomi" name="nomorktpflebotomi" placeholder="Masukkan Nomor KTP" value="<?= $tampilflebotomi['nomorktpflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="namaflebotomi" class="col-sm-2 col-form-label">Nama Pasien Flebotomi</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namaflebotomi" name="namaflebotomi" placeholder="Masukkan Nama Lengkap Pasien Flebotomi" value="<?= $tampilflebotomi['namaflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-8">          
            <select class="form-control" id="jk" name="jeniskelaminflebotomi" required>
              <option value='Laki-laki' <?php if($tampilflebotomi['jeniskelaminflebotomi'] == 'Laki-laki' )echo 'selected' ?>>Laki-laki</option>
              <option value='Perempuan' <?php if($tampilflebotomi['jeniskelaminflebotomi'] == 'Perempuan' )echo 'selected' ?>>Perempuan</option>
            </select>
          </div>
        </div>

         <div class="form-group row">
          <label for="alamatflebotomi" class="col-sm-2 col-form-label">Alamat Rumah</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="alamatflebotomi" id="alamatflebotomi" rows="3"required><?php echo $tampilflebotomi['alamatflebotomi'];?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorteleponflebotomi" class="col-sm-2 col-form-label">Nomor Telepon</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nomorteleponflebotomi" id="nomorteleponflebotomi" value="<?= $tampilflebotomi['nomorteleponflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="pekerjaanflebotomi" class="col-sm-2 col-form-label">Pekerjaan</label>
          <div class="col-sm-8"> 
              <input type="text" class="form-control" name="pekerjaanflebotomi" id="pekerjaanflebotomi" value="<?= $tampilflebotomi['pekerjaanflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tanggallahirflebotomi" id="tanggallahir" value="<?= $tampilflebotomi['tanggallahirflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="umur" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" name="umurflebotomi" id="umur" min="17" max="60" placeholder="17-60 tahun" value="<?= $tampilflebotomi['umurflebotomi'];?>" required>
          </div>
        </div>

        <h2 class="mt-5 text-dark">Diisi oleh Petugas Pemeriksaan Pendahuluan</h2>

        <div class="form-group row">  
            <label for="sysflebotomi" class="col-sm-2">Tekanan Darah Sistole</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="sysflebotomi" id="sysflebotomi" value="<?= $tampilflebotomi['sysflebotomi'];?>" required>
            </div>
        </div>

        <div class="form-group row">  
            <label for="diaflebotomi" class="col-sm-2">Tekanan Darah Diastole</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="diaflebotomi" id="diaflebotomi" value="<?= $tampilflebotomi['diaflebotomi'];?>" required>
            </div>
        </div> 

        <div class="form-group row">  
            <label for="hbflebotomi" class="col-sm-2">Kadar HB</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="hbflebotomi" id="hbflebotomi" value="<?= $tampilflebotomi['hbflebotomi'];?>">
            </div>
        </div>    

        <div class="form-group row">
          <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
          <div class="col-sm-8">
            <select class="form-control" id="golongandarah" name="goldaflebotomi" required>
              <option value="A (+)" <?php if($tampilflebotomi['goldaflebotomi']=='A (+)' ) echo 'selected' ?>>A (+)</option>
              <option value="B (+)" <?php if($tampilflebotomi['goldaflebotomi']=='B (+)' ) echo 'selected' ?>>B (+)</option>
              <option value="AB (+)"<?php if($tampilflebotomi['goldaflebotomi']=='AB (+)' )echo 'selected' ?>>AB (+)</option>
              <option value="O (+)" <?php if($tampilflebotomi['goldaflebotomi']=='O (+)' )echo 'selected' ?>>O (+)</option>
            </select>
          </div>
        </div>

        <div class="form-group row">  
            <label for="paramedisflebotomi" class="col-sm-2 col-form-label">Dokter / Paramedis</label>
            <div class="col-sm-8"> 
              <select class="form-control" id="paramedisflebotomi" name="paramedisflebotomi" required>
                <option>Pilih Dokter / Paramedis</option>
                <?php foreach ($medis as $mds) :  ?>
                  <option value="<?php echo $mds["idparamedis"]; ?>" <?php if($tampilflebotomi['idparamedis'] == $mds['idparamedis']) echo 'selected';?> ><?php echo $mds["namaparamedis"]; ?></option>
                <?php endforeach ?>
            </select>
            </div>
        </div>

        <h1 class="mt-3 text-dark">Data Petugas Aftap</h1>

        <div class="form-group row">
          <label for="idpetugasutdpmi" class="col-sm-2 col-form-label">Nama Petugas Aftap</label>
          <div class="col-sm-8">
            <select class="form-control" id="idpetugasutdpmi" name="idpetugasutdpmi" required>
              <?php foreach ($tpl as $tpl): ?>
                <option value="<?= $tpl['idpetugasutdpmi']; ?>" <?php if($tampilflebotomi['idpetugasutdpmi'] == $tpl['idpetugasutdpmi']) echo "selected"; ?>>
                  <?= $tpl['namapetugasutdpmi']; ?>
                  </option>          
              <?php endforeach ?>                                                                                 
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorkantongflebotomi" class="col-sm-2 col-form-label">Nomor Kantong</label>
          <div class="col-sm-8">
            <input type="text" name="nomorkantongflebotomi" class="form-control" id="nomorkantongflebotomi" value="<?= $tampilflebotomi['nomorkantongflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jeniskantongflebotomi" class="col-sm-2 col-form-label">Jenis Kantong</label>
          <div class="col-sm-8"> 
              <input type="text" name="jeniskantongflebotomi" class="form-control" id="jeniskantongflebotomi" value="<?= $tampilflebotomi['jeniskantongflebotomi'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="sebanyakflebotomi" class="col-sm-2">Sebanyak</label>
          <div class="col-sm-8">
            <input type="text" name="sebanyakflebotomi" id="sebanyakflebotomi" class="form-control" value="<?= $tampilflebotomi['sebanyakflebotomi']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="pengambilanflebotomi" class="col-sm-2 col-form-label">Pengambilan</label>
          <div class="col-sm-8"> 
              <input type="text" name="pengambilanflebotomi" class="form-control" id="pengambilanflebotomi" value="<?= $tampilflebotomi['pengambilanflebotomi']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="reaksiflebotomi" class="col-sm-2 col-form-label">Reaksi</label>
          <div class="col-sm-8"> 
              <input type="text" name="reaksiflebotomi" class="form-control" id="reaksiflebotomi" value="<?= $tampilflebotomi['reaksiflebotomi'];?>" required>
          </div>
        </div>

        <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-plus"></i> Ubah Data Flebotomi</button>
        <a class="btn btn-danger" href="dataflebotomi.php"><i class="fas fa-backward"></i> Kembali</a>

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
