<?php 
if (isset($_POST['search'])) {
  
  include '../koneksi.php';
  $nama = $_POST['nama'];
  $query = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE Nama LIKE '%$nama%'");

  $cek = mysqli_num_rows($query);
  if ($cek > 0){
  	while ($data = mysqli_fetch_assoc($query)){
  		echo $data['Nama'];
  	}
  }
  else{
  	echo "No Data Found";
  }
}
?>