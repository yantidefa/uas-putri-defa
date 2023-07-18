<?php 
ob_start();
include ("../../config/config.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/';

$id  = $_POST['id'];  
$name  = $_POST['name'];  
$description  = $_POST['description'];  
$address  = $_POST['address'];  
$email  = $_POST['email'];  
$contact  = $_POST['contact'];  

if ($name 	== "" || $image  == "" || $address == "" || $description == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
		$query = mysqli_query ($koneksi,"UPDATE company SET     	
		name = '$name' ,     	
		address = '$address' ,     	
		email = '$email' ,     	
		contact = '$contact' ,     	
		description = '$description' ,     	
		image = '$newFileName' WHERE id='$id';")
	 or die(mysqli_error($koneksi));
	}
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
