<?php 
$page	=	$_GET['page'];
switch ($page) {
	
	case 'category':
		include "../pages/category/category.php";
		break;

	case 'company':
		include "../pages/company/company.php";
		break;

	case 'user':
		include "../pages/user/user.php";
		break;

	case 'order':
		include "../pages/order/order.php";
		break;

	case 'product':
		include "../pages/product/product.php";
		break;

	case 'article':
		include "../pages/article/article.php";
		break;


	default:
		include "../pages/dashboard.php";
		break;
}
 ?>