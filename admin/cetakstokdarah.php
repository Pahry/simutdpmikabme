<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampil = tampilstokdarah("SELECT * FROM stokdarah");
	$no=1;
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
						<img src="dist/img/koppmi.jpg"><br><br><br>
						<h2>Data Stok Darah, '. date("d-M-Y, H:i:s ") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Komponen</th>
			                <th>A (+)</th>
			                <th>B (+)</th>
			                <th>AB (+)</th>
			                <th>O (+)</th>
		                </tr>';
		                foreach($tampil as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["komponenstokdarah"] . '</td>
		                    <td>'. $tpl["goldaa"] . '</td>
		                    <td>'. $tpl["goldab"] . '</td>
		                    <td>'. $tpl["goldaab"] . '</td>
		                    <td>'. $tpl["goldao"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output('laporanstokdarah.pdf', \Mpdf\Output\Destination::DOWNLOAD);