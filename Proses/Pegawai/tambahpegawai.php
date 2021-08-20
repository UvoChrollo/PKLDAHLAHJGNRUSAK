<?php

include '../../koneksi.php';

if (isset($_POST['submit'])) {
	
$Nama = $_POST['Nama'];
$NIP = $_POST['NIP'];
$Jabatan = $_POST['Jabatan'];
$Pangkat = $_POST['Pangkat'];
$level = 'User';
$Password = 'LLDIKTI10';
 
mysqli_query($koneksi, "INSERT INTO datapegawai VALUES(DEFAULT, '$Nama','$NIP','$Jabatan','$Pangkat','$Password','$level')") or die (mysqli_error());
header("location:../../Admin/pegawai.php");
}
?>