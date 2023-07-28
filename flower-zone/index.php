<!DOCTYPE html>


<?php 

	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}
	else {
		$page = "home";
	}

	function getTemplate($page) {
		include($page . '.php');
	}
 ?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flower Zone: <?=$page?></title>
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header>
		<?php include('site-menu.php'); ?>

	</header>

	<main class='page-content'>
		<div class="inner-column">
		<?php

		if ($page == "home") { 
		include('home.php');
		}
		if ($page == "flowers") {
		include('flowers.php');
		}

		if ($page == "detail") {
		include('detail.php');

		}

		if ($page == "create") {
		include('create.php');

		}
	
		?> 

	</div>
	
	</main>

</body>

	<footer>
		<?php include('footer.php'); ?>

	</footer>

</html>