<tr align="center">
	<td>NIP</td>
	<td>Nama</td>
	<td>Jabatan</td>
	<td>Pangkat</td>
	<td style="width: 100px;">Aksi</td>
</tr>
<?php
if (isset($_POST['search'])){
	include '../koneksi.php';

	$search = $_POST['search'];
	$mysqli_query = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE Nama LIKE '%$search%'") or die (mysqli_error());
	while ($data = mysqli_fetch_array($mysqli_query)){
?>
<tr>
		<td><?php echo $data['NIP'];?></td>
		<td><?php echo $data['Nama'];?></td>
		<td><?php echo $data['Jabatan'];?></td>
		<td><?php echo $data['Pangkat'];?></td>
		<td align="center">
		<a href="editpegawai.php?ID=<?php echo $data['ID']; ?>"><i class="fa fa-pencil text-white"></i></a> <!-- Edit  -->
	    &nbsp;|&nbsp;
	    <a href="../Proses/Pegawai/hapususer.php?ID=<?php echo $data['ID']; ?>"><i class="fa fa-trash text-white"></i></a> <!-- Delete -->
		</td>
	<?php }} ?>
</tr>