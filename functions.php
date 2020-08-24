<?php 

$koneksi = mysqli_connect("localhost","root","","simutdpmi");

function tampilpetugas($query)
{
	
	global $koneksi;

	$result = mysqli_query($koneksi, $query);
	$rows	= [];
	while($row 	= mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambahdatapetugas($data)
{
	global $koneksi;

	$namapetugasutdpmi  = htmlspecialchars($data['namapetugasutdpmi']);
  	$tanggallahir       = htmlspecialchars($data['tanggallahir']); 
  	$golongandarah      = htmlspecialchars($data['golongandarah']);
  	$pendidikan         = htmlspecialchars($data['pendidikan']);
  	$jabatan            = htmlspecialchars($data['jabatan']);

  	$tambahdata         = "INSERT INTO petugasutdpmi VALUES 
                			('','$namapetugasutdpmi','$tanggallahir','$golongandarah','$pendidikan','$jabatan')";
  	
  	mysqli_query($koneksi, $tambahdata);

  	return mysqli_affected_rows($koneksi);
}

function hapuspetugasutdpmi($idpetugasutdpmi)
{
	global $koneksi;

	$hapuspetugas = "DELETE FROM petugasutdpmi WHERE idpetugasutdpmi = $idpetugasutdpmi";
	
	mysqli_query($koneksi, $hapuspetugas);

	return mysqli_affected_rows($koneksi);
}

function ubahpetugasutdpmi($data)
{
	global $koneksi;

	$idpetugasutdpmi	= $data['idpetugasutdpmi'];
	$namapetugasutdpmi  = htmlspecialchars($data['namapetugasutdpmi']);
    $tanggallahir       = htmlspecialchars($data['tanggallahir']); 
    $golongandarah      = htmlspecialchars($data['golongandarah']);
    $pendidikan         = htmlspecialchars($data['pendidikan']);
    $jabatan            = htmlspecialchars($data['jabatan']);
    
    $query = "UPDATE petugasutdpmi SET 
   			namapetugasutdpmi 			= '$namapetugasutdpmi',
    		tanggallahirpetugasutdpmi 	= '$tanggallahir',
    		goldapetugasutdpmi 			= '$golongandarah',
    		pendidikanpetugasutdpmi 	= '$pendidikan',
    		jabatanpetugasutdpmi 		= '$jabatan' 
    		WHERE idpetugasutdpmi 		=  $idpetugasutdpmi";
	
	mysqli_query($koneksi,$query);
	return mysqli_affected_rows($koneksi);
}

function tampilflebotomi($data)
{
	global $koneksi;

	$result = mysqli_query($koneksi, $data);
	$rows 	= [];
	while($row  = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}
	return $rows;
}

function tambahflebotomi($data)
{
	global $koneksi;

	$tanggaldonorflebotomi	= htmlspecialchars($data['tanggaldonorflebotomi']);
	$nomorktpflebotomi		= htmlspecialchars($data['nomorktpflebotomi']);
	$namaflebotomi			= htmlspecialchars($data['namaflebotomi']);
	$jeniskelaminflebotomi	= htmlspecialchars($data['jeniskelaminflebotomi']);
	$alamatflebotomi		= htmlspecialchars($data['alamatflebotomi']);
	$nomorteleponflebotomi	= htmlspecialchars($data['nomorteleponflebotomi']);
	$pekerjaanflebotomi		= htmlspecialchars($data['pekerjaanflebotomi']);
	$tanggallahirflebotomi	= htmlspecialchars($data['tanggallahirflebotomi']);
	$umurflebotomi			= htmlspecialchars($data['umurflebotomi']);
	$sysflebotomi 			= htmlspecialchars($data['sysflebotomi']);
	$diaflebotomi			= htmlspecialchars($data['diaflebotomi']);
	$hbflebotomi			= htmlspecialchars($data['hbflebotomi']);
	$goldaflebotomi			= htmlspecialchars($data['goldaflebotomi']);
	$nomorkantongflebotomi	= htmlspecialchars($data['nomorkantongflebotomi']);
	$jeniskantongflebotomi	= htmlspecialchars($data['jeniskantongflebotomi']);
	$sebanyakflebotomi		= htmlspecialchars($data['sebanyakflebotomi']);
	$pengambilanflebotomi	= htmlspecialchars($data['pengambilanflebotomi']);
	$reaksiflebotomi		= htmlspecialchars($data['reaksiflebotomi']);
	$idpetugasutdpmi		= htmlspecialchars($data['idpetugasutdpmi']);
	
	$query 	= 	"INSERT INTO flebotomi VALUES 
				('','$tanggaldonorflebotomi',
				'$nomorktpflebotomi',
				'$namaflebotomi',
				'$jeniskelaminflebotomi',
				'$alamatflebotomi',
				'$nomorteleponflebotomi',
				'$pekerjaanflebotomi',
				'$tanggallahirflebotomi',
				'$umurflebotomi',
				'$sysflebotomi',
				'$diaflebotomi',
				'$hbflebotomi',
				'$goldaflebotomi',
				'$nomorkantongflebotomi',
				'$jeniskantongflebotomi',
				'$sebanyakflebotomi',
				'$pengambilanflebotomi',
				'$reaksiflebotomi',
				'$idpetugasutdpmi')";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function ubahflebotomi($data)
{
	global $koneksi;

	$idflebotomi			= $data['idflebotomi'];
	$tanggaldonorflebotomi	= htmlspecialchars($data['tanggaldonorflebotomi']);
	$nomorktpflebotomi		= htmlspecialchars($data['nomorktpflebotomi']);
	$namaflebotomi			= htmlspecialchars($data['namaflebotomi']);
	$jeniskelaminflebotomi	= htmlspecialchars($data['jeniskelaminflebotomi']);
	$alamatflebotomi		= htmlspecialchars($data['alamatflebotomi']);
	$nomorteleponflebotomi	= htmlspecialchars($data['nomorteleponflebotomi']);
	$pekerjaanflebotomi		= htmlspecialchars($data['pekerjaanflebotomi']);
	$tanggallahirflebotomi	= htmlspecialchars($data['tanggallahirflebotomi']);
	$umurflebotomi			= htmlspecialchars($data['umurflebotomi']);
	$sysflebotomi 			= htmlspecialchars($data['sysflebotomi']);
	$diaflebotomi			= htmlspecialchars($data['diaflebotomi']);
	$hbflebotomi			= htmlspecialchars($data['hbflebotomi']);
	$goldaflebotomi			= htmlspecialchars($data['goldaflebotomi']);
	$nomorkantongflebotomi	= htmlspecialchars($data['nomorkantongflebotomi']);
	$jeniskantongflebotomi	= htmlspecialchars($data['jeniskantongflebotomi']);
	$sebanyakflebotomi		= htmlspecialchars($data['sebanyakflebotomi']);
	$pengambilanflebotomi	= htmlspecialchars($data['pengambilanflebotomi']);
	$reaksiflebotomi		= htmlspecialchars($data['reaksiflebotomi']);
	$idpetugasutdpmi		= htmlspecialchars($data['idpetugasutdpmi']);

	$query = 	"UPDATE flebotomi SET 
						tanggaldonorflebotomi 	= '$tanggaldonorflebotomi', 
						nomorktpflebotomi 		= '$nomorktpflebotomi', 
						namaflebotomi			= '$namaflebotomi',
						jeniskelaminflebotomi	= '$jeniskelaminflebotomi',
						alamatflebotomi			= '$alamatflebotomi',
						nomorteleponflebotomi	= '$nomorteleponflebotomi',
						pekerjaanflebotomi 		= '$pekerjaanflebotomi', 
						tanggallahirflebotomi	= '$tanggallahirflebotomi',
						umurflebotomi			= '$umurflebotomi',
						sysflebotomi 			= '$sysflebotomi', 
						diaflebotomi 			= '$diaflebotomi', 
						hbflebotomi 			= '$hbflebotomi',
						goldaflebotomi			= '$goldaflebotomi',
						nomorkantongflebotomi	= '$nomorkantongflebotomi', 
						jeniskantongflebotomi 	= '$jeniskantongflebotomi', 
						sebanyakflebotomi		= '$sebanyakflebotomi',
						pengambilanflebotomi 	= '$pengambilanflebotomi', 
						reaksiflebotomi 		= '$reaksiflebotomi' 
				WHERE 	flebotomi.idflebotomi 	= $idflebotomi";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function hapusflebotomi($data)
{
	global $koneksi;

	$query = "DELETE FROM flebotomi WHERE flebotomi.idflebotomi = $data";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function tampilpendonor($data)
{
	global $koneksi;

	$result = mysqli_query($koneksi, $data);
	$rows 	= [];

	while($row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}

	return $rows;
}

function tampilpasien($data)
	{
		global $koneksi;

		$result	= mysqli_query($koneksi,$data);

		$rows 	= [];

		while($row  = mysqli_fetch_assoc($result))
		{
			$rows[] = $row; 
		}

		return $rows;
	}

	function tambahpasien($data)
	{
		global $koneksi;

		$tanggal 		= htmlspecialchars($data['tanggalpermintaan']);
		$nama 			= htmlspecialchars($data['namapasien']);
		$rumahsakit		= htmlspecialchars($data['rumahsakitpasien']);
		$golda 			= htmlspecialchars($data['goldapasien']);
		$komponenpasien	= htmlspecialchars($data['komponenpasien']);
		$jumlahkantong	= htmlspecialchars($data['jumlahkantongpasien']);
		$keterangan		= htmlspecialchars($data['keterangan']);

		$query 		= 	"INSERT INTO pasien VALUES ('','$tanggal','$nama','$rumahsakit','$golda','$komponenpasien','$jumlahkantong','$keterangan')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi); 
	}

	function ubahpasien($data)
	{
		global $koneksi;

		$id 			= $data['idpasien'];
		$tanggal 		= htmlspecialchars($data['tanggalpermintaan']);
		$nama 			= htmlspecialchars($data['namapasien']);
		$rumahsakit		= htmlspecialchars($data['rumahsakitpasien']);
		$golda 			= htmlspecialchars($data['goldapasien']);
		$komponenpasien	= htmlspecialchars($data['komponenpasien']);
		$jumlahkantong	= htmlspecialchars($data['jumlahkantongpasien']);
		$keterangan		= htmlspecialchars($data['keterangan']);

		$query 		= 	"UPDATE pasien SET 
						tanggalpermintaanpasien	= '$tanggal',
						namapasien				= '$nama',
						rumahsakitpasien		= '$rumahsakit',
						goldapasien				= '$golda',
						komponenpasien			= '$komponenpasien',
						jumlahkantongpasien		= '$jumlahkantong',
						keteranganpasien		= '$keterangan'
						WHERE idpasien = $id";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi); 
	}

	function hapuspasien($data)
	{
		global $koneksi;
		
		$query = "DELETE FROM pasien WHERE idpasien = $data";
		
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function tampildroppingbdrs($data)
	{
		global $koneksi;

		$result = mysqli_query($koneksi,$data);

		$rows = [];

		while($row = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}

		return $rows;
	}

	function hapusdroppingbdrs($data)
	{
		global $koneksi;

		$result = mysqli_query($koneksi,$data);

		return mysqli_affected_rows($koneksi);
	}

	function tampildroppingselainbdrs($data)
	{
		global $koneksi;

		$result = mysqli_query($koneksi,$data);

		$rows 	= [];

		while($row 	= mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}

		return $rows;
	}

	function hapusdroppingselainbdrs($data)
	{
		global $koneksi;

		mysqli_query($koneksi,$data);

		return mysqli_affected_rows($koneksi);
	}
?>
