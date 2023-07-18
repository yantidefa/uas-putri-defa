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
$category_id  = $_POST['category_id'];  
$price  = $_POST['price'];  
$description  = $_POST['description'];  
$created_by_name  = $_POST['created_by_name'];  
$created_by_role  = $_POST['created_by_role'];  

if ($name 	== "" || $image  == "" || $description == "" || $category_id == "" || $price == "" || $created_by_name == "") 
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
        $QUERY = mysqli_query($koneksi, "INSERT INTO `products` SET name =  '$name', image = '$newFileName', description = '$description', category_id = '$category_id', price = '$price', created_by_name = '$created_by_name', created_by_role = '$created_by_role';") or die(mysqli_error($koneksi));
    }
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Suksess!</strong> Data Berhasil Ditambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<meta http-equiv="refresh" content="1; url=../../admin/index.php?page=product&aksi=tampil">
<?php 
}
 ?>
