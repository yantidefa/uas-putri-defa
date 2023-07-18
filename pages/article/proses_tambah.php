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

$title = $_POST['title'];
$short_description = $_POST['short_description'];
$description = $_POST['description'];
$caption = $_POST['caption'];
$created_by_name = $_POST['created_by_name'];
$slug = slug($title);


if ($slug==""||
	$image==""||
	$title==""||
	$short_description==""||
	$description==""||
	$created_by_name=="")
 {
 	?>
 	<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<div class='alert-icon'>
			<i class="fas fa-check-circle"></i>
		</div>
		<strong>GAGAL!</strong> pastikan semua data terisi
		<button type='button' class="close" data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>
					<i class='fas fa-frown'></i>
				</span>
		</button>
	</div>	
<?php
}
else {
    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
		$query = mysqli_query($koneksi,"INSERT INTO `article` SET 
			image = '$newFileName',
			title='$title',
			short_description='$short_description',
			description='$description',
			caption='$caption',
			slug='$SLUG ',
			created_by_name='$created_by_name';") or die(mysqli_error($koneksi));
    }
    header('location:../../admin/index.php?page=article&aksi');
?>
	<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<div class='alert-icon'>
			<i class='fas fa-check-circle'></i>
		</div>
		<strong>SUKSES!</strong> Dalam waktu 3 detik halaman akan dialihkan
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>
					&times;
				</span>
		</button>
	</div>
<?php
}
 ?>