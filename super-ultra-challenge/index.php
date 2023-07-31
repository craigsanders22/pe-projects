<!DOCTYPE html>


<?php 

	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
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
	<title>Super Ultra Responsive</title>
	<link rel="stylesheet" href="css/site.css">

</head>
<body>
<header>
		<?php include('masthead.php'); ?>

</header>

<main>
	<?php include('landing.php'); ?>
	<?php include('call-to-action.php'); ?>
	<?php include('articles.php'); ?>
	<?php include('call-to-action.php'); ?>









</main>

	
</body>
</html>