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
$created_by_updated = $_POST['updated_by_name'];
$slug = slug($title);

if ($title 	== "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
		$query = mysqli_query ($koneksi,"UPDATE article SET     	
		image = '$newFileName',
			title='$title',
			short_description='$short_description',
			description='$description',
			caption='$caption',
			slug='$slug ',
			created_by_updated='$created_by_updated' WHERE id='$id';")
	 or die(mysqli_error($koneksi));
	}
    header('location:../../admin/index.php?page=article&aksi');
?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    Selamat Data Berhasil Disimpan
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
   </button>
</div>
<?php 
}
 ?>
