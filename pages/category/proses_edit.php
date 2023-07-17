<?php
include ("../../config/config.php");
	$id   =	$_POST['id'];	
	$name  	=	$_POST['name'];
	$description  	=	$_POST['description'];
	$image  	=	$_POST['image'];

if ($id=="" || $name==""|| $image=="" ){

}

else {

$query = mysqli_query ($koneksi,"UPDATE categories SET     	
	name = '$name' ,     	
	description = '$description' ,     	
	image = '$image' WHERE id='$id';")
 or die(mysqli_error($koneksi));

 header('location:../../admin/index.php?page=category');

?>		

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan</h4>

</div>
<?php 
}
 ?>

