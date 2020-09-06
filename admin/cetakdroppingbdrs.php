<?php

  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampil 	= 	tampildroppingbdrs("SELECT droppingbdrs.iddroppingbdrs, droppingbdrs.tanggaldropping, pasien.namapasien, pasien.goldapasien,
					pasien.komponenpasien, droppingbdrs.namapenerima  
            		FROM droppingbdrs
            		INNER JOIN pasien 
            		ON droppingbdrs.idpasien = pasien.idpasien");

	$no 		= 1;

	date_default_timezone_set("Asia/Jakarta");
	
	$content 	= '<!DOCTYPE html>
					<html>
					<head>
						<style>
							td
							{
								text-align: center;
							}
						</style>
					</head>
					<body class="hold-transition sidebar-mini layout-fixed">
						<img src="dist/img/koppmi.jpg">
						<h2>Laporan Dropping Darah BDRS, '. date("d-M-Y, H:i:s") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Tgl Dropping Darah</th>
                    		<th>Nama Pasien</th>
                    		<th>Golongan Darah</th>
                    		<th>Komponen</th>
                    		<th>Nama Penerima</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["tanggaldropping"] . '</td>
		                    <td>'. $tpl["namapasien"] . '</td>
		                    <td>'. $tpl["goldapasien"] . '</td>
		                    <td>'. $tpl["komponenpasien"] . '</td>
		                    <td>'. $tpl["namapenerima"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandroppingdarahbdrs.pdf",\Mpdf\Output\Destination::DOWNLOAD);