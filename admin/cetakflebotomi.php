<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';

	$tampilflebotomi = tampilflebotomi("SELECT flebotomi.idflebotomi,flebotomi.tanggaldonorflebotomi,
                    flebotomi.namaflebotomi,flebotomi.nomorteleponflebotomi, 
                    flebotomi.nomorkantongflebotomi,flebotomi.umurflebotomi,flebotomi.goldaflebotomi,
                    flebotomi.alamatflebotomi,petugasutdpmi.namapetugasutdpmi
                    FROM flebotomi
                    INNER JOIN petugasutdpmi ON flebotomi.idpetugasutdpmi = petugasutdpmi.idpetugasutdpmi");

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
						<img src="dist/img/koppmi.jpg">
						<h2>Laporan Flebotomi, '. date("d-M-Y, H:i:s") . ' WIB</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
			                <th>No</th>
			                <th>Tanggal Donor</th>
                    		<th>Nama</th>
                    		<th>Golda</th>
                    		<th>Nomor Telepon</th>
                    		<th>Alamat</th>
                    		<th>Petugas Aftap</th>
                    		<th>Nomor Kantong</th>
		                </tr>';
		                foreach($tampilflebotomi as $tpl) 
		                {
	$content 	.=		'<tr>
		                    <th>'. $no++ .'</th>
		                    <td>'. $tpl["tanggaldonorflebotomi"] . '</td>
		                    <td>'. $tpl["namaflebotomi"] . '</td>
		                    <td>'. $tpl["goldaflebotomi"] . '</td>
		                    <td>'. $tpl["nomorteleponflebotomi"] . '</td>
		                    <td>'. $tpl["alamatflebotomi"] . '</td>
		                    <td>'. $tpl["namapetugasutdpmi"] . '</td>
		                    <td>'. $tpl["nomorkantongflebotomi"] . '</td>
		                </tr>';
		            	}
	$content 	.= 		'</table>
					</body>
					</html>';

	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporanflebotomi.pdf",\Mpdf\Output\Destination::DOWNLOAD);