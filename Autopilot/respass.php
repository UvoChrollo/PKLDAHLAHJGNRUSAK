<?php 
include '../koneksi.php';

if (isset($_POST['submit'])) {
	$nip = $_POST['username'];

	mysqli_query($koneksi ,"UPDATE datapegawai SET Password = 'LLDIKTI10' WHERE NIP = '$nip'") or die (mysqli_error());
	header('location:../index.php');
}

?>