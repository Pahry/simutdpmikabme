<?php 

$koneksi = mysqli_connect("localhost","root","","simutdpmi");

function tampilpetugas($query)
{
	
	global $koneksi;

	$result = mysqli_query($koneksi, $query);
	$rows	= [];

	while($row 	= mysqli_fetch_assoc($result))
	{
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
	$idparamedisflebotomi	= htmlspecialchars($data['paramedisflebotomi']);
	
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
				'$idpetugasutdpmi',
				'$idparamedisflebotomi')";

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
	$idparamedis 		 	= htmlspecialchars($data['paramedisflebotomi']);

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
						reaksiflebotomi 		= '$reaksiflebotomi',
						idparamedis 			= '$idparamedis' 
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
		$kodepasien 	= $data['kodepasien'];
		$nama 			= htmlspecialchars($data['namapasien']);
		$rumahsakit		= htmlspecialchars($data['rumahsakitpasien']);
		$golda 			= htmlspecialchars($data['goldapasien']);
		$komponenpasien	= htmlspecialchars($data['komponenpasien']);
		$jumlahkantong	= htmlspecialchars($data['jumlahkantongpasien']);
		$keterangan		= htmlspecialchars($data['keterangan']);

		$query 		= 	"INSERT INTO pasien VALUES ('','$tanggal','$kodepasien','$nama','$rumahsakit','$golda','$komponenpasien','$jumlahkantong','$keterangan')";

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

	function tambahdroppingbdrs($data)
	{
		global $koneksi;

		$tanggaldropping 	= htmlspecialchars($data['tanggaldropping']);
		$nomorba 			= $data['nomorberitaacara'];
		$namapenerima 		= htmlspecialchars($data['namapenerima']);
		$alamat 			= htmlspecialchars($data['alamat']);
		$volumekantongdarah	= htmlspecialchars($data['volumekantongdarah']);
		$tanggalpenyadapan 	= htmlspecialchars($data['tanggalpenyadapan']);
		$tanggalexpired 	= htmlspecialchars($data['tanggalexpired']);
		$jeniskolf 			= htmlspecialchars($data['jeniskolf']);
		$keterangan 		= htmlspecialchars($data['keterangan']);
		$idpasien 			= htmlspecialchars($data['idpasien']);
		$idpendonor 		= htmlspecialchars($data['idpendonor']);
		$idpetugas 			= htmlspecialchars($data['idpetugas']);

		$query = "INSERT INTO droppingbdrs VALUES ('',
					'$tanggaldropping',
					'$nomorba',
					'$namapenerima',
					'$alamat',
					'$volumekantongdarah',
					'$tanggalpenyadapan',
					'$tanggalexpired',
					'$jeniskolf',
					'$keterangan',
					'$idpasien',
					'$idpendonor',
					'$idpetugas')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function ubahdroppingbdrs($data)
	{
		global $koneksi;

		$id 				= $data['id'];
		$tanggaldropping 	= htmlspecialchars($data['tanggaldropping']);
		$nomorba 			= $data['nomorberitaacara'];
		$namapenerima 		= htmlspecialchars($data['namapenerima']);
		$alamat 			= htmlspecialchars($data['alamat']);
		$volumekantongdarah	= htmlspecialchars($data['volumekantongdarah']);
		$tanggalpenyadapan 	= htmlspecialchars($data['tanggalpenyadapan']);
		$tanggalexpired 	= htmlspecialchars($data['tanggalexpired']);
		$jeniskolf 			= htmlspecialchars($data['jeniskolf']);
		$keterangan 		= htmlspecialchars($data['keterangan']);
		$idpasien 			= htmlspecialchars($data['idpasien']);
		$idpendonor 		= htmlspecialchars($data['idpendonor']);
		$idpetugas 			= htmlspecialchars($data['idpetugas']);

		$query = "UPDATE droppingbdrs SET 
				tanggaldropping 	= '$tanggaldropping',
				nomorberitaacara 	= '$nomorba',
				namapenerima 		= '$namapenerima',
				alamat 				= '$alamat',
				volumekantongdarah 	= '$volumekantongdarah',
				tanggalpenyadapan 	= '$tanggalpenyadapan',
				tanggalexpired 		= '$tanggalexpired',
				jeniskolf 			= '$jeniskolf',
				keterangan 			= '$keterangan',
				idpasien 			= '$idpasien',
				idpendonor 			= '$idpendonor',
				idpetugas 			= '$idpetugas'
				WHERE iddroppingbdrs = $id";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
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

	function tambahdroppingselainbdrs($data)
	{
		global $koneksi;

		$jenisjaminan 	 = htmlspecialchars($data['jenisjaminan']);
		$dokter 		 = htmlspecialchars($data['dokter']);
		$zaal 			 = htmlspecialchars($data['zaal']);
		$jumlahkantong   = htmlspecialchars($data['jumlahkantong']);
		$tanggaldropping = htmlspecialchars($data['tanggaldropping']);
		$jamdropping 	 = htmlspecialchars($data['jamdropping']);
		$namapetugasrs 	 = htmlspecialchars($data['namapetugasrs']);
		$keterangan 	 = htmlspecialchars($data['keterangan']);
		$idpasien 		 = $data['idpasien'];
		$idpetugasutdpmi = $data['idpetugasutdpmi']; 

		$query 	= "INSERT INTO droppingselainbdrs VALUES ('',
					'$jenisjaminan',
					'$dokter',
					'$zaal',
					'$jumlahkantong',
					'$tanggaldropping',
					'$jamdropping',
					'$namapetugasrs',
					'$keterangan',
					'$idpasien',
					'$idpetugasutdpmi')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);

	}

	function ubahdroppingselainbdrs($data)
	{
		global $koneksi;
		$id 			 = $data['iddropping'];
		$jenisjaminan 	 = htmlspecialchars($data['jenisjaminan']);
		$dokter 		 = htmlspecialchars($data['dokter']);
		$zaal 			 = htmlspecialchars($data['zaal']);
		$jumlahkantong   = htmlspecialchars($data['jumlahkantong']);
		$tanggaldropping = htmlspecialchars($data['tanggaldropping']);
		$jamdropping 	 = htmlspecialchars($data['jamdropping']);
		$namapetugasrs 	 = htmlspecialchars($data['namapetugasrs']);
		$keterangan 	 = htmlspecialchars($data['keterangan']);
		$idpasien 		 = $data['idpasien'];
		$idpetugasutdpmi = $data['idpetugasutdpmi']; 

		$query 	= "UPDATE droppingselainbdrs SET 
					jenisjaminandropping  		= '$jenisjaminan',
					dokterdropping 		  		= '$dokter',
					zaaldropping 		  		= '$zaal',
					jumlahkantongdropping 		= '$jumlahkantong',
					tanggaldropping 	  		= '$tanggaldropping',
					jamdropping 		  		= '$jamdropping',
					namapetugasrs 		  		= '$namapetugasrs',
					keterangan 			  		= '$keterangan',
					idpasien 			  		= '$idpasien',
					idpetugasutdpmi 	  		= '$idpetugasutdpmi'
					WHERE droppingselainbdrs.iddropping = $id";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);		
	}

	function hapusdroppingselainbdrs($data)
	{
		global $koneksi;

		mysqli_query($koneksi,$data);

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

	function tambahpendonor($data)
	{
		global $koneksi;

		$tanggaldonor			= htmlspecialchars($data['tanggaldonor']);
		$tempatdonor			= htmlspecialchars($data['tempatdonor']);
		$nomorktp				= htmlspecialchars($data['nomorktp']);
		$namapendonor			= htmlspecialchars($data['namapendonor']);
		$jeniskelamin			= htmlspecialchars($data['jeniskelamin']);
		$alamat					= htmlspecialchars($data['alamat']);
		$nomortelepon			= htmlspecialchars($data['nomortelepon']);
		$pekerjaan				= htmlspecialchars($data['pekerjaan']);
		$tanggallahir			= htmlspecialchars($data['tanggallahir']);
		$umur					= htmlspecialchars($data['umur']);
		$donorke				= htmlspecialchars($data['donorke']);
		$sys	 				= htmlspecialchars($data['sys']);
		$dia					= htmlspecialchars($data['dia']);
		$hb						= htmlspecialchars($data['hb']);
		$golda					= htmlspecialchars($data['golda']);
		$nomorkantong			= htmlspecialchars($data['nomorkantong']);
		$jeniskantong 			= htmlspecialchars($data['jeniskantong']);
		$sebanyak				= htmlspecialchars($data['sebanyak']);
		$pengambilan			= htmlspecialchars($data['pengambilan']);
		$reaksi					= htmlspecialchars($data['reaksi']);
		$idpetugasutdpmi		= htmlspecialchars($data['petugasaftap']);
		$idparamedis 			= htmlspecialchars($data['paramedis']);
		
		$query 	= 	"INSERT INTO pendonor VALUES 
					('','$tanggaldonor',
					'$tempatdonor',
					'$nomorktp',
					'$namapendonor',
					'$jeniskelamin',
					'$alamat',
					'$nomortelepon',
					'$pekerjaan',
					'$tanggallahir',
					'$umur',
					'$donorke',
					'$sys',
					'$dia',
					'$hb',
					'$golda',
					'$nomorkantong',
					'$jeniskantong',
					'$sebanyak',
					'$pengambilan',
					'$reaksi',
					'$idpetugasutdpmi',
					'$idparamedis')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function ubahpendonor($data)
	{
		global $koneksi;
		$idpendonor				= $data['idpendonor'];	
		$tanggaldonor			= htmlspecialchars($data['tanggaldonor']);
		$tempatdonor			= htmlspecialchars($data['tempatdonor']);
		$nomorktp				= htmlspecialchars($data['nomorktp']);
		$namapendonor			= htmlspecialchars($data['namapendonor']);
		$jeniskelamin			= htmlspecialchars($data['jeniskelamin']);
		$alamat					= htmlspecialchars($data['alamat']);
		$nomortelepon			= htmlspecialchars($data['nomortelepon']);
		$pekerjaan				= htmlspecialchars($data['pekerjaan']);
		$tanggallahir			= htmlspecialchars($data['tanggallahir']);
		$umur					= htmlspecialchars($data['umur']);
		$donorke				= htmlspecialchars($data['donorke']);
		$sys	 				= htmlspecialchars($data['sys']);
		$dia					= htmlspecialchars($data['dia']);
		$hb						= htmlspecialchars($data['hb']);
		$golda					= htmlspecialchars($data['golda']);
		$nomorkantong			= htmlspecialchars($data['nomorkantong']);
		$jeniskantong 			= htmlspecialchars($data['jeniskantong']);
		$sebanyak				= htmlspecialchars($data['sebanyak']);
		$pengambilan			= htmlspecialchars($data['pengambilan']);
		$reaksi					= htmlspecialchars($data['reaksi']);
		$idpetugasutdpmi		= htmlspecialchars($data['petugasaftap']);
		$idparamedis 			= htmlspecialchars($data['paramedis']);
		
		$query 	= 	"UPDATE pendonor SET 
					tanggalpendonor 				= '$tanggaldonor',
					tempatpenyumbanganpendonor 		= '$tempatdonor',
					nomorktppendonor				= '$nomorktp',
					namapendonor 					= '$namapendonor',
					jeniskelaminpendonor			= '$jeniskelamin',
					alamatpendonor					= '$alamat',
					nomorteleponpendonor			= '$nomortelepon',
					pekerjaanpendonor				= '$pekerjaan',
					tanggallahirpendonor			= '$tanggallahir',
					umurpendonor					= '$umur',
					donorkependonor 				= '$donorke',
					sistolependonor					= '$sys',
					diastolependonor 				= '$dia',
					hbpendonor 						= '$hb',
					goldapendonor 					= '$golda',
					nomorkantongpendonor 			= '$nomorkantong',
					jeniskantongpendonor 			= '$jeniskantong',
					sebanyakpendonor 				= '$sebanyak',
					pengambilanpendonor		 		= '$pengambilan',
					reaksipendonor 					= '$reaksi',
					idpetugasutdpmi 				= '$idpetugasutdpmi',
					idparamedis 					='$idparamedis'
					where idpendonor = $idpendonor";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function hapuspendonor($data)
	{
		global $koneksi;

		mysqli_query($koneksi,$data);

		return mysqli_affected_rows($koneksi);
	}

	function tampilujisaring($data)
	{
		global $koneksi;

		$result 	= mysqli_query($koneksi,$data);

		$rows 		= [];
		while ($row =mysqli_fetch_assoc($result)) 
		{
			$rows[]	= $row;
		}

		return $rows;
	}

	function tampilstokdarah($data)
	{
		global $koneksi;

		$result 	= mysqli_query($koneksi,$data);

		$rows 		= [];

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$rows[] = $row;
		}

		return $rows;
	}

	function tambahstokdarah($data)
	{
		global $koneksi;

		$komponen 	= htmlspecialchars($data['komponen']);
		$a 			= htmlspecialchars($data['a']);
		$b 			= htmlspecialchars($data['b']);
		$ab 		= htmlspecialchars($data['ab']);
		$o 			= htmlspecialchars($data['o']);

		$query 		= "INSERT INTO stokdarah VALUES ('','$komponen',$a,$b,$ab,$o)";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function ubahstokdarah($data)
	{
		global $koneksi;

		$id 		= $data['id'];
		$komponen 	= htmlspecialchars($data['komponenstokdarah']);
		$a 			= htmlspecialchars($data['a']);
		$b 			= htmlspecialchars($data['b']);
		$ab 		= htmlspecialchars($data['ab']);
		$o 			= htmlspecialchars($data['o']);

		$query = "UPDATE stokdarah SET komponenstokdarah = '$komponen',
					goldaa 	= $a,
					goldab 	= $b,
					goldaab = $ab,
					goldao 	= $o
					WHERE stokdarah.idstokdarah = $id";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function hapusstokdarah($data)
	{
		global $koneksi;

		mysqli_query($koneksi,$data);
		
		return mysqli_affected_rows($koneksi);
	}

	function tambahujisaring($data)
	{
		global $koneksi;

		$tanggalujisaring 	= $data['tanggalujisaring'];
		$komponen 			= $data['komponen'];
		$hiv 				= $data['hiv'];
		$hcv 				= $data['hcv'];
		$hbsag 				= $data['hbsag'];
		$syphilis 			= $data['syphilis'];
		$malaria 			= $data['malaria'];
		$crossmatching 		= $data['crossmatching'];
		$idpendonor 		= $data['nomorkantongdarah'];
		$idpetugas 			= $data['namapetugas'];

		$query 		= "INSERT INTO ujisaringdarah VALUES ('','$tanggalujisaring','$komponen','$hiv','$hcv','$hbsag','$syphilis','$malaria','$crossmatching','$idpendonor','$idpetugas')";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function ubahujisaring($data)
	{
		global $koneksi;

		$id 				= $data['idujisaring'];
		$tanggalujisaring 	= $data['tanggalujisaring'];
		$komponen 			= $data['komponen'];
		$hiv 				= $data['hiv'];
		$hcv 				= $data['hcv'];
		$hbsag 				= $data['hbsag'];
		$syphilis 			= $data['syphilis'];
		$malaria 			= $data['malaria'];
		$crossmatching 		= $data['crossmatching'];
		$idpendonor 		= $data['nomorkantongdarah'];
		$idpetugas 			= $data['namapetugas'];

		$query 		= "UPDATE ujisaringdarah SET 
						tanggalujisaring   	= '$tanggalujisaring',
						komponenujisaring 	= '$komponen',
						hiv 				= '$hiv',
						hcv 				= '$hcv',
						hbsag 				= '$hbsag',
						syphilis 			= '$syphilis',
						malaria 			= '$malaria',
						crossmatching 		= '$crossmatching',
						idpendonor 			= '$idpendonor',
						idpetugasutdpmi 	= '$idpetugas'
						WHERE idujisaringdarah = $id";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi);
	}

	function hapusujisaring($data)
	{
		global $koneksi;

		$query 	= "DELETE FROM ujisaringdarah WHERE idujisaringdarah=$data";

		mysqli_query($koneksi,$query);

		return mysqli_affected_rows($koneksi); 
	}

	function tampilparamedis($data)
	{
		global $koneksi;

		$result  	= mysqli_query($koneksi,$data);

		$rows 		= [];

		while($row  = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}

		return $rows;
	}
?>
