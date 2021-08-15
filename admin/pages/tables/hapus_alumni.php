<?php 
include '../../config/koneksi.php';
$id=$_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM user where id_user='$id'");
if(!$query){
	echo "<script>
	alert('Failed Delete Data');
	window.location = 'list_alumni.php';
	</script>";

}else
{
	echo "<script>
	alert('Succses Delete');
	window.location = 'list_alumni.php';
	</script>";

}

?>