<?php 
header('Content-Type: application/json; charset=utf8');
include '../koneksi.php';

$nama = $_GET['query'];
$query = mysqli_query($koneksi, "SELECT * FROM datapegawai WHERE Nama LIKE '%$nama%'");

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach ($result as $data) {
	$output['suggestion'][] = [
		'value' => $data['Nama'];
		'nama' => $data['Nama'];
	];

	if (!empty($output)){
		echo json_encode($output);
	}
}
?>