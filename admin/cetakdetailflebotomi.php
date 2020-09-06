<?php
  session_start();
  
  if(!isset($_SESSION["login"]))
  
  header("location: ../login.php");
 
  include 'functions.php';


	require_once __DIR__ . '/vendor/autoload.php';
	
	$id         = $_GET['id'];
	
	$tplflb     =  tampilflebotomi("SELECT flebotomi.idflebotomi, flebotomi.tanggaldonorflebotomi,flebotomi.nomorktpflebotomi,
                  flebotomi.namaflebotomi,flebotomi.jeniskelaminflebotomi,flebotomi.alamatflebotomi,
                  flebotomi.nomorteleponflebotomi,flebotomi.pekerjaanflebotomi,
                  flebotomi.tanggallahirflebotomi,flebotomi.umurflebotomi,
                  flebotomi.sysflebotomi,flebotomi.diaflebotomi,flebotomi.hbflebotomi,
                  flebotomi.jeniskantongflebotomi,flebotomi.sebanyakflebotomi,
                  flebotomi.pengambilanflebotomi,flebotomi.reaksiflebotomi, 
                  flebotomi.nomorkantongflebotomi,flebotomi.goldaflebotomi,petugasutdpmi.namapetugasutdpmi,
                  paramedis.namaparamedis
                  FROM flebotomi
                  INNER JOIN petugasutdpmi ON flebotomi.idpetugasutdpmi=petugasutdpmi.idpetugasutdpmi
                  INNER JOIN paramedis ON flebotomi.idparamedis = paramedis.idparamedis
                  WHERE idflebotomi=$id")[0];

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
						<h2>Laporan Flebotomi '. $tplflb['namaflebotomi'] . '</h2>';

  	
	
	$content	.= 	'<table border="1" cellpadding="7" cellspacing="0" width="100%" height="100%">
		                <tr>
                    		<th>Tanggal Donor</th>
                    		<td>'. $tplflb["tanggaldonorflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Nomor KTP</th>
                    		<td>'. $tplflb["nomorktpflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Nama</th>
                    		<td>'. $tplflb["namaflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Golda</th>
                    		<td>'. $tplflb["goldaflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Jenis Kelamin</th>
                    		<td>'. $tplflb["jeniskelaminflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Alamat</th>
                    		<td>'. $tplflb["alamatflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Nomor Telepon</th>
                    		<td>'. $tplflb["nomorteleponflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Pekerjaan</th>
                    		<td>'. $tplflb["pekerjaanflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Tanggal Lahir</th>
                    		<td>'. $tplflb["tanggallahirflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Umur</th>
                    		<td>'. $tplflb["umurflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Sys</th>
                    		<td>'. $tplflb["sysflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Dia</th>
                    		<td>'. $tplflb["diaflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>HB</th>
                    		<td>'. $tplflb["hbflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Nomor Kantong</th>
                    		<td>'. $tplflb["nomorkantongflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Jenis Kantong</th>
                    		<td>'. $tplflb["jeniskantongflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Donor Sebanyak</th>
                    		<td>'. $tplflb["sebanyakflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Pengambilan</th>
                    		<td>'. $tplflb["pengambilanflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Reaksi</th>
                    		<td>'. $tplflb["reaksiflebotomi"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Petugas Paramedis</th>
                    		<td>'. $tplflb["namaparamedis"] .'</td>
                  		</tr>
                  		<tr>
                    		<th>Petugas Aftap</th>
                    		<td>'. $tplflb["namapetugasutdpmi"] .'</td>
                  		</tr>';

	$content 	.= 		'</table>
					</body>
					</html>';
	$mpdf 		= new \Mpdf\Mpdf();
	
	// Mengatur Settingan Kertas
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	
	$mpdf->WriteHTML($content);
	
	$mpdf->Output("laporandetailflebotomi.pdf",\Mpdf\Output\Destination::DOWNLOAD);