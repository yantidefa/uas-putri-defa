<?php 
ob_start();
include ("../../config/config.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/category/';

$name  = $_POST['name'];  
$description  = $_POST['description'];  

if ($name 	== "" || $image  == "" || $description == "") 
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
header('location:../../admin/index.php?page=category&aksi=tambah');
}
else {

    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
        $QUERY = mysqli_query($koneksi, "INSERT INTO `categories` SET name =  '$name', image = '$newFileName', description = '$description';") or die(mysqli_error($name, $image));
    }
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Suksess!</strong> Data Berhasil Ditambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<meta http-equiv="refresh" content="1; url=../../admin/index.php?page=category&aksi=tampil">
<?php 
// header('location:../../admin/index.php?page=category&aksi');
}
 ?>
