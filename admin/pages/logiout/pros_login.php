<?php 
include '../../config/koneksi.php';
	
	$email =$_POST['email'];
	$password=$_POST['password'];
$sql_login = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");
$hasil = mysqli_fetch_array($sql_login);
if (mysqli_num_rows($sql_login)==0){
     
   
      echo "<script>
	alert('Akun Tidak ditemukan');
	window.location = 'login.php';
	</script>";

     }
elseif ($password<>$hasil['password']){
	
	echo "<script>
	alert('Username atau Password Salah');
	window.location = 'login.php';
	</script>";

		} 

     elseif ($hasil['status'] = 1 ) {
        session_start();
        
	$_SESSION['logged_in']= True;
	$_SESSION['id_user']=$hasil['id_user'];
	$_SESSION['email']=$email;
	$_SESSION['nama_user']=$hasil['nama_user'];
	$_SESSION['status']=$hasil['status']; 
       echo "<script>
	alert('Sukses Login');
	window.location = '../../index.php';
	</script>";

    }elseif ($hasil['status']=2) {
    	$_SESSION['id_user']=$hasil['id_user'];
	$_SESSION['email']=$email;
	$_SESSION['nama_user']=$hasil['nama_user'];
	$_SESSION['status']=$hasil['status']; 
		 echo "<script>
	alert('Sukses Login');
	window.location = '../../../index/index.php';
	</script>";
}
  


?>