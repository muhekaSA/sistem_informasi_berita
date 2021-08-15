<?php 
include '../../config/koneksi.php';
$ket = $_POST['ket'];
$tanggal = date("Y-m-d H:i:s");

$id= $_POST['idb'];
$gambar = $_FILES['gambar']['name'];
$tmp =$_FILES['gambar']['tmp_name'];
$alphaone = move_uploaded_file($tmp,'foto_galeri/'.$gambar);
if ($gambar) {
			move_uploaded_file($tmp,'foto_galeri/'.$gambar);
					if ($alphaone){
						$query_upload = mysqli_query($koneksi,"SELECT * FROM galeri where id_galeri='$id'");
						$data = mysqli_fetch_array($query_upload);
					 	unlink("foto_galeri/".$data['gambar']); 
					 	$query_x = mysqli_query($koneksi,"UPDATE galeri set gambar='$gambar',tanggal='$tanggal',ket_galeri='$ket' where id_galeri='$id'  ");
					 	
					 	if ($query_x){
					 		echo "<script>
							alert('data berasil diubah');
							window.location = '../tables/daftar_galeri.php';
							</script>";
										}else
							{
							echo "<script>
							alert('data gagal diubah');
							window.location = '../tables/daftar_galeri.php';
							</script>";
							}
				
																	  }
		}
	
else{
			 $query_no = "UPDATE galeri set tanggal='$tanggal',ket_galeri='$ket' where id_galeri='$id' ";
			 $sql_no = mysqli_query($koneksi,$query_no);	
}
if($sql_no){
	echo "<script>
	alert('data berasil diubah');
	window.location = '../tables/daftar_galeri.php';
	</script>";
}else
{
	echo "<script>
	alert('data gagal diubah');
	window.location = '../tables/daftar_galeri.php';
	</script>";
}




?>