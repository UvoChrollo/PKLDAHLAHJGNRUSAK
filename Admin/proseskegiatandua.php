<?php 
include '../Autopilot/nip.php';
include '../koneksi.php';

if (isset($_POST['submit'])){
	 session_start();
	 $SPPD = $_SESSION['SPPD'];
	 $terbilang = $_POST['terbilang'];

	 mysqli_query($koneksi, "UPDATE kegiatan SET terbilang = '$terbilang' WHERE sppd = '$SPPD'") or die (mysqli_error());
	 header('location:kegiatan.php');
}
?>