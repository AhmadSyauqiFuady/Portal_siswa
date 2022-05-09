<?php

include "../koneksi.php";

$NIP	= $_GET["kode_guru"];



$cek = mysqli_query($konek,"select tugas.kode_tugas as kode_tugas from tugas inner join jawaban_tugas on tugas.kode_tugas = jawaban_tugas.kode_tugas where kode_guru = '$NIP'");


$total = mysqli_num_rows($cek);
$total1 = mysqli_fetch_array($cek);

if($total > 0){
	$temp = $total1['kode_tugas'];
$delete = mysqli_query ($konek, "DELETE FROM jawaban_tugas where kode_tugas = '$temp'");
$delete = mysqli_query ($konek, "DELETE FROM tugas WHERE kode_tugas = '$temp'");
$delete = mysqli_query ($konek, "DELETE FROM jadwal WHERE kode_guru='$NIP'");
$delete = mysqli_query ($konek, "DELETE FROM guru WHERE kode_guru='$NIP'");
$delete = mysqli_query ($konek, "DELETE FROM pengguna WHERE Id_User='$NIP'");

?>
	
	<script type="text/javascript">
	alert("data guru berhasil dihapus!");
	window.location.href="guru.php";
	</script>
<?php
}else{
	
$delete = mysqli_query ($konek, "DELETE FROM tugas WHERE kode_Guru='$NIP'");
$delete = mysqli_query ($konek, "DELETE FROM jadwal WHERE kode_guru='$NIP'");
$delete = mysqli_query ($konek, "DELETE FROM guru WHERE kode_guru='$NIP'");
$delete = mysqli_query ($konek, "DELETE FROM pengguna WHERE Id_User ='$NIP'");
?>
	
	<script type="text/javascript">
	alert("data guru berhasil dihapus!");
	window.location.href="guru.php";
	</script>
<?php

}

?>