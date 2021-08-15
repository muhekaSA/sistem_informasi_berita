<?php 
include '../../config/koneksi.php';
$id=$_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM perusahaan where id_pers='$id'");
if(!$query){
	echo "<script>
	alert('Failed Delete Data');
	window.location = 'list_mitra.php';
	</script>";

}else
{
	echo "<script>
	alert('Succses Delete');
	window.location = 'list_mitra.php';
	</script>";

}

?>