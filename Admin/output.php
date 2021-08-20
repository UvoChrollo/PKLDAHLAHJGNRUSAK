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
        table, th, td {
          border-width: 2px;
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
              <?php include_once '../Autopilot/nip.php'; ?>
              <img src="twh.png" style="width: 100px; width: 100px;">
              <p style="margin-top: -95px; margin-left: 110px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI<br>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH X (SUMBAR,<br> RIAU, JAMBI DAN KEP. RIAU)</p>
              <hr class="new5" style="margin-top:25px;">
              <h4 align="center">RINCIAN BIAYA PERJALANAN DINAS</h4>
              <div id="Result">
              <?php 
              include '../koneksi.php';
              $sp = $_GET['sppd'];
              $query = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE sppd = '$sp'") or die (mysqli_error());
              while ($data = mysqli_fetch_assoc($query)) {
              ?>
              <span>Lampiran SPPD Nomor</span><span> : </span><span><?php echo $data['sppd'];?></span>
              <br>
              <span>Tanggal</span><span> : </span><span><?php echo $data['tanggal'];?></span>
              <table class="table table-bordered border-dark" align="center" style="display: inline-table; border-width: 2px;">
                <tr align="center" style="border-width: 2px;">
                  <th>No</th>
                  <th>PERINCIAN BIAYA</th>
                  <th>JUMLAH</th>
                  <th>KETERANGAN</th>
                </tr>
                <tr style="border-width: 2px;">
                  <td align="center">1</td>
                  <td>
                  <?php echo $data['nama'];?><br><br>
                  <?php 
                  $kg = explode("<br>", $data['kegiatan']);
                  foreach ($kg as $kegiatan) {
                    echo "- ".$kegiatan."<br>";
                  }
                  ?>
                  </td>
                  <td align="right">
                    <br><br>
                    <?php 
                    $by = explode("<br>", $data['biaya']);
                    foreach ($by as $biaya) {
                      echo number_format($biaya)."<br>";
                    }
                    ?>
                  </td>
                  <td align="center">
                      <br><br>
                    <?php echo $data['keterangan']; ?>
                  </td>
                  <tr>
                    <td colspan="2" align="center">JUMLAH</td>
                    <td align="right">
                      <?php 
                      echo number_format($data['total']);
                      ?>
                    </td>
                  </tr>
                </tr>
                <tr style="border-width: 2px;">
                  <td colspan="4">
                    Terbilang <i><?php echo $data['terbilang'];?></i>  
                  </td>
                </tr>
              </table>
              </div>

              <div style="float: left;">
              <p style="color: white">a</p>
              Telah dibayar sejumlah
              <p>Rp <?php echo number_format($data['total']); ?></p>
              <p>Bendahara Pengeluaran Pembantu</p><br><br>
              <u><p><?php echo AtasaNama('Bendahara Pengeluaran Pembantu'); ?></p></u>
              <p style="margin-top: -23px;">NIP <?php echo AtasaNip('Bendahara Pengeluaran Pembantu'); ?></p>
              </div>

              <div style="margin-left: 780px;">
              <p>Padang , <?php echo date("d-m-Y"); ?></p>
              Telah menerima uang sebesar
              <p>Rp <?php echo number_format($data['total']); ?></p>
              <p>Yang Menerima</p><br><br>
              <u><p><?php echo $data['nama']; ?></p></u>
              <p style="margin-top: -23px;">NIP <?php echo $data['nip_pegawai']; ?></p>
              </div>

              <div>
                <hr class="new5" style="margin-top: 40px;">
                <h4 align="center">PERHITUNGAN SPPD RAMPUNG</h4>
                <p>Ditetapkan sejumlah<span style="margin-left: 120px;">Rp. <?php echo number_format($data['total']); ?></span></p>
                <p style="margin-top: -15px">Yang telah dibayar semula<span style="margin-left: 75px;">Rp. 0</span></p>
                <p style="margin-top: -15px">Sisa kurang / lebih<span style="margin-left: 135px;">Rp. <?php echo number_format($data['total']); ?></span></p>
              </div>

              <div style="float: left;">
              <p style="color: white">a</p>
              <p style="color: white">a</p>
              <p style="color: white">a</p>
              <p>Menyetujui</p>
              <p>Pejabat Pembuat Komitmen</p><br><br>
              <u><p><?php echo AtasaNama('Pejabat Pembuat Komitmen') ?></p></u>
              <p style="margin-top: -23px;">NIP <?php echo AtasaNip('Pejabat Pembuat Komitmen'); ?></p>
              </div>

              <div style="float: right;">
              <p style="color: white"></p>
              <p style="color: white">Rp <?php echo number_format($total); ?></p>
              <div style="margin-top: 26px; margin-left: 421px;">
              <p>Mengetahui,</p>
              <p>Bendahara Pengeluaran</p><br><br>
              <u><p><?php echo AtasaNama("Bendahara Pengeluaran"); ?></p></u>
              <p style="margin-top: -23px;">NIP <?php echo AtasaNip("Bendahara Pengeluaran"); ?></p>
              </div>
              </div>

              <?php } 
              unset($_SESSION['SPPD']);
              ?>
            </div>
            <!-- End of Page Content -->
      </div>
</body>
</html>