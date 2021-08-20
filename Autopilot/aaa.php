<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<input type="text" name="nama" list="nama">
	<?php include_once 'nip.php';?>
	<datalist id="nama">
		<?php 
		include '../koneksi.php';
		$query = mysqli_query($koneksi, "SELECT Nama from datapegawai");
		while ($data = mysqli_fetch_assoc($query)) { 
		?>
			<option><?php echo $data['Nama']; ?></option>
		<?php } ?>
	</datalist>
</form>
</body>
</html>