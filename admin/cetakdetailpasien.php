<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$id     = $_GET['id'];
	$tpl    = tampilpasien("SELECT * FROM pasien WHERE idpasien=$id")[0];
	
	$no 		= 1;
	
	date_default_timezone_set("Asia/Jakarta");

	
	$content 	= '<!DOCTYPE html>
					<html>
					<head>
						<style>
							th
							{
								text-align: left;
							}
						</style>
					</head>
					<body class="hold-transition sidebar-mini layout-fixed">
						<img src="dist/img/koppmi.jpg"><br><br><br>
						<h2>Laporan Data Pasien '. $tpl['namapasien'] . '</h2>';

	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
                  			<th>Tanggal Permintaan</th>
                  			<td>'. $tpl["tanggalpermintaanpasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Nama Pasien</th>
                  			<td>'. $tpl["namapasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Kode Pasien</th>
                  			<td>'. $tpl["kodepasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Rumah Sakit</th>
                  			<td>'. $tpl["rumahsakitpasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Golongan Darah</th>
                  			<td>'. $tpl["goldapasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Komponen</th>
                  			<td>'. $tpl["komponenpasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Jumlah Kantong</th>
                  			<td>'. $tpl["jumlahkantongpasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Keterangan</th>
                  			<td>'. $tpl["keteranganpasien"] .'</td>
                		</tr>';
		            	
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandetailpasien.pdf",\Mpdf\Output\Destination::DOWNLOAD);