<?php 
$page	=	$_GET['page'];
switch ($page) {
	
	case 'category':
		include "../pages/category/category.php";
		break;

	case 'company':
		include "../pages/company/company.php";
		break;


	default:
		include "../pages/dashboard.php";
		break;
}
 ?>