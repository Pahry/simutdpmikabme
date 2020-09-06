<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampil 		= tampilpetugas("SELECT * FROM petugasutdpmi");
	$no 			= 1;

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
						<h2>Laporan Data Petugas UTD PMI Kab. Muara Enim,<br>'. date("d-M-Y, H:i:s") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Nama Petugas UTD PMI</th>
                  			<th>Tanggal Lahir</th>
                  			<th>Golda</th>
                  			<th>Pendidikan Tertinggi</th>
                  			<th>Jabatan</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["namapetugasutdpmi"] . '</td>
		                    <td>'. $tpl["tanggallahirpetugasutdpmi"] . '</td>
		                    <td>'. $tpl["goldapetugasutdpmi"] . '</td>
		                    <td>'. $tpl["pendidikanpetugasutdpmi"] . '</td>
		                    <td>'. $tpl["jabatanpetugasutdpmi"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporanpetugasutdpmi.pdf",\Mpdf\Output\Destination::DOWNLOAD);