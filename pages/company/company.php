<?php 
$page = isset($_GET['aksi']);
switch ($page) {
	
    case 'edit':
        include "edit.php";
        break;

    case 'edit':
        include "proses_edit.php";
        break;


    default:
        include "tampil.php";
        break;
}
 ?>