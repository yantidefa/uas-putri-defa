<?php 
ob_start();
include ("../../config/config.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/products/';

$name  = $_POST['name'];  
$gender  = $_POST['gender'];  
$role  = $_POST['role'];  
$address  = $_POST['address'];  
$email  = $_POST['email'];  
$no_telp  = $_POST['no_telp'];  
$password   = md5('password');

if ($name 	== "" || $gender  == "" || $email == "" || $password == "") 
{
	?>
<div class="col-sm-12">
	<div class="alert alert-block alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="icon-remove"></i>
		</button>

		<i class="icon-warning-sign red"></i>
		Pastikan Semua Form Terisi !!!	
	</div>
</div>
<?php

}
else {

    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
        $QUERY = mysqli_query($koneksi, "INSERT INTO `users` SET name =  '$name', image = '$newFileName', gender = '$gender', email = '$email', password = '$password', no_telp = '$no_telp', role = '$role', address = '$address';") or die(mysqli_error($koneksi));
    }
    header('location:../../admin/index.php?page=user&aksi');
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Suksess!</strong> Data Berhasil Ditambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php 
}
 ?>
