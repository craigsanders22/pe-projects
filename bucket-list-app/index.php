

<?php 
$valid_pages = ['login', 'signup', 'wayfinding', 'category-list', 'detail-page', 'complete'];

$page = isset($_GET['page']) && in_array($_GET['page'], $valid_pages) ? $_GET['page'] : 'login';
?>


		<?php include('masthead.php'); ?>





		<?php include($page . '.php'); ?>
	

	
		<?php include('footer.php'); ?>
	


