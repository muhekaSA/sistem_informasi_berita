<?php
include '../../config/koneksi.php';

$nmpers = $_POST['nmpers'];
$ket = $_POST['ket'];
$tanggal = date("Y-m-d");
$query=mysqli_query($koneksi,"INSERT into lowongan Values(NULL,'$nmpers','$ket','$tanggal')  ");
if(!$query){
	
	echo "<script>
	alert('Failed INSERT Data, Call The Administrator');
	window.location = 'post_lamaran.php';
	</script>";
}else{
	echo "<script>
	alert('Sukses INSERT Data');
	window.location = 'post_lamaran.php';
	</script>";
}


?>