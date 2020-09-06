<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';


	$no 		= 1;
	date_default_timezone_set("Asia/Jakarta");

	$tampil 	= 	tampildroppingselainbdrs("SELECT droppingselainbdrs.iddropping, droppingselainbdrs.tanggaldropping, pasien.namapasien,
					pasien.rumahsakitpasien,pasien.goldapasien,pasien.komponenpasien 
            		FROM droppingselainbdrs
            		INNER JOIN pasien
            		ON droppingselainbdrs.idpasien = pasien.idpasien");
	
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
						<h2>Laporan Dropping Darah Selain BDRS,<br> '. date("d-M-Y, H:i:s") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Nama Pasien</th>
                  			<th>Rumah Sakit</th>
                  			<th>Golongan Darah</th>
                  			<th>Komponen</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["tanggaldropping"] . '</td>
		                    <td>'. $tpl["namapasien"] . '</td>
		                    <td>'. $tpl["rumahsakitpasien"] . '</td>
		                    <td>'. $tpl["goldapasien"] . '</td>
		                    <td>'. $tpl["komponenpasien"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandroppingdarahselainbdrs.pdf",\Mpdf\Output\Destination::DOWNLOAD);