

<?php 
$valid_pages = ['login', 'signup', 'wayfinding', 'category-list', 'detail-page', 'complete'];

$page = isset($_GET['page']) && in_array($_GET['page'], $valid_pages) ? $_GET['page'] : 'login';
?>

<body>
	<header>
		<?php include('masthead.php'); ?>
	</header>

	<nav>
		<ul>
			<li><a href="?page=login">Login</a></li>
			<li><a href="?page=signup">Sign Up</a></li>
			<li><a href="?page=wayfinding">Wayfinding</a></li>
			<li><a href="?page=category-list">Category List</a></li>
			<li><a href="?page=detail-page">Detail Page</a></li>
			<li><a href="?page=complete">Complete</a></li>
		</ul>
	</nav>


	<main>
		<?php include($page . '.php'); ?>
	</main>
</body>

	<footer>
		<?php include('footer.php'); ?>
	</footer>
</html>

