<?php  
 
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");

  include 'functions.php';
  
  $id           = $_GET['id'];
  $petugas      = tampilpetugas("SELECT * FROM petugasutdpmi");
  $paramedis    = tampilparamedis("SELECT * FROM paramedis");
  $tampil       = tampilpendonor("SELECT * FROM pendonor WHERE idpendonor=$id")[0];


  if (isset($_POST['submit'])) {
    
      if(ubahpendonor($_POST) > 0 )
      {
        echo "<script>
                alert('Data Berhasil Diubah');
                document.location.href = 'datapendonor.php';
              </script>";
      }else{
        echo "<script>
                alert('Data Gagal Diubah');
                document.location.href = 'datapendonor.php';
              </script>";
              echo mysqli_error($koneksi);
      }
  }
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
            <h1 class="m-0 text-dark">Ubah Pendonor</h1>
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
        
      <form method="post" action="">

        <input type="hidden" name="idpendonor" value="<?= $tampil['idpendonor']; ?>">

        <div class="form-group row">
          <label for="tanggaldonor" class="col-sm-2 col-form-label">Tanggal Donor</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tanggaldonor" id="tanggaldonor" value="<?= $tampil['tanggalpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tempatdonor" class="col-sm-2 col-form-label">Tempat Donor Darah</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="tempatdonor" name="tempatdonor" value="<?= $tampil['tempatpenyumbanganpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorktp" class="col-sm-2 col-form-label">Nomor KTP</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nomorktp" name="nomorktp" value="<?= $tampil['nomorktppendonor'];?>" placeholder="Masukkan Nomor KTP" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="namapendonor" class="col-sm-2 col-form-label">Nama Pendonor</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namapendonor" name="namapendonor" value="<?= $tampil['namapendonor'];?>" placeholder="Masukkan Nama Lengkap Pendonor" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-8">
            <select class="form-control" name="jeniskelamin" id="jk">
              <option value="Laki-laki" <?php if($tampil['jeniskelaminpendonor'] == 'Laki-laki') echo 'selected';?> >Laki-laki</option>
              <option value="Perempuan" <?php if($tampil['jeniskelaminpendonor'] == 'Perempuan') echo 'selected';?>>Perempuan</option>
            </select>
          </div>
        </div>
  
        <div class="form-group row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat Rumah</label>
          <div class="col-sm-8">
            <textarea class="form-control" name="alamat" id="alamat" rows="3" required><?= $tampil['alamatpendonor'];?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nomortelepon" id="nomortelepon" value="<?= $tampil['nomorteleponpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
          <div class="col-sm-8"> 
              <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $tampil['pekerjaanpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" value="<?= $tampil['tanggallahirpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="umur" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" name="umur" id="umur" min="17" max="60" placeholder="17-60 tahun" value="<?= $tampil['umurpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="donorke" class="col-sm-2 col-form-label">Sekarang Donor Ke</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" name="donorke" id="donorke" value="<?= $tampil['donorkependonor'];?>" required>
          </div>
        </div>

        <h2 class="mt-5 text-dark">Diisi oleh Petugas Pemeriksaan Pendahuluan</h2>

        <div class="form-group row">  
            <label for="sys" class="col-sm-2 col-form-label">Tekanan Darah Sistole</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="sys" id="sys" value="<?= $tampil['sistolependonor'];?>" required>
            </div>
        </div>

        <div class="form-group row">  
            <label for="dia" class="col-sm-2 col-form-label">Tekanan Darah Diastole</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="dia" id="dia" value="<?= $tampil['diastolependonor'];?>" required>
            </div>
        </div>  

        <div class="form-group row">  
            <label for="hb" class="col-sm-2 col-form-label">Kadar HB</label>
            <div class="col-sm-8"> 
                <input type="text" class="form-control" name="hb" id="hb" value="<?= $tampil['hbpendonor'];?>" required>
            </div>
        </div>    

        <div class="form-group row">
          <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
          <div class="col-sm-8"> 
            <select class="form-control" id="golongandarah" name="golda" required>
              <option value="A (+)"<?php if($tampil['goldapendonor'] == 'A (+)') echo 'selected';?>   >A (+)</option>
              <option value="B (+)"<?php if($tampil['goldapendonor'] == 'B (+)') echo 'selected';?>   >B (+)</option>
              <option value="AB (+)"<?php if($tampil['goldapendonor'] == 'AB (+)') echo 'selected';?> >AB (+)</option>
              <option value="O (+)"<?php if($tampil['goldapendonor'] == 'O (+)') echo 'selected';?>   >O (+)</option>
            </select>
          </div>
        </div>

        <div class="form-group row">  
            <label for="paramedis" class="col-sm-2 col-form-label">Dokter / Paramedis</label>
            <div class="col-sm-8"> 
              <select name="paramedis" class="form-control" id="namapetugasaftap">
                  <option>Pilih Dokter / Paramedis</option>
                  <?php foreach ($paramedis as $medis) : ?>
                    <option value="<?= $medis['idparamedis'];?>" <?php if($tampil['idparamedis'] == $medis['idparamedis']) echo 'selected';?> ><?= $medis['namaparamedis']; ?></option>
                  <?php endforeach ?>
                </select>
            </div>
        </div>
        
        <h2 class="mt-5 text-dark">Data Petugas Aftap</h2>
        <div class="form-group row">
          <label for="namapetugasaftap" class="col-sm-2 col-form-label">Nama Petugas Aftap</label>
          <div class="col-sm-8">
            <select name="petugasaftap" class="form-control" id="namapetugasaftap">
              <option>Pilih Petugas</option>
              <?php foreach ($petugas as $ptgs) : ?>
                <option value="<?= $ptgs['idpetugasutdpmi'];?>" <?php if($tampil['idpetugasutdpmi'] == $ptgs['idpetugasutdpmi']) echo 'selected';?> ><?= $ptgs['namapetugasutdpmi']; ?></option>
              <?php endforeach ?>

            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="nomorkantong" class="col-sm-2 col-form-label">Nomor Kantong</label>
          <div class="col-sm-8">
            <input type="text" name="nomorkantong" class="form-control" id="nomorkantong" value="<?= $tampil['nomorkantongpendonor'];?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="jeniskantong" class="col-sm-2 col-form-label">Jenis Kantong</label>
          <div class="col-sm-8"> 
              <input type="text" name="jeniskantong" class="form-control" id="jeniskantong" value="<?= $tampil['jeniskantongpendonor'];?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="sebanyak" class="col-sm-2 col-form-label">Sebanyak</label>
          <div class="col-sm-8">
              <input type="text" name="sebanyak" class="form-control" id="sebanyak" value="<?= $tampil['sebanyakpendonor'];?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="pengambilan" class="col-sm-2 col-form-label">Pengambilan</label>
          <div class="col-sm-8"> 
              <input type="text" name="pengambilan" class="form-control" id="pengambilan" value="<?= $tampil['pengambilanpendonor']; ?>" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="reaksi" class="col-sm-2 col-form-label">Reaksi</label>
          <div class="col-sm-8"> 
              <input type="text" name="reaksi" class="form-control" id="reaksi" value="<?= $tampil['reaksipendonor']; ?>" required>
          </div>
        </div>

      <button class="btn btn-success" type="submit" name="submit" value="Submit"><i class="fas fa-plus"></i> Ubah Data Pendonor</button>
      <a class="btn btn-danger" href="datapendonor.php"><i class="fas fa-backward"></i> Kembali</a>
      
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
