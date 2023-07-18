<?php 
ob_start();
include ("../../config/config.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/user/';

$id  = $_POST['id'];  
$name  = $_POST['name'];  
$email  = $_POST['email'];  
$password  = md5('password');  
$gender  = $_POST['gender'];  
$role  = $_POST['role'];  
$address  = $_POST['address'];  
$no_telp = $_POST['no_telp'];  

if ($name 	== "" || $email  == "" || $password == "" ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
        $query = mysqli_query ($koneksi,"UPDATE users SET     	
        name = '$name',     	
        email = '$email',     	
        password = '$password',     	
        gender = '$gender',     	
        role = '$role',     	
        address = '$address',     	
        no_telp = '$no_telp',     	
        image = '$newFileName' WHERE id='$id';")
     or die(mysqli_error($koneksi));
    }
    header('location:../../admin/index.php?page=user&aksi');
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
