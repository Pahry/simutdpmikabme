<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';


	$tampil 	= tampilpendonor("SELECT * FROM pendonor");
	
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
						<h2>Laporan Data Pendonor, '. date("d-M-Y, H:i:s") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Tanggal Donor</th>
                      		<th>Nama</th>
                      		<th>Golda</th>
                      		<th>No. Telp</th>
                      		<th>Alamat</th>
                      		<th>Donor Ke</th>
                      		<th>Nomor Kantong</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["tanggalpendonor"] . '</td>
		                    <td>'. $tpl["namapendonor"] . '</td>
		                    <td>'. $tpl["goldapendonor"] . '</td>
		                    <td>'. $tpl["nomorteleponpendonor"] . '</td>
		                    <td>'. $tpl["alamatpendonor"] . '</td>
		                    <td>'. $tpl["donorkependonor"] . '</td>
		                    <td>'. $tpl["nomorkantongpendonor"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';

	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporancetakpendonor.pdf",\Mpdf\Output\Destination::DOWNLOAD);