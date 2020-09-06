<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';


	
	$id 		= $_GET['id'];
	$tpl 	    = tampilujisaring("SELECT ujisaringdarah.tanggalujisaring, pendonor.namapendonor,
                pendonor.nomorkantongpendonor,pendonor.goldapendonor,ujisaringdarah.komponenujisaring,  ujisaringdarah.hiv,
                ujisaringdarah.hcv, ujisaringdarah.hbsag, ujisaringdarah.syphilis, 
                ujisaringdarah.malaria, pendonor.hbpendonor, ujisaringdarah.crossmatching, 
                ujisaringdarah.idujisaringdarah,pendonor.nomorteleponpendonor 
              	FROM ujisaringdarah
              	INNER JOIN pendonor
              	ON ujisaringdarah.idpendonor=pendonor.idpendonor
              	WHERE idujisaringdarah = $id")[0];


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
						<h2>Laporan Uji Saring Darah Pendonor '. $tpl['namapendonor'] . '</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>Tanggal Uji Saring</th>
			                <td>'. $tpl["tanggalujisaring"] .'</td> 
		                </tr>
		                <tr>
                  			<th>Nama</th>
                  			<td>'. $tpl["namapendonor"] .'</td>
                		</tr>
                		<tr>
                  			<th>Nomor Kantong Darah</th>
                  			<td>'. $tpl["nomorkantongpendonor"]. '</td>
                		</tr>
                		<tr>
                  			<th>Golda Pendonor</th>
                  			<td>'. $tpl["goldapendonor"]. '</td>
               		 	</tr>
               		 	<tr>
                  			<th>Komponen</th>
                  			<td>'. $tpl["komponenujisaring"] .'</td>
                		</tr>
                		<tr>
                  			<th>HIV</th>
                  			<td>'. $tpl["hiv"].'</td>
                		</tr>
                		<tr>
                  			<th>HCV</th>
                  			<td>'. $tpl["hcv"].'</td>
                		</tr>
                		<tr>
                  			<th>HbSAg</th>
                  			<td>'. $tpl["hbsag"].'</td>
                		</tr>
                		<tr>
                  			<th>Syphilis</th>
                  			<td>'. $tpl["syphilis"].'</td>
                		</tr>
                		<tr>
                  			<th>Malaria</th>
                  			<td>'. $tpl["malaria"].'</td>
                		</tr>
                		<tr>
                  			<th>HB</th>
                  			<td>'. $tpl["hbpendonor"].'</td>
                		</tr>
                		<tr>
                  			<th>Crossmatching</th>
                  			<td>'. $tpl["crossmatching"].'</td>
                		</tr>
                		<tr>  
                    		<th>Nomor Telepon</th>
                    		<td>'. $tpl["nomorteleponpendonor"]. '</td>
                		</tr>';


	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output('laporandetailujisaringdarah.pdf', \Mpdf\Output\Destination::DOWNLOAD);