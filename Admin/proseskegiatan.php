<?php 
include '../Autopilot/nip.php';
include '../koneksi.php';

if (isset($_POST['submit'])){

	$total = 0;
	$Biaya_array = $_POST['Biaya'];
	foreach ($Biaya_array as $value) {
		$total += $value;
	}
	
	 $SPPD = $_POST['SPPD'];
	 $tanggal = $_POST['tanggal'];
	 $Nama = $_POST['Nama'];
	 $kegiatan = implode("<br>", $_POST['Kegiatan']);
	 $duit = implode("<br>", $_POST['Biaya']);
	 $Keterangan = $_POST['Keterangan'];
	 $a = "Bendahara Pengeluaran Pembantu";
	 $b = "Pejabat Pembuat Komitmen";
	 $c = "Bendahara Pengeluaran Pembantu";
	 $d = "Bendahara Pengeluaran Pembantu";
	 $nip_pegawai = NIP($Nama);
	 $my = date("M Y",strtotime($tanggal));

	 session_start();
	 $_SESSION['SPPD'] = $SPPD;

	 mysqli_query($koneksi, "INSERT INTO kegiatan VALUES('$SPPD', '$tanggal', '$Nama', '$kegiatan', '$duit', '$Keterangan', '$nip_pegawai', '$a', '$b', '$c', '$d', '$total','$my')") or die (mysqli_error());
	 header('location:preoutput.php');
}
?>