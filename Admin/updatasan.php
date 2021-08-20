<?php 
if (isset($_POST['submit'])) {
  include '../Autopilot/nip.php';
  include '../koneksi.php';
  
  $nama = $_POST['Nama'];
  $pangkat = $_POST['Pangkat'];

  $nip = NIP($nama);

  mysqli_query($koneksi, "UPDATE atasan SET nama = '$nama', nip = '$nip' WHERE pangkat = '$pangkat'") or die (mysqli_error());
  header('location:atasan.php');
}

?>