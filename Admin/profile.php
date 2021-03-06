<!DOCTYPE html>
<html>
<head>
      <title>Admin Page</title>
	<!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'header.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
                  <h4 align="center">Edit Data Admin LLDIKTI Wilayah X</h4>

                  <!-- Form Layout --> 
                  <?php 
                  include '../koneksi.php';
                  // session_start();
                  $username = $_SESSION['username'];
                  $query = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE NIP = '$username'") or die (mysqli_error());
                  while ($data = mysqli_fetch_assoc($query)) {
                  ?>
                  <form class="form-group" method="POST">
                  <div class="row mb-3">
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="ID" value="<?php echo $data['ID'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>
                    
                   <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">NIP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" value="<?php echo $data['NIP'];?>" style="background: gainsboro; color: black; width:100%;" readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nama" value="<?php echo $data['Nama'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['Password'];?>" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>

                    <div class="form-check form-switch">
                      <div class="col-sm-10">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="Rubah()">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Update Data</button>
                    <?php } ?>
                  </form>
                  <!-- End of Form Layout -->
            </div>
            <!-- End of Page Content -->
      </div>
      <script src="../style/js/show.js"></script>
</body>
</html>

<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {
  
$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$Password = $_POST['password'];
 
mysqli_query($koneksi, "UPDATE datapegawai SET Nama='$Nama', Password='$Password' WHERE ID='$ID'") or die(mysqli_error());
header("location:profile.php");
}
?>
