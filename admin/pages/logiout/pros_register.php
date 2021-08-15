<?php 
include '../../config/koneksi.php';
$user = $_POST['nama'];
$mail = $_POST['mail'];
$pass = $_POST['password'];
$stat = 2;

$query = mysqli_query($koneksi,"INSERT INTO user values(NULL,'$user','$mail','$pass','$stat') ");
if ($query){

	  echo "<script>
	alert('Berhasil Daftar, Silahkan Login');
	window.location = 'login.php';
	</script>";
}else
{
	  echo "<script>
	alert('Tidak dapat, Mendaftar, Kembali ke LOGIN ?');
	window.location = 'login.php';
	</script>";
}


?> 