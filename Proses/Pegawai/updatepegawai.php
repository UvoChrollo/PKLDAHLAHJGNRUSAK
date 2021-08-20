<?php

include '../../koneksi.php';

if (isset($_POST['submit'])) {
	
$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$NIP = $_POST['NIP'];
$Jabatan = $_POST['Jabatan'];
$Pangkat = $_POST['Pangkat'];
$level = $_POST['level'];
 
mysqli_query($koneksi, "UPDATE datapegawai SET Nama='$Nama', Jabatan='$Jabatan', Pangkat='$Pangkat', level = '$level' WHERE ID='$ID'") or die(mysqli_error());
header("location:../../Admin/pegawai.php");
}
?>