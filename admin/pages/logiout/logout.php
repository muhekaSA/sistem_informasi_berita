<?php 
include '../../config/koneksi.php';

session_start();
if (session_destroy()){
	header("Location:login.php");
}

?> 