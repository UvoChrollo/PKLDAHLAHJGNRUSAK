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
                  <h3 align="center">Daftar Kegiatan Anda</h3>
                  <table class="table table-dark table-striped" align="center" id="data">
                    <thead>
                    <tr align="center">
                      <td>SPPD</td>
                      <td>Tanggal</td>
                      <td>Nama</td>
                      <td>Kegiatan</td>
                      <td>Biaya</td>
                      <td>Keterangan</td>
                      <td>Total</td>
                      <td style="width: 100px;">Aksi</td>
                    </tr>
                    </thead>
                    <?php 
                      include '../koneksi.php';
                      $nama = $_SESSION['nama'];
                      $query_mysqli = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE nama = '$nama'")or die(mysqli_error());
                      while ($data = mysqli_fetch_array($query_mysqli)) {
                    ?>
                    <tbody>
                    <tr id="tampil">
                      <td><?php echo $data['sppd'];?></td>
                      <td><?php echo $data['tanggal'];?></td>
                      <td><?php echo $data['nama'];?></td>
                      <td><?php echo $data['kegiatan'];?></td>
                      <td><?php echo $data['biaya'];?></td>
                      <td><?php echo $data['keterangan'];?></td>
                      <td><?php echo $data['total'];?></td>
                      <td align="center">
                            <a href="output.php?sppd=<?php echo $data['sppd']; ?>"><i class="fa fa-eye text-white"></i></a>
                      </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                  </table>
            </div>
            <!-- End of Page Content -->
      </div>
</body>
</html>