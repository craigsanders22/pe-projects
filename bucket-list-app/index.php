<!DOCTYPE html>


<?php 

	$page = null;
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "login";
	}

	function getTemplate($page) {
		include($page . '.php');
	}
 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bucket List App</title>
	<link rel="stylesheet" href="css/site.css">

</head>
<body>
<header>
		<!-- <?php include('masthead.php'); ?> -->

</header>

<main>
	<?php include('login.php'); ?>
<!-- 	<?php include('signup.php'); ?>
	<?php include('wayfinding.php'); ?>
	<?php include('category-list.php'); ?>
	<?php include('detail-page.php'); ?>
 -->
</main>
</body>
</html>