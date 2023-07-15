<?php 
$page	=	$_GET['page'];
switch ($page) {
	
	case 'category':
		include "../pages/category/category.php";
		break;


	default:
		include "../pages/dashboard.php";
		break;
}
 ?>