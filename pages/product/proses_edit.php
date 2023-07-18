<?php 
ob_start();
include ("../../config/config.php");
$file = $_FILES['file'];
$image = $file['name'];
$fileTmpName = $file['tmp_name'];
$currentDateTime = date('Ymd_His');
$newFileName = $currentDateTime . '_' . $image;
$target = '../../images/products/';

$id  = $_POST['id'];  
$name  = $_POST['name'];  
$description  = $_POST['description'];  
$price  = $_POST['price'];  
$category_id  = $_POST['category_id'];  
$updated_by_name  = $_POST['updated_by_name'];  
$updated_by_role  = $_POST['updated_by_role'];  
$updated_at = $_POST['updated_at'];  

if ($name 	== "" || $image  == "" || $price == "" || $description == "") 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
    $gambar = move_uploaded_file($fileTmpName, $target.$newFileName);
	if ($gambar) {
        $query = mysqli_query ($koneksi,"UPDATE products SET     	
        name = '$name',     	
        price = '$price',     	
        category_id = '$category_id',     	
        updated_by_name = '$updated_by_name',     	
        updated_by_role = '$updated_by_role',     	
        updated_at = '$updated_at',     	
        description = '$description',     	
        image = '$newFileName' WHERE id='$id';")
     or die(mysqli_error($koneksi));
    }
    header('location:../../admin/index.php?page=product&aksi');
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
