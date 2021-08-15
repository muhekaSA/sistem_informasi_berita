<?php 
include '../../config/koneksi.php';
$id=$_GET['id'];
$query=mysqli_query($koneksi,"DELETE from galeri where id_galeri='$id'");
if(!$query){
	echo "<script>
	alert('Failed Delete Data');
	window.location = 'daftar_galeri.php';
	</script>";

}else
{
	echo "<script>
	alert('Succses Delete');
	window.location = 'daftar_galeri.php';
	</script>";

}

?>