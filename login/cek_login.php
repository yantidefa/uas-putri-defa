<?php 
@session_start();
include('../config/config.php');
$email     =   addslashes($_POST['email']);
$password  =   addslashes($_POST['password']);
$QUERY     =   mysqli_query($koneksi, "SELECT * FROM `users` WHERE `email` = '$email'");

$HASIL     =   mysqli_num_rows($QUERY);
$DATA      =   mysqli_fetch_array($QUERY);

if ($HASIL==1) {
	$_SESSION['email'] =$DATA['email'];
	$_SESSION['role']  =$DATA['role'];


	if ($DATA['role']=="customer") {
		header("location:../index.php");

	}

	elseif ($DATA['role']=="shop") {
		header("location:../admin/index.php");
    }

    elseif ($DATA['role']!="shop" || $DATA['role']!="customer") {
		header("location:../admin/index.php");
    }
    
	echo("
		<div class='alert alert-danger'>
			<center>
				<strong>LOGIN GAGAL</strong>
				Periksa Kembali Email dan Password Anda!
			<center>
		</div>
		<meta http-equiv='refresh' content=2;'>	");
}
	
	else {
		echo("
		<div class='alert alert-success'>
			<center>
				<strong>LOGIN BERHASIL</strong>
				Anda akan redirect secara otomatis..!
			<center>
		</div>
		<meta http-equiv='refresh' content=2;'> ");
	}

 ?>



