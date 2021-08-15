<?php 
include '../../config/koneksi.php';

$tanggal = date("Y-m-d H:i:s");
$nama =$_POST['judul'];

$ket = $_POST['ket'];
$gambar = $_FILES['gambar']['name'];
$tmp =$_FILES['gambar']['tmp_name'];


if (!$gambar){
	echo "<script>
	alert('Tambahkan Gambar Anda');
	window.location = 'form_post.php';
	</script>";

}else{
	move_uploaded_file($tmp,'foto_pers/'.$gambar);
	$sql_insert="INSERT INTO berita Values(NULL,'$ket','$gambar','$tanggal','$ket' ) ";
	$query=mysqli_query($koneksi,$sql_insert);
	if($query){
		echo "<script>
	alert('Input Data Berita Berhasil');
	window.location = '../../index.php';
	</script>";

	}else
	{
		echo "<script>
	alert('Input Data Berita Gagal');
	window.location = 'form_post.php';
	</script>";

	}
}




?>