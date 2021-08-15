<?php 
include '../../config/koneksi.php';
			$gambar = $_FILES['gambar']['name'];
			$file_tmp = $_FILES['gambar']['tmp_name'];	
 			$ket = $_POST['ket'];
			$tanggal_post = date ("Y-m-d H:i:s");
if ($gambar){
					move_uploaded_file($file_tmp, 'foto_galeri/'.$gambar);
			$sql_insert = "INSERT INTO galeri VALUES (NULL, '$gambar', '$ket', '$tanggal_post')";
					$query_insert=mysqli_query($koneksi,$sql_insert);	
					if ($query_insert) {

	echo "<script>
	alert('data berasil di tambahkan');
	window.location = '../../index.php';
	</script>";


}else{
	echo "data gagal ditambahkan";
	echo"<br>";
	echo "<a href='../page/admin/super/post.php'>kembali</a>";
}}else{
	echo "<script>
	alert('Silahkan isi gambar');
	window.location = '../../index.php';
	</script>";
}




?>