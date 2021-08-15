<?php 
include '../../config/koneksi.php';
$id=$_GET['id'];
$query=mysqli_query($koneksi,"DELETE from berita where id_berita='$id'");
if($query){
	echo "<script>
	alert('Success Delete Data');
	window.location = 'daftar_berita.php';
	</script>";

}else
{
	echo "<script>
	alert('Failed to Delete');
	window.location = 'daftar_berita.php';
	</script>";

}

?>