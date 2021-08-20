<?php 
include '../koneksi.php';


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $data = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE NIP = '$username' AND Password ='$password'");
  $cek = mysqli_num_rows($data);

  if ($cek > 0){
    $data = mysqli_fetch_assoc($data);

    session_start();
    if ($data['level'] == 'Admin'){
      $_SESSION['username'] = $username;
      $_SESSION['nama'] = $data['Nama'];
      $_SESSION['level'] = 'Admin';
      $_SESSION['login'] = true;
      header('location:../Admin/admin.php');
    }
    elseif ($data['level']=='User') {
      $_SESSION['username'] = $username;
      $_SESSION['nama'] = $data['Nama'];
      $_SESSION['level'] = 'User';
      $_SESSION['login'] = true;
      header('location:../Admin/admin.php');
    }
  }
  else{
    header('location:../index.php');
  }
}
?>