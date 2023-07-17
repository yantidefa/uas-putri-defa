<?php 
ob_start();
include ("../../config/config.php");
$id  = $_POST['id'];  
$name  = $_POST['name'];  
$image  = $_POST['image'];  
$description  = $_POST['description'];  
$address  = $_POST['address'];  
$email  = $_POST['email'];  
$contact  = $_POST['contact'];  

if ($name 	== "" || $image  == "" || $address == "" || $description == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$query = mysqli_query ($koneksi,"UPDATE company SET     	
	name = '$name' ,     	
	address = '$address' ,     	
	email = '$email' ,     	
	contact = '$contact' ,     	
	description = '$description' ,     	
	image = '$image' WHERE id='$id';")
 or die(mysqli_error($koneksi));
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
