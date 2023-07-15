<?php 
ob_start();
include ("../../config/config.php");
$name  = $_POST['name'];  
$image  = $_POST['image'];  
$description  = $_POST['description'];  

if ($name 	== "" || $image  == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `categories` SET name =  '$name', image = '$image', description = '$description';") or die(mysqli_error($name, $image));
    header('location:../../admin/index.php?page=category');
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
