<?php 
	$koneksi=mysqli_connect("localhost","root","","db_biodata");

	if(!$koneksi){
		echo "Gagal Koneksi";
		exit();
	}

 ?>