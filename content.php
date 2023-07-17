<?php 
 	@$page = $_GET['page'];
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
 		case 'isi_post':
 			include "isi_post.php";
 			break;
        case 'product':
            include "product.php";
            break;
 		default:
 			include "post.php";
 			break;
 	}
 	 ?>