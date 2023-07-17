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

if ($name 	== "" || $newFileName  == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {

    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
        $QUERY = mysqli_query($koneksi, "INSERT INTO `categories` SET name =  '$name', image = '$newFileName', description = '$description';") or die(mysqli_error($name, $image));
        header('location:../../admin/index.php?page=category&aksi');
    }
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
