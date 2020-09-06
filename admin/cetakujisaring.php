<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampil   = tampilujisaring("SELECT pendonor.namapendonor,
              pendonor.goldapendonor, pendonor.nomorkantongpendonor, ujisaringdarah.hiv,
              ujisaringdarah.hcv, ujisaringdarah.hbsag, ujisaringdarah.syphilis, 
              ujisaringdarah.malaria, pendonor.hbpendonor, ujisaringdarah.crossmatching, ujisaringdarah.idujisaringdarah 
              FROM ujisaringdarah
              INNER JOIN pendonor
              ON ujisaringdarah.idpendonor=pendonor.idpendonor");

	date_default_timezone_set("Asia/Jakarta");
	$no=1;
	
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
						<h2>Laporan Uji Saring Darah, '. date("d-M-Y, H:i:s") . ' WIB </h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Nama</th>
			                <th>HIV</th>
			                <th>HCV</th>
			                <th>HbSAg</th>
                  			<th>Syphilis</th>
                  			<th>Malaria</th>
                  			<th>HB</th>
                  			<th>Crossmatching</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["namapendonor"] . '</td>
		                    <td>'. $tpl["hiv"] . '</td>
		                    <td>'. $tpl["hcv"] . '</td>
		                    <td>'. $tpl["hbsag"] . '</td>
		                    <td>'. $tpl["syphilis"] . '</td>
		                    <td>'. $tpl["malaria"] . '</td>
		                    <td>'. $tpl["hbpendonor"] . '</td>
		                    <td>'. $tpl["crossmatching"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output('laporanujisaring.pdf', \Mpdf\Output\Destination::DOWNLOAD);