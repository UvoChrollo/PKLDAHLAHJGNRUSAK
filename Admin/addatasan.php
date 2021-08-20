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
                  <h4 align="center">Tambah Data Atasan Bagian Perancangan dan Anggaran LLDIKTI Wilayah X</h4>
                  <br>
                  <form class="form-group" method="POST" action="prosesatasan.php">
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pegawai</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" style="background: gainsboro; color: black; width:100%;" list="nama_nama">
                        <datalist id="nama_nama">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT Nama from datapegawai");
                          while ($data = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $data['Nama']; ?></option>
                          <?php } ?>
                        </datalist>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Pangkat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="pangkat" style="background: gainsboro; color: black; width:100%;">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Tambah Data</button>
                  </form>
                  <!-- End of Form Layout -->
            </div>
            <!-- End of Page Content -->
      </div>
      <script src="../style/js/show.js"></script>
</body>
</html>
