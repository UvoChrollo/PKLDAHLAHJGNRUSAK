<?php 
function Total($SPPD)
{
	include '../koneksi.php';

	$query = mysqli_query($koneksi, "SELECT total FROM kegiatan WHERE sppd = '$SPPD'");
	while ($data = mysqli_fetch_assoc($query)){
		$total = $data['total'];
	}
	return $total;
}
?>