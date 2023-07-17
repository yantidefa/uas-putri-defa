<?php 
ob_start();
include ("../../config/config.php");
$name  = $_POST['name'];  
$image  = $_POST['image'];  
$description  = $_POST['description'];  
$address  = $_POST['address'];  

if ($name 	== "" || $image  == "" || $address == "" || $description == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `company` SET name =  '$name', image = '$image', description = '$description', address = '$address';") or die(mysqli_error($name, $image, $address, $description));
    header('location:../../admin/index.php?page=company');
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
