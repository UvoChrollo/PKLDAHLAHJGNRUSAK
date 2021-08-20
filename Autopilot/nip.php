<?php 

function NIP($nama)
{
	include '../koneksi.php';
	$query = mysqli_query($koneksi, "SELECT NIP FROM datapegawai WHERE Nama = '$nama'") or die (mysqli_error());
	while ($data = mysqli_fetch_assoc($query)) {
		return $data['NIP'];
	}
}

function AtasaNIP($Pangkat)
{
	include '../koneksi.php';
	$query = mysqli_query($koneksi, "SELECT nip FROM atasan WHERE pangkat = '$Pangkat'") or die (mysqli_error());
	while ($data = mysqli_fetch_assoc($query)) {
		return $data['nip'];
	}
}

function AtasaNama($Pangkat)
{
	include '../koneksi.php';
	$query = mysqli_query($koneksi, "SELECT nama FROM atasan WHERE pangkat = '$Pangkat'") or die (mysqli_error());
	while ($data = mysqli_fetch_assoc($query)) {
		return $data['nama'];
	}
}

?>