<?php 
 $page	=	isset($_GET['aksi']);
 switch ($page) {
 		case 'tambah':
 			include "tambah.php";
 			break;
 		case 'proses_tambah':
 		    include "proses_tambah.php";
 		    break;
 		case 'edit':
 			include "edit.php";
 			break;
 		case 'edit':
 		    include "proses_edit.php";
 		    break;
 		case 'hapus':
 			include "hapus.php";
 			break;
 		default:
 			include "tampil.php";
 			break;
 	}
 	 ?>