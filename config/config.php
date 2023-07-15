<?php 
//Definisikan koneksi ke database
$Server="localhost";
$Username="root";
$Password="";
$Database="db_bahan_pangan";

$koneksi = mysqli_connect($Server,$Username,$Password,$Database);
//check koneksi
if (mysqli_connect_error()) {
	echo "koneksi database gagal!" .mysqli_connect_error($koneksi);
}



 ?>