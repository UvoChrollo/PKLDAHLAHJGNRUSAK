<?php 
include '../../koneksi.php';

$sppd = $_GET['sppd'];

mysqli_query($koneksi, "DELETE FROM kegiatan WHERE sppd='$sppd'")or die(mysqli_error());
 
header("location:../../Admin/kegiatan.php");
?>