<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$id       	= $_GET['id'];
  	$tplpdnr  	= tampilpendonor("SELECT pendonor.idpendonor, pendonor.tempatpenyumbanganpendonor,
		            pendonor.tanggalpendonor,pendonor.nomorktppendonor,pendonor.namapendonor,
		            pendonor.jeniskelaminpendonor,pendonor.alamatpendonor,pendonor.nomorteleponpendonor,
		            pendonor.pekerjaanpendonor,pendonor.tanggallahirpendonor,pendonor.umurpendonor,
		            pendonor.donorkependonor,pendonor.sistolependonor,pendonor.diastolependonor,
		            pendonor.hbpendonor,pendonor.goldapendonor,pendonor.nomorkantongpendonor,
		            pendonor.jeniskantongpendonor,pendonor.sebanyakpendonor,pendonor.pengambilanpendonor,
		            pendonor.reaksipendonor,petugasutdpmi.namapetugasutdpmi,paramedis.namaparamedis
		            FROM pendonor
		            INNER JOIN petugasutdpmi ON pendonor.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
		            INNER JOIN paramedis ON pendonor.idparamedis=paramedis.idparamedis
		            WHERE idpendonor=$id")[0];

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
						<h2>Laporan Pendonor '. $tplpdnr['namapendonor'] . '</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
                      		<th>Tanggal Donor</th>
                      		<td>'. $tplpdnr["tanggalpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Tempat Penyumbangan Donor</th>
                      		<td>'. $tplpdnr["tempatpenyumbanganpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Nama</th>
                      		<td>'. $tplpdnr["namapendonor"] .'</td>
                    	</tr>		
                    	<tr>
                      		<th>Nomor KTP</th>
                      		<td>'. $tplpdnr["nomorktppendonor"] .'</td>
                    	</tr>		
                    	<tr>
                      		<th>Umur</th>
                      		<td>'. $tplpdnr["umurpendonor"] .'</td>
                    	</tr>		
                    	<tr>
                      		<th>JK</th>
                      		<td>'. $tplpdnr["jeniskelaminpendonor"] .'</td>
                    	</tr>		
                    	<tr>
                      		<th>Golongan Darah</th>
                      		<td>'. $tplpdnr["goldapendonor"] .'</td>
                    	</tr>		
                    	<tr>
                      		<th>Pekerjaan</th>
                      		<td>'. $tplpdnr["pekerjaanpendonor"] .'</td>
                    	</tr>
                    	<tr>
                      		<th>Tanggal Lahir</th>
                      		<td>'. $tplpdnr["tanggallahirpendonor"] .'</td>
                    	</tr>
                    	<tr>
                      		<th>Umur</th>
                      		<td>'. $tplpdnr["umurpendonor"] .'</td>
                    	</tr>
                    	<tr>
                      		<th>No. Telp</th>
                      		<td>'. $tplpdnr["nomorteleponpendonor"] .'</td>
                    	</tr>
                    	<tr>
                      		<th>Alamat</th>
                      		<td>'. $tplpdnr["alamatpendonor"] .'</td>
                    	</tr>
                    	<tr>
                      		<th>Donor Ke</th>
                      		<td>'. $tplpdnr["donorkependonor"].'</td>
                    	</tr>
                    	<tr>
                    	<tr>
                      		<th>Sys</th>
                      		<td>'. $tplpdnr["sistolependonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Dia</th>
                      		<td>'. $tplpdnr["diastolependonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>HB</th>
                      		<td>'. $tplpdnr["hbpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Nomor Kantong</th>
                      		<td>'. $tplpdnr["nomorkantongpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Jenis Kantong</th>
                  	  		<td>'. $tplpdnr["jeniskantongpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Donor Sebanyak</th>
                      		<td>'. $tplpdnr["sebanyakpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Pengambilan Donor</th>
                      		<td>'. $tplpdnr["pengambilanpendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Reaksi Donor</th>
                      		<td>'. $tplpdnr["reaksipendonor"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Paramedis</th>
                      		<td>'. $tplpdnr["namaparamedis"].'</td>
                    	</tr>
                    	<tr>
                      		<th>Nama Petugas Aftap</th>
                      		<td>'. $tplpdnr["namapetugasutdpmi"].'</td>
                    	</tr>';

	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandetailpendonor.pdf",\Mpdf\Output\Destination::DOWNLOAD);