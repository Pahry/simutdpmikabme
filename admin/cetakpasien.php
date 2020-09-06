<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampilpasien = tampilpasien("SELECT * FROM pasien");
	
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
						<h2>Laporan Data Pasien, '. date("d-M-Y, H:i:s") . ' WIB</h2>';

	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Tgl Permintaan</th>
                  			<th>Nama Pasien</th>
                  			<th>Kode Pasien</th>
                  			<th>RS</th>
                  			<th>Golda</th>
                  			<th>Komponen</th>
                  			<th>Jumlah</th>
		                </tr>';
		                foreach($tampilpasien as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["tanggalpermintaanpasien"] . '</td>
		                    <td>'. $tpl["namapasien"] . '</td>
		                    <td>'. $tpl["kodepasien"] . '</td>
		                    <td>'. $tpl["rumahsakitpasien"] . '</td>
		                    <td>'. $tpl["goldapasien"] . '</td>
		                    <td>'. $tpl["komponenpasien"] . '</td>
		                    <td>'. $tpl["jumlahkantongpasien"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporanpasien.pdf",\Mpdf\Output\Destination::DOWNLOAD);