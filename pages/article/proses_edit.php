<?php 
ob_start();
include ("../../config/config.php");
include ("seo.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/article/';

$id  = $_POST['id'];  
$title = $_POST['title'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$caption = $_POST['caption'];
$updated_by_name = $_POST['updated_by_name'];
$slug = slug($title);


if (empty($gambar)) {
	$query = mysqli_query($koneksi,"UPDATE `article` SET  
	        title='$title',
			short_description='$short_description',
			description='$description',
			caption='$caption',
			slug='$slug ',
			updated_by_name='$updated_by_name' WHERE id='$id';") or die(mysqli_error($koneksi));
}else {
	$gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	$query = mysqli_query($koneksi,"UPDATE `article` SET  
			image = '$newFileName',
			title='$title',
			short_description='$short_description',
			description='$description',
			caption='$caption',
			slug='$slug ',
			updated_by_name='$updated_by_name' WHERE id='$id';") or die(mysqli_error($koneksi));
}

header('location:../../admin/index.php?page=article&aksi');

?>
