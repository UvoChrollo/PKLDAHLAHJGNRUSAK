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
                <button type="button" class="btn btn-primary"><a href="addpegawai.php" style="color: white"><i class="fa fa-plus"></i></a></button>
                <button type="button" class="btn btn-primary" onclick="FormShow()"><i class="fa fa-search"></i></button>
              </div>
              <h4 align="center">Daftar Pegawai LLDIKTI Wilayah X</h4>
              <!-- Fitur Searching -->
              <div class="form-group" id="FoSo" style="display: none">
                  <input type="text" class="form-control" id="search" style="background: gainsboro; color: black; width: 100%">
                </div>
                <!-- End of Searching -->
                <br>
                  <table class="table table-dark table-striped" align="center" id="data">
                    <thead>
                    <tr align="center">
                    	<td>NIP</td>
                    	<td>Nama</td>
                    	<td>Jabatan</td>
                    	<td>Pangkat</td>
                    	<td style="width: 100px;">Aksi</td>
                    </tr>
                    </thead>
                    <?php 
                      $batas = 10;
                      $halaman = isset($_GET['halaman'])?(int)$_GET['halaman']:1;
                      $halaman_awal = ($halaman>1)?($halaman * $batas) - $batas : 0;
                      $previous = $halaman - 1;
                      $next = $halaman + 1;

                      include '../koneksi.php';
                      $data = mysqli_query($koneksi, "select * from datapegawai");
                      $jumlah_data = mysqli_num_rows($data);
                      $total_halaman = ceil($jumlah_data / $batas);

                    	$query_mysqli = mysqli_query($koneksi, "SELECT * FROM datapegawai limit $halaman_awal, $batas")or die(mysqli_error());
                    	while ($data = mysqli_fetch_array($query_mysqli)) {
                    ?>
                    <tbody>
                    <tr id="tampil">
                    	<td><?php echo $data['NIP'];?></td>
                    	<td><?php echo $data['Nama'];?></td>
                    	<td><?php echo $data['Jabatan'];?></td>
                    	<td><?php echo $data['Pangkat'];?></td>
                    	<td align="center">
                    		<a href="editpegawai.php?ID=<?php echo $data['ID']; ?>"><i class="fa fa-pencil text-white"></i></a> <!-- Edit  -->
                        &nbsp;|&nbsp;
                        <a href="../Proses/Pegawai/hapususer.php?ID=<?php echo $data['ID']; ?>"><i class="fa fa-trash text-white"></i></a> <!-- Delete -->
                    	</td>
                    </tr>
                    </tbody>
                <?php } ?>
                  </table>
                  <nav>
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                        </li>
                        <?php 
                        for($x=1;$x<=$total_halaman;$x++){
                          ?> 
                          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                          <?php
                        }
                        ?>        
                        <li class="page-item">
                          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                        </li>
                      </ul>
                    </nav>
            </div>
            <!-- End of Page Content -->
      </div>
<script src="../style/js/show.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
              search = document.getElementById('search').value;
              tampil = document.getElementById('data');
                $.ajax({
                    type: 'POST',
                    url:  'findpegawai.php',
                    data: 'search='+search,
                    cache: false,
                    success: function(data) {
                      $('#data').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>