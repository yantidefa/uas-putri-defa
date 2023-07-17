<?php 
ob_start();
include "../../config/config.php";


mysqli_query($koneksi, "DELETE FROM products WHERE id = '$_GET[id]' ")
or die(mysqli_error($koneksi));


header('location:../../admin/index.php?page=product&aksi');
 ?>
