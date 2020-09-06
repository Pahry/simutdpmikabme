<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';


	$id     = $_GET['id'];
  $tpl    = tampildroppingselainbdrs("SELECT droppingselainbdrs.iddropping,
            droppingselainbdrs.jenisjaminandropping,droppingselainbdrs.dokterdropping,
            droppingselainbdrs.zaaldropping,droppingselainbdrs.jumlahkantongdropping,
            droppingselainbdrs.jamdropping,droppingselainbdrs.namapetugasrs,droppingselainbdrs.keterangan,
            droppingselainbdrs.tanggaldropping, pasien.namapasien,pasien.rumahsakitpasien,pasien.goldapasien,
            pasien.komponenpasien,petugasutdpmi.namapetugasutdpmi 
            FROM droppingselainbdrs
            INNER JOIN pasien ON droppingselainbdrs.idpasien = pasien.idpasien
            INNER JOIN petugasutdpmi ON droppingselainbdrs.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
            WHERE iddropping=$id")[0];
	
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
						<h2>Laporan Dropping Darah Selain BDRS Pasien '. $tpl['namapasien'] . '</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
					         <tr>
                  			<th>Tanggal Dropping Darah</th>
                  			<td>'. $tpl["tanggaldropping"] .'</td>
                		</tr>
                		<tr>
                        <th>Jam Dropping</th>
                        <td>'. $tpl["jamdropping"] .'</td>
                    </tr>
                    <tr>
                        <th>Rumah Sakit</th>
                        <td>'. $tpl["rumahsakitpasien"] .'</td>
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
                      <th>Jumlah Kantong Dropping</th>
                      <td>'. $tpl["jumlahkantongdropping"] .'</td>
                    </tr>
                    <tr>
                      <th>Jenis Jaminan Dropping</th>
                      <td>'. $tpl["jenisjaminandropping"] .'</td>
                    </tr>
                    <tr>
                      <th>Dokter Dropping</th>
                      <td>'. $tpl["dokterdropping"] .'</td>
                    </tr>
                    <tr>
                      <th>Zaal Dropping</th>
                      <td>'. $tpl["zaaldropping"] .'</td>
                    </tr>
                    <tr>
                      <th>Nama Petugas RS</th> 
                      <td>'. $tpl["namapetugasrs"] .'</td>
                    </tr>
                    <tr>
                      <th>Petugas Dropping</th>
                      <td>'. $tpl["namapetugasutdpmi"] .'</td>
                    </tr>
                    <tr>  
                      <th>Keterangan</th>
                      <td>'. $tpl["keterangan"] .'</td>
                    </tr> ';
		                

	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandetaildroppingselainbdrs.pdf",\Mpdf\Output\Destination::DOWNLOAD);