<?php 
include '../koneksi.php';
include '../Autopilot/nip.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $pangkat = $_POST['pangkat'];
  $nip = NIP($nama);

  mysqli_query($koneksi, "INSERT INTO atasan VALUES('$nip','$nama','$pangkat')") or die (mysqli_error());
  header('location:atasan.php');
}
?>