<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';


	$id     = $_GET['id'];
  $tpl    = tampildroppingbdrs("SELECT droppingbdrs.iddroppingbdrs, droppingbdrs.tanggaldropping,
              droppingbdrs.nomorberitaacara,droppingbdrs.namapenerima, droppingbdrs.alamat,droppingbdrs.volumekantongdarah,
              droppingbdrs.tanggalpenyadapan,droppingbdrs.tanggalexpired,droppingbdrs.jeniskolf,droppingbdrs.keterangan, 
              pasien.namapasien,pasien.kodepasien, pasien.goldapasien,pasien.komponenpasien,petugasutdpmi.namapetugasutdpmi   
              FROM droppingbdrs
              INNER JOIN pasien ON droppingbdrs.idpasien = pasien.idpasien
              INNER JOIN petugasutdpmi ON droppingbdrs.idpetugas=petugasutdpmi.idpetugasutdpmi
              WHERE iddroppingbdrs=$id")[0];
	
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
						<h2>Laporan Dropping Darah BDRS Pasien '. $tpl['namapasien'] . '</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
					    <tr>
                  			<th>Tanggal Dropping Darah</th>
                  			<td>'. $tpl["tanggaldropping"] .'</td>
                		</tr>
                		<tr>  
                  			<th>Nomor Berita Acara</th>
                  			<td>'. $tpl['nomorberitaacara'] .'</td>
                		</tr>
                		<tr>
                    		<th>Nama Pasien</th>
                    		<td>'. $tpl["namapasien"] .'</td>
                		</tr>
                		<tr>
                    		<th>Golongan Darah</th>
                    		<td>'. $tpl["goldapasien"] .'</td>
                		</tr>
                		<tr>
                  			<th>Komponen</th>
                  			<td>'. $tpl['komponenpasien'] .'</td>
                		</tr>
                		<tr>
                  			<th>Nama Penerima</th>
                  			<td>'. $tpl["namapenerima"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Alamat</th>
                    		<td>'. $tpl["alamat"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Volume Kantong Darah</th>
                    		<td>'. $tpl["volumekantongdarah"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Tanggal Penyadapan</th>
                    		<td>'. $tpl["tanggalpenyadapan"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Tanggal Expired</th>
                    		<td>'. $tpl["tanggalexpired"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Jenis Kolf</th>
                    		<td>'. $tpl["jeniskolf"] .'</td>
                		</tr>
                		<tr>  
                    		<th>Keterangan</th>
                    		<td>'. $tpl["keterangan"] .'</td>
                		</tr>
                		<tr>
                    		<th>Nama Petugas Dropping</th>
                    		<td>'. $tpl["namapetugasutdpmi"] .'</td>  
                		</tr>';
		                

	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandetaildroppingbdrs.pdf",\Mpdf\Output\Destination::DOWNLOAD);