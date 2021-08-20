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
</head>
<body>
      <div class="wrapper d-flex align-items-stretch">
      	<!-- Navigation Bar -->
      	<?php include_once 'header.php'; ?>
      	<!-- End of Navigation Bar -->

            <!-- Page Content -->
            <div id="content" class="p-4 p-md-5 pt-5">
              <div class="btn-group" role="group" aria-label="Basic example" style="float: right;">
              </div>
              <h4 align="center">RINCIAN BIAYA PERJALANAN DINAS</h4>
              <form class="form-group" method="POST" action="proseskegiatan.php" style="width: 100%">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Lampiran SPPD</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" name="SPPD" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>

                    <div class="ui-widget">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Nama Pegawai</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Nama" style="background: gainsboro; color: black; width: 100%;" list="nama_pegawai">
                        <?php include_once '../Autopilot/nip.php';?>
                        <datalist id="nama_pegawai">
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
                    </div>

                    <div class="row mb-3" id="activity">
                      <label class="col-sm-2 col-form-label">Kegiatan</label>
                      <div class='col-sm-10'>
                        <input type='text' class='form-control' name='Kegiatan[]' style='background: gainsboro; color: black; width: 100%;'>
                        <br>
                      </div>
                    </div>

                    <div class="row mb-3" id="biaya">
                      <label class="col-sm-2 col-form-label">Biaya Kegiatan</label>
                      <div class='col-sm-10'>
                        <div class="form-inline row">
                        <input type='text' class='form-control' id="BiayaKegiatan" style='background: gainsboro; color: black; width: 600px; margin-left: 15px'>&nbsp;&nbsp;
                        <input type="text" id="Qty" class="form-control" style="background-color: gainsboro; width: 97px;" oninput="Count()">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" id="total" class="form-control" style="background-color: gainsboro; width: 180px;" name='Biaya[]' readonly>
                        </div>
                        <br>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Keterangan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Keterangan" style="background: gainsboro; color: black; width: 100%;">
                      </div>
                    </div>
                    <button class='btn btn-primary' type="button" id='add_button'><i class="fa fa-plus"></i></button>
                    <button class='btn btn-danger' type="button" id='deleteButton'><i class="fa fa-times"></i></button>
                    <input type="reset" class="btn btn-danger">
                    <button class="btn btn-primary" style="float: right;" name="submit">Hasil</button>
              </form>
            </div>
            <!-- End of Page Content -->
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      var addButton = $('#add_button'); //Add button selector
      var fieldHTMLKegiatan = '<div class="row mb-3" id="activity2"><label class="col-sm-2 col-form-label" style="padding-left: 20px;">Kegiatan</label><div class="col-sm-10" style="padding-left: 21px; width: 500px;"><input type="text" class="form-control" name="Kegiatan[]" style="background: gainsboro; color: black; width: 103%;"></div></div>'
      
      var x = 1; //Initial field counter is 1
      //Once add button is clicked
      $("#add_button").click(function(){
          //Check maximum number of input fields
          if(x <= 6){ 
              x++; //Increment field counter
              var fieldHTMLBiaya = '<div class="row mb-3" id="biaya2"><label class="col-sm-2 col-form-label" style="padding-left: 20px;">Biaya Kegiatan</label><div class="col-sm-10" style="padding-left: 21px; width: 500px;"><div class="form-inline row"><input type="text" id="BiayaKegiatan'+x+'" class="form-control" style="background: gainsboro; color: black; width: 600px; margin-left: 15px;">&nbsp;&nbsp;<input type="text" name="Qty" id="Qty'+x+'" class="form-control" style="background-color: gainsboro; width: 97px;" oninput="CountDynamic('+x+')">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="total'+x+'" class="form-control" style="background-color: gainsboro; width: 180px;" name="Biaya[]" readonly></div></div></div>'
              $("#activity").append(fieldHTMLKegiatan); //Add field html
              $("#biaya").append(fieldHTMLBiaya); //Add field html
          }
          else{
            window.alert("Maaf, Limit Dari Input Rincian Kegiatan Hanyalah 5");
          }
      });
      $(document).on("click", "#deleteButton", function() {
          $("#activity2").remove();
          $("#biaya2").remove();
      });
  });
</script>

<script type="text/javascript">
  function Count() {
    const x = document.getElementById('BiayaKegiatan').value;
    const y = document.getElementById('Qty').value;
    const z = x * y;
    document.getElementById('total').value = z;
  }

  function CountDynamic(angka){
      var x = document.getElementById("BiayaKegiatan"+angka).value;
      var y = document.getElementById("Qty"+angka).value;
      var z = x * y;
      document.getElementById("total"+angka).value = z;
    }
</script>
</body>
</html>