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


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FZ: <?=$page?></title>
	<link rel="stylesheet" href="css/style.css">
	
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