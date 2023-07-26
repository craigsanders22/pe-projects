<!DOCTYPE html>

<?php 

	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}
	else {
		$page = "home";
	}
 ?>

<!--
	pages: home, flowers, detail
-->



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flower Zone</title>
</head>



<body>
	<header>
		<?php include('site-menu.php'); ?>

	</header>

	<main>
		<?php

		if ($page == "home") { 
		include('home.php');
		}
		if ($page == "flowers") {
		include('flowers.php');

		}
	
		?> 


	
	</main>
	
</body>
</html>