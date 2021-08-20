<?php 
include '../../koneksi.php';

$ID = $_GET['ID'];

mysqli_query($koneksi, "DELETE FROM datapegawai WHERE ID='$ID'")or die(mysqli_error());
 
header("location:../../Admin/pegawai.php");
?>