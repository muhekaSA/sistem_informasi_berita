<?php 
include '../../config/koneksi.php';
$id=$_POST['idb'];
$tanggal = date("Y-m-d H:i:s");
$judul =$_POST['judul'];

$ket = $_POST['ket'];
$gambar = $_FILES['gambar']['name'];
$tmp =$_FILES['gambar']['tmp_name'];
$alphaone = move_uploaded_file($tmp,'foto_pers/'.$gambar);

		if ($gambar) {
			move_uploaded_file($tmp,'foto_pers/'.$gambar);
					if ($alphaone){
						$query_upload = mysqli_query($koneksi,"SELECT * FROM berita where id_berita='$id'");
						$data = mysqli_fetch_array($query_upload);
					 
					 	unlink("foto_pers/".$data['foto']); 
					 	$query_x = mysqli_query($koneksi,"UPDATE berita set berita='$ket',foto='$gambar',tanggal='$tanggal',judul_berita='$judul' where id_berita='$id'  ");
					 	
					 	if ($query_x){
					 		echo "<script>
							alert('data berasil diubah');
							window.location = '../tables/daftar_berita.php';
							</script>";
										}else
							{
							echo "<script>
							alert('data gagal diubah');
							window.location = '../tables/daftar_berita.php';
							</script>";
							}
				
																	  }
		}
	
else{
			 $query_no = "UPDATE berita set berita='$ket', tanggal='$tanggal',judul_berita='$judul' where id_berita='$id' ";
			 $sql_no = mysqli_query($koneksi,$query_no);	
}
if($sql_no){
	echo "<script>
	alert('data berasil diubah');
	window.location = '../tables/daftar_berita.php';
	</script>";
}else
{
	echo "<script>
	alert('data gagal diubah');
	window.location = '../tables/daftar_berita.php';
	</script>";
}




?>