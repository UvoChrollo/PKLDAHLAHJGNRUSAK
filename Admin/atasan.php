<!DOCTYPE html>
<html>
<head>
      <title>Admin Page</title>
	<!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


      <link rel="stylesheet" href="../style/css/style.css">
      <style type="text/css">
        hr.new5 {
          color: black;
          border: 3px solid black;
          border-radius: 5px;
        }
        </style>
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'header.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
              <div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
                <button type="button" class="btn btn-primary"><a href="addatasan.php" style="color: white"><i class="fa fa-plus"></i></a></button>
              </div>
              <h3 align="center">Pegawai Keuangan</h3>

                <table class="table table-dark table-striped" align="center" id="data">
                  <thead>
                  <tr align="center">
                    <td>Pangkat</td>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td style="width: 100px;">Aksi</td>
                  </tr>
                  </thead>
                  <?php 
                    include '../koneksi.php';
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM atasan ")or die(mysqli_error());
                    while ($data = mysqli_fetch_array($query_mysqli)) {
                  ?>
                  <tbody>
                  <tr id="tampil">
                    <td><?php echo $data['pangkat'];?></td>
                    <td><?php echo $data['nip'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td align="center">
                      <a href="editatasan.php?pangkat=<?php echo $data['pangkat']; ?>"><i class="fa fa-pencil text-white"></i></a>
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