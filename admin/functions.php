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
    		WHERE idpetugasutdpmi 		= $idpetugasutdpmi";
	
	mysqli_query($koneksi,$query);
	return mysqli_affected_rows($koneksi);

	var_dump(mysqli_affected_rows($koneksi));

}

 ?>