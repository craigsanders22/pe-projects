

<?php 
	$sections=['hero', 'main-content', 'feature', 'clients', 'faq', 'cta' ]
?>

<?php include('header.php') ?>

<?php 
	foreach ($sections as $section) {
		include ($section . '.php');
	} 
 ?>




<?php include('footer.php') ?>