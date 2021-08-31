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
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include 'header.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
              <div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
                <button type="button" class="btn btn-primary" onclick="ShowBulan()">Bulan</button>
              </div>
              <h4 align="center">Daftar Kegiatan LLDIKTI Wilayah X</h4>
              <!-- Fitur Searching -->
                <form class="form-group" id="FoSoYear" style="display: none;">
                <input type="text" class="form-control" name="inp" style="background: gainsboro; color: black; width: 100%" list="bulan">
                  <datalist id="bulan">
                          <?php 
                          include '../koneksi.php';
                          $query = mysqli_query($koneksi, "SELECT DISTINCT(yearmonth) from kegiatan");
                          while ($data = mysqli_fetch_assoc($query)) { 
                          ?>
                            <option><?php echo $data['yearmonth']; ?></option>
                          <?php } ?>
                        </datalist>
                </form>
                <!-- End of Searching -->
                <br>
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
                    if (isset($_GET['inp'])) {
                        $pro = $_GET['inp'];

                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE yearmonth = '$pro'")or die(mysqli_error());
                        while($data = mysqli_fetch_assoc($query)){
                  ?>
                  <tbody>
                  <tr id="tampil">
                    <td><?php echo $data['sppd'];?></td>
                    <td><?php echo $data['tanggal'];?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['kegiatan'];?></td>
                    <td><?php echo $data['biaya'];?></td>
                    <td><?php echo $data['keterangan'];?></td>
                    <td><?php echo number_format($data['total']);?></td>
                    <td align="center">
                          <a href="output.php?sppd=<?php echo $data['sppd']; ?>"><i class="fa fa-eye text-white"></i></a> <!-- Edit  -->
                          &nbsp;|&nbsp;
                          <a href="../Proses/Pegawai/hapuskegiatan.php?sppd=<?php echo $data['sppd']; ?>"><i class="fa fa-trash text-white"></i></a> <!-- Delete -->
                    </td>
                  </tr>
                  </tbody>
                  <?php }} ?>
                </table>
            </div>
            <!-- End of Page Content -->
      </div>
      <script src="../style/js/show.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>